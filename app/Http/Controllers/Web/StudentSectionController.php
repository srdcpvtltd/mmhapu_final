<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\OnlineCertificate;
use Illuminate\Http\Request;

class StudentSectionController extends Controller
{
    public function onlineCertificate(){
        return view('web.application-online-certificate');
    }
    public function certificateStore(Request $request){
        $certificateStore = new OnlineCertificate();

        $certificateStore->request_id = mt_rand(10000, 99999);

        $certificateStore->reg_no = $request->reg_no;
        $certificateStore->roll_no = $request->roll_no;
        $certificateStore->name = $request->name;
        $certificateStore->hindi_name = $request->hindi_name;
        $certificateStore->gender = $request->gender;
        $certificateStore->email = $request->email;
        $certificateStore->number = $request->number;
        $certificateStore->certificate = $request->certificate;
        $certificateStore->college = $request->college;
        $certificateStore->session = $request->session;
        $certificateStore->passing_year = $request->passing_year;
        $certificateStore->recive_degree = $request->recive_degree;
        $certificateStore->recive_mode = $request->recive_mode;
        $certificateStore->address = $request->address;

        $certificateStore->save();
        return redirect()->back();
    }
}
