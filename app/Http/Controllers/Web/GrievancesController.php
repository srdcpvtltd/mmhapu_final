<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GrievancesController extends Controller
{
    public function grievances(){
        return view('web.grievances');
    }
    public function reloadCaptcha(){
        return response()->json(['captcha'=>captcha_img()]);
    }
}
