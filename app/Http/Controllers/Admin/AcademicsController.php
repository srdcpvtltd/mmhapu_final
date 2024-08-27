<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Fazil;
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
        }
    }
}
