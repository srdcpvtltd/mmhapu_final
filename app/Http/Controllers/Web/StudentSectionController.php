<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentSectionController extends Controller
{
    public function onlineCertificate(){
        return view('web.application-online-certificate');
    }
}
