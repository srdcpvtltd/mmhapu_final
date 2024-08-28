<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Alim;
use App\Models\Fazil;
use App\Models\KrcWithAicte;
use App\Models\KrcWithoutAicte;
use Illuminate\Http\Request;

class AcademicsController extends Controller
{
    public function fazilList(){
        $fazil = Fazil::all();
        return view('admin.web.fazil.list', compact('fazil'));
    }
    public function fazilAdd(){
        return view('admin.web.fazil.add');
    }
    public function fazilStore(Request $request){
        $fazilStore = new Fazil();
        $fazilStore->designation = $request->designation;
        $fazilStore->name = $request->name;
        $fazilStore->email = $request->email;
        $fazilStore->contact = $request->contact;
        if($request->hasFile('resume')){
            $resume = $request->file('resume');
            $resumeName = time(). '_' . $resume->getClientOriginalName();
            $resume->move(public_path('uploads/fazil'), $resumeName);
            $fazilStore->resume = $resumeName;
        }
        $fazilStore->save();
        toastr()->success('New Fazil Added Successfully.');
        return redirect()->route('admin.fazil.list');
    }
    public function fazilEdit($id){
        $fazilEdit = Fazil::find($id);
        return view('admin.web.fazil.edit', compact('fazilEdit'));
    }
    public function fazilUpdate(Request $request){
        $fazilUpdate = Fazil::find($request->id);
        $fazilUpdate->designation = $request->designation;
        $fazilUpdate->name = $request->name;
        $fazilUpdate->email = $request->email;
        $fazilUpdate->contact = $request->contact;
        if($request->hasFile('resume')){
            if($fazilUpdate->resume && file_exists(public_path('uploads/fazil/'. $fazilUpdate->resume))){
                unlink(public_path('uploads/fazil/'.  $fazilUpdate->resume));
            }
            $resume = $request->file('resume');
            $resumeName = time(). '_' . $resume->getClientOriginalName();
            $resume->move(public_path('uploads/fazil'), $resumeName);
            $fazilUpdate->resume = $resumeName;
        }
        $fazilUpdate->save();
        toastr()->success('Fazil Updated Successfully');
        return redirect()->route('admin.fazil.list');
    }
    public function fazilDelete($id){
        $fazilDelete = Fazil::find($id);
        if($fazilDelete){
            if($fazilDelete->resume && file_exists(public_path('uploads/fazil/'. $fazilDelete->resume))){
                unlink(public_path('uploads/fazil/'. $fazilDelete->resume));
            }
            $fazilDelete->delete();
            toastr()->success('Deleted Successfully');
            return redirect()->back();
        }
        toastr()->error('Something wents wrong.');
        return redirect()->back();
    }

    //Alim

    public function alimList(){
        $Alim = Alim::all();
        return view('admin.web.alim.list', compact('Alim'));
    }
    public function alimAdd(){
        return view('admin.web.alim.add');
    }
    public function alimStore(Request $request){
        $alimStore = new Alim();
        $alimStore->designation = $request->designation;
        $alimStore->name = $request->name;
        $alimStore->email = $request->email;
        $alimStore->contact = $request->contact;
        if($request->hasFile('resume')){
            $resume = $request->file('resume');
            $resumeName = time(). '_' . $resume->getClientOriginalName();
            $resume->move(public_path('uploads/alim'), $resumeName);
            $alimStore->resume = $resumeName;
        }
        $alimStore->save();
        toastr()->success('New Alim Added Successfully.');
        return redirect()->route('admin.alim.list');
    }
    public function alimEdit($id){
        $alimEdit = Alim::find($id);
        return view('admin.web.alim.edit', compact('alimEdit'));
    }
    public function alimUpdate(Request $request){
        $alimUpdate = Alim::find($request->id);
        $alimUpdate->designation = $request->designation;
        $alimUpdate->name = $request->name;
        $alimUpdate->email = $request->email;
        $alimUpdate->contact = $request->contact;
        if($request->hasFile('resume')){
            if($alimUpdate->resume && file_exists(public_path('uploads/alim/'. $alimUpdate->resume))){
                unlink(public_path('uploads/alim/'.  $alimUpdate->resume));
            }
            $resume = $request->file('resume');
            $resumeName = time(). '_' . $resume->getClientOriginalName();
            $resume->move(public_path('uploads/alim'), $resumeName);
            $alimUpdate->resume = $resumeName;
        }
        $alimUpdate->save();
        toastr()->success('Alim Updated Successfully');
        return redirect()->route('admin.alim.list');
    }
    public function alimDelete($id){
        $alimDelete = Alim::find($id);
        if($alimDelete){
            if($alimDelete->resume && file_exists(public_path('uploads/alim/'.$alimDelete->resume))){
                unlink(public_path('uploads/alim/'. $alimDelete->resume));
            }
            $alimDelete->delete();
            toastr()->success('Deleted Successfully');
            return redirect()->back();
        }
        toastr()->error('Something wents wrong.');
        return redirect()->back();
    }

