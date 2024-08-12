<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Evaluation;
use App\Models\EvaluationTitle;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    public function index(){
        $evaluations = EvaluationTitle::all();
        return view('admin.web.iqac-evaluation.title.index', compact('evaluations'));
    }
    public function store(Request $request){
        $store = new EvaluationTitle();
        $store->title = $request->title;
        $store->save();
        toastr()->success('Evaluation Report Title Added Successfully.');
        return redirect()->back();
    }
    public function update(Request $request){
        $update = EvaluationTitle::find($request->id);
        $update->title = $request->title;

        $update->save();
        toastr()->success('Evaluation Report Title Updated Successfully.');
        return redirect()->back();
    }
    public function delete($id){
        $delete = EvaluationTitle::find($id);
        $delete->delete();
        toastr()->success('Deleted Successfully.');
        return redirect()->back();
    }

    public function list(){
        return view('admin.web.iqac-evaluation.evaluation.index');
    }
    public function add(){
        return view('admin.web.iqac-evaluation.evaluation.add');
    }
}
