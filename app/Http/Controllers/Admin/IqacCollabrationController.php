<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Collabration;
use Illuminate\Http\Request;

class IqacCollabrationController extends Controller
{
    public function list(){
        $collabrations = Collabration::all();
        return view('admin.web.collabration.list', compact('collabrations'));
    }
    public function add(){
        return view('admin.web.collabration.add');
    }
    public function store(Request $request){
        $store = new Collabration();
        $store->designation = $request->designation;
        $store->name = $request->name;
        $store->email = $request->email;
        $store->contact = $request->contact;
        if($request->hasFile('resume')){
            $resume = $request->file('resume');
            $resumeName = time() . '_' . $resume->getClientOriginalName();
            $resume->move(public_path('uploads/collabration'), $resumeName);
            $store->resume = $resumeName;
        }
        $store->save();
        toastr()->success('New Collabration Added Successfully.');
        return redirect()->route('admin.Collabration.list');
    }
    public function edit($id){
        $edit = Collabration::find($id);
        return view('admin.web.collabration.edit', compact('edit'));
    }
    public function update(Request $request){
        $update = Collabration::find($request->id);
        $update->designation = $request->designation;
        $update->name = $request->name;
        $update->email = $request->email;
        $update->contact = $request->contact;
        if($request->hasFile('resume')){
            if ($update->resume && file_exists(public_path('uploads/collabration/' . $update->resume))) {
                unlink(public_path('uploads/collrabration/' . $update->resume));
            }

            $resume = $request->file('resume');
            $resumeName = time() . '_' . $resume->getClientOriginalName();
            $resume->move(public_path('uploads/collrabration'), $resumeName);

            $update->resume = $resumeName;
        }
        $update->save();
        toastr()->success('Collabration Updated Successfully');
        return redirect()->route('admin.Collabration.list');
    }
    public function delete($id){
        $delete = Collabration::find($id);
        if($delete){
            if($delete->resume && file_exists(public_path('uploads/collabration/' . $delete->resume))){
                unlink(public_path('uploads/collabration/' . $delete->resume));
            }
            $delete->delete();
            toastr()->success('Collabration Deleted Successfully.');
            return redirect()->back();
        }
        toastr()->error('Something Wents Wrong.');
        return redirect()->back();
    }
}