    //
    public function WithAicteList(){
        $WithAicte = KrcWithAicte::all();
        return view('admin.web.krc-with-aicte.list', compact('WithAicte'));
    }
    public function WithAicteAdd(){
        return view('admin.web.krc-with-aicte.add');
    }
    public function WithAicteStore(Request $request){
        $WithAicteStore =new KrcWithAicte;
        $WithAicteStore->designation = $request->designation;
        $WithAicteStore->name = $request->name;
        $WithAicteStore->email = $request->email;
        $WithAicteStore->contact = $request->contact;
        if($request->hasFile('resume')){
            $resume = $request->file('resume');
            $resumeName = time(). '_' . $resume->getClientOriginalName();
            $resume->move(public_path('uploads/krc'), $resumeName);
            $WithAicteStore->resume = $resumeName;
        }
        $WithAicteStore->save();
        toastr()->success('New KRC With AICTE Recognition Added Successfully.');
        return redirect()->route('admin.krcWithAicte.list');
    }
    public function WithAicteEdit($id){
        $WithAicteEdit = KrcWithAicte::find($id);
        return view('admin.web.krc-with-aicte.edit', compact('WithAicteEdit'));
    }
    public function WithAicteUpdate(Request $request){
        $WithAicteUpdate = KrcWithAicte::find($request->id);
        $WithAicteUpdate->designation = $request->designation;
        $WithAicteUpdate->name = $request->name;
        $WithAicteUpdate->email = $request->email;
        $WithAicteUpdate->contact = $request->contact;
        if($request->hasFile('resume')){
            if($WithAicteUpdate->resume && file_exists(public_path('uploads/krc/'. $WithAicteUpdate->resume))){
                unlink(public_path('uploads/krc/'.  $WithAicteUpdate->resume));
            }
            $resume = $request->file('resume');
            $resumeName = time(). '_' . $resume->getClientOriginalName();
            $resume->move(public_path('uploads/krc'), $resumeName);
            $WithAicteUpdate->resume = $resumeName;
        }
        $WithAicteUpdate->save();
        toastr()->success('KRC With AICTE Recognition Updated Successfully');
        return redirect()->route('admin.krcWithAicte.list');
    }
    public function WithAicteDelete($id){
        $WithAicteDelete = KrcWithAicte::find($id);
        if($WithAicteDelete){
            if($WithAicteDelete->resume && file_exists(public_path('uploads/krc/'.$WithAicteDelete->resume))){
                unlink(public_path('uploads/krc/'. $WithAicteDelete->resume));
            }
            $WithAicteDelete->delete();
            toastr()->success('Deleted Successfully');
            return redirect()->back();
        }
        toastr()->error('Something wents wrong.');
        return redirect()->back();
    }

    //
    public function WithoutAicteList(){
        $WithoutAicte = KrcWithoutAicte::all();
        return view('admin.web.krc-without-aicte.list', compact('WithoutAicte'));
    }
    public function WithoutAicteAdd(){
        return view('admin.web.krc-without-aicte.add');
    }
    public function WithoutAicteStore(Request $request){
        $WithoutAicteStore =new KrcWithoutAicte;
        $WithoutAicteStore->designation = $request->designation;
        $WithoutAicteStore->name = $request->name;
        $WithoutAicteStore->email = $request->email;
        $WithoutAicteStore->contact = $request->contact;
        if($request->hasFile('resume')){
            $resume = $request->file('resume');
            $resumeName = time(). '_' . $resume->getClientOriginalName();
            $resume->move(public_path('uploads/krc'), $resumeName);
            $WithoutAicteStore->resume = $resumeName;
        }
        $WithoutAicteStore->save();
        toastr()->success('New KRC Without AICTE Recognition Added Successfully.');
        return redirect()->route('admin.krcWithoutAicte.list');
    }
    public function WithoutAicteEdit($id){
        $WithoutAicteEdit = KrcWithoutAicte::find($id);
        return view('admin.web.krc-without-aicte.edit', compact('WithoutAicteEdit'));
    }
    public function WithoutAicteUpdate(Request $request){
        $WithoutAicteUpdate = KrcWithoutAicte::find($request->id);
        $WithoutAicteUpdate->designation = $request->designation;
        $WithoutAicteUpdate->name = $request->name;
        $WithoutAicteUpdate->email = $request->email;
        $WithoutAicteUpdate->contact = $request->contact;
        if($request->hasFile('resume')){
            if($WithoutAicteUpdate->resume && file_exists(public_path('uploads/krc/'. $WithoutAicteUpdate->resume))){
                unlink(public_path('uploads/krc/'.  $WithoutAicteUpdate->resume));
            }
            $resume = $request->file('resume');
            $resumeName = time(). '_' . $resume->getClientOriginalName();
            $resume->move(public_path('uploads/krc'), $resumeName);
            $WithoutAicteUpdate->resume = $resumeName;
        }
        $WithoutAicteUpdate->save();
        toastr()->success('KRC Without AICTE Recognition Updated Successfully');
        return redirect()->route('admin.krcWithoutAicte.list');
    }
    public function WithoutAicteDelete($id){
        $WithoutAicteDelete = KrcWithoutAicte::find($id);
        if($WithoutAicteDelete){
            if($WithoutAicteDelete->resume && file_exists(public_path('uploads/krc/'.$WithoutAicteDelete->resume))){
                unlink(public_path('uploads/krc/'. $WithoutAicteDelete->resume));
            }
            $WithoutAicteDelete->delete();
            toastr()->success('Deleted Successfully');
            return redirect()->back();
        }
        toastr()->error('Something wents wrong.');
        return redirect()->back();
    }
}
