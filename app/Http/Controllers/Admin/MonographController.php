<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Documentation;
use App\Models\Monograph;
use Illuminate\Http\Request;

class MonographController extends Controller
{
    public function List(){
        $monograph = Monograph::all();
        return view('admin.web.monograph.index', compact('monograph'));
    }
    public function Store(Request $request){
        $Store = new Monograph();
        $Store->name = $request->name;
        if($request->hasFile('file')){
            $pdf = $request->file('file');
            $pdfName = time() . '_' . $pdf->getClientOriginalName();
            $pdf->move(public_path('uploads/Monograph'), $pdfName);
            $Store->file = $pdfName;
        }
        $Store->save();
        toastr()->success('New Monograph Added Successfully');
        return redirect()->back();
    }
    public function Edit($id){
        $Edit = Monograph::find($id);
        return view('admin.web.monograph.edit', compact('Edit'));
    }
    public function Update(Request $request){
        $Update = Monograph::find($request->id);
        $Update->name = $request->name;
        if($request->hasFile('file')){
            if($Update->file && file_exists(public_path('uploads/Monograph/'. $Update->file))){
                unlink(public_path('uploads/Monograph/' . $Update->file));
            }
            $pdf= $request->file('file');
            $pdfName = time() . '_' . $pdf->getClientOriginalName();
            $pdf->move(public_path('uploads/Monograph'), $pdfName);
            $Update->file = $pdfName;
        }
        $Update->save();
        toastr()->success('Monograph Updated Successfully');
        return redirect()->route('admin.monograph.list');
    }
    public function Delete($id){
        $Delete = Monograph::find($id);
        if($Delete){
            if ($Delete->file && file_exists(public_path('uploads/Monograph/' . $Delete->file))) {
                unlink(public_path('uploads/Monograph/' . $Delete->file));
            }
            $Delete->delete();
            toastr()->success('Deleted Successfully');
            return redirect()->back();
        }
        toastr()->error('Something wents wrong.');
        return redirect()->back();
    }

    //documentation
    public function documentationList(){
        $documentation = Documentation::all();
        return view('admin.web.documentation.index', compact('documentation'));
    }
    public function documentationStore(Request $request){
        $documentationStore = new Documentation();
        $documentationStore->btn_text = $request->btn_text;
        $documentationStore->color = $request->color;
        if($request->hasFile('file')){
            $pdf = $request->file('file');
            $pdfName = time() . '_' . $pdf->getClientOriginalName();
            $pdf->move(public_path('uploads/Documentation'), $pdfName);
            $documentationStore->file = $pdfName;
        }
        $documentationStore->save();
        toastr()->success('New Documentation Added Successfully');
        return redirect()->back();
    }
    public function documentationEdit($id){
        $Edit = Documentation::find($id);
        return view('admin.web.monograph.edit', compact('Edit'));
    }
    public function documentationUpdate(Request $request){
        $Update = Documentation::find($request->id);
        $Update->name = $request->name;
        if($request->hasFile('file')){
            if($Update->file && file_exists(public_path('uploads/Monograph/'. $Update->file))){
                unlink(public_path('uploads/Monograph/' . $Update->file));
            }
            $pdf= $request->file('file');
            $pdfName = time() . '_' . $pdf->getClientOriginalName();
            $pdf->move(public_path('uploads/Monograph'), $pdfName);
            $Update->file = $pdfName;
        }
        $Update->save();
        toastr()->success('Monograph Updated Successfully');
        return redirect()->route('admin.monograph.list');
    }
    public function documentationDelete($id){
        $Delete = Documentation::find($id);
        if($Delete){
            if ($Delete->file && file_exists(public_path('uploads/Monograph/' . $Delete->file))) {
                unlink(public_path('uploads/Monograph/' . $Delete->file));
            }
            $Delete->delete();
            toastr()->success('Deleted Successfully');
            return redirect()->back();
        }
        toastr()->error('Something wents wrong.');
        return redirect()->back();
    }
}
