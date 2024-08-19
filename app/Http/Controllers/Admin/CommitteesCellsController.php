<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CommitteesCellsTitle;
use Illuminate\Http\Request;

class CommitteesCellsController extends Controller
{
    public function index(){
        $titles = CommitteesCellsTitle::all();
        return view('admin.web.committees&cells.title.index', compact('titles'));
    }
    public function storeTitle(Request $request){
        $storeTitle =new CommitteesCellsTitle;
        $storeTitle->title = $request->title;
        $storeTitle->type = $request->type;

        $storeTitle->save();
        toastr()->success('New Committees & Cells Title Added Successfully');
        return redirect()->back();
    }
    public function update(Request $request){
        $updateTitle = CommitteesCellsTitle::find($request->id);
        $updateTitle->title = $request->title;
        $updateTitle->type = $request->type;

        $updateTitle->save();
        toastr()->success('Committees & Cells Title Updated Successfully');
        return redirect()->back();
    }
    public function delete($id){
        $deleteTitle = CommitteesCellsTitle::find($id);
    }
}
