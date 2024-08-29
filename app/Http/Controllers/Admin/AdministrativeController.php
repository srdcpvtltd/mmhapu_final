<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdministrativeOfficer;
use App\Models\UniversityAdministration;
use App\Models\UniversityAdministrationTitle;
use Illuminate\Http\Request;

class AdministrativeController extends Controller
{
    public function officersList(){
        $officersList = AdministrativeOfficer::all();
        return view('admin.web.administrative-officers.list', compact('officersList'));
    }
    public function officersAdd(){
        return view('admin.web.administrative-officers.add');
    }
    public function officersStore(Request $request){
        $officersStore = new AdministrativeOfficer;
        $officersStore->designation = $request->designation;
        $officersStore->name = $request->name;
        $officersStore->email = $request->email;
        $officersStore->contact = $request->contact;
        if($request->hasFile('resume')){
            $resume = $request->file('resume');
            $resumeName = time(). '_' . $resume->getClientOriginalName();
            $resume->move(public_path('uploads/administrative'), $resumeName);
            $officersStore->resume = $resumeName;
        }
        $officersStore->save();
        toastr()->success('New Administrative Officers Added Successfully.');
        return redirect()->route('admin.administrative_officers.list');
    }
    public function officersEdit($id){
        $officersEdit = AdministrativeOfficer::find($id);
        return view('admin.web.administrative-officers.edit', compact('officersEdit'));
    }
    public function officersUpdate(Request $request){
        $officersUpdate = AdministrativeOfficer::find($request->id);
        $officersUpdate->designation = $request->designation;
        $officersUpdate->name = $request->name;
        $officersUpdate->email = $request->email;
        $officersUpdate->contact = $request->contact;
        if($request->hasFile('resume')){
            if($officersUpdate->resume && file_exists(public_path('uploads/administrative/'. $officersUpdate->resume))){
                unlink(public_path('uploads/administrative/'.  $officersUpdate->resume));
            }
            $resume = $request->file('resume');
            $resumeName = time(). '_' . $resume->getClientOriginalName();
            $resume->move(public_path('uploads/administrative'), $resumeName);
            $officersUpdate->resume = $resumeName;
        }
        $officersUpdate->save();
        toastr()->success('Administrative Officers Updated Successfully');
        return redirect()->route('admin.administrative_officers.list');
    }
    public function officersDelete($id){
        $officersDelete = AdministrativeOfficer::find($id);
        if($officersDelete){
            if($officersDelete->resume && file_exists(public_path('uploads/administrative/'.$officersDelete->resume))){
                unlink(public_path('uploads/administrative/'. $officersDelete->resume));
            }
            $officersDelete->delete();
            toastr()->success('Deleted Successfully');
            return redirect()->back();
        }
        toastr()->error('Something wents wrong.');
        return redirect()->back();
    }

    //
    public function university_officers_titleList(){
        $titles = UniversityAdministrationTitle::all();
        return view('admin.web.university-officers.title.index', compact('titles'));
    }
    public function university_officers_titleStore(Request $request){
        $university_officers_titleStore= new UniversityAdministrationTitle;
        $university_officers_titleStore->title = $request->title;

        $university_officers_titleStore->save();
        toastr()->success('New University Officer Title Added Successfully');
        return redirect()->route('admin.university_officers_title.list');
    }
    public function university_officers_titleUpdate(Request $request){
        $university_officers_titleUpdate = UniversityAdministrationTitle::find($request->id);
        $university_officers_titleUpdate->title = $request->title;

        $university_officers_titleUpdate->save();
        toastr()->success('University Officer Title Updated Successfully');
        return redirect()->route('admin.university_officers_title.list');
    }
    public function university_officers_titleDelete($id){
        $university_officers_titleDelete = UniversityAdministrationTitle::find($id);
        if($university_officers_titleDelete){
            $university_officers_titleDelete->delete();
            toastr()->success('Deleted Successfully');
            return redirect()->back();
        }
        toastr()->error('Something wents wrong.');
        return redirect()->back();
    }

    //University Adminstative
    public function university_officersList(){
        return view('admin.web.university-officers.officers.list');
    }
    public function university_officersAdd(){
        $add = UniversityAdministrationTitle::all();
        return view('admin.web.university-officers.officers.add', compact('add'));
    }
    public function university_officersStore(Request $request){
        $university_officersStore = new UniversityAdministration();
        $university_officersStore->title_id = $request->title_id;
        $university_officersStore->designation = $request->designation;
        $university_officersStore->name = $request->name;
        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/universityOfficer'),$imageName);
            $university_officersStore->image = $imageName;
        }
        if($request->hasFile('resume')){
            $resume = $request->file('resume');
            $resumeName = time() . '_' . $resume->getClientOriginalName();
        }
    }
}
