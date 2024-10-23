<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\OnlineCertificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class StudentSectionController extends Controller
{
    public function onlineCertificate()
    {
        return view('web.application-online-certificate');
    }
    public function certificateStore(Request $request)
    {
        $request->validate([
            'reg_no' => 'required',
            'roll_no' => 'required|unique:online_certificates,roll_no',
            'name' => 'required',
            'hindi_name' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'number' => 'required|numeric|unique:online_certificates,number',
            'certificate' => 'required',
            'college' => 'required',
            'session' => 'required',
            'passing_year' => 'required',
            'recive_degree' => 'required',
            'recive_mode' => 'required',
        ]);
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

        $encryptedId = Crypt::encrypt($certificateStore->id);

        return redirect('/payment/' . $encryptedId);
    }
    public function certificateView()
    {
        $certificates = OnlineCertificate::all();
        return view('admin.web.application-certificate.index', compact('certificates'));
    }

    public function checkMobileNumber(Request $request)
    {
        $request->validate([
            'rollno' => 'required',
        ]);

        $certificate = OnlineCertificate::where('roll_no', $request->rollno)->first();

        if ($certificate) {
            return redirect()->route('viewCertificate', ['roll_no' => $request->rollno]);
        } else {
            toastr()->error('This Roll No. is not registered.');
            return redirect()->back();
        }
    }

    public function viewCertificate($roll_no)
    {
        $certificate = OnlineCertificate::where('roll_no', $roll_no)->firstOrFail();

        return view('web.view-online-certificate', compact('certificate'));
    }
}
