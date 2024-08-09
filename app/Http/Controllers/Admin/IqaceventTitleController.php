<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\IqacEvent;
use App\Models\IqaceventTitle;
use Illuminate\Http\Request;

class IqaceventTitleController extends Controller
{
    public function list()
    {
        $Titles = IqaceventTitle::all();
        return view('admin.web.iqac-event.title.list', compact('Titles'));
    }
    public function add()
    {
        return view('admin.web.iqac-event.title.add');
    }
    public function store(Request $request)
    {
        $store = new IqaceventTitle();
        $store->title = $request->title;
        $store->year = $request->year;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('IQAC Event'), $imageName);
            $store->image = $imageName;
        }
        $store->save();
        toastr()->success('IQAC Title Added Successfully');
        return redirect()->route('admin.IqacEventTitle.list');
    }
    public function edit($id)
    {
        $edit = IqaceventTitle::find($id);
        return view('admin.web.iqac-event.title.edit', compact('edit'));
    }
    public function update(Request $request)
    {
        $update = IqaceventTitle::find($request->id);
        $update->title = $request->title;
        $update->year = $request->year;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            if ($update->image && file_exists(public_path('IQAC Event/' . $update->image))) {
                unlink(public_path('IQAC Event/' . $update->image));
            }
            $image->move(public_path('IQAC Event'), $imageName);
            $update->image = $imageName;
        }
        $update->save();
        toastr()->success('IQAC Title Added Successfully');
        return redirect()->route('admin.IqacEventTitle.list');
    }
    public function delete($id){
        $delete = IqaceventTitle::find($id);
        if ($delete) {
            if ($delete->image && file_exists(public_path('IQAC Event/' . $delete->image))) {
                unlink(public_path('IQAC Event/' . $delete->image));
            }
            IqacEvent::where('title_id',$id)->delete();
            $delete->delete();
            toastr()->success('Deleted Successfully');
            return redirect()->back();
        }
        toastr()->error('Deleted Successfully');
        return redirect()->back();
    }
}
