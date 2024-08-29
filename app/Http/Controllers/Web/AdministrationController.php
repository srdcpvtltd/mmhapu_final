<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\AdministrativeOfficer;
use Illuminate\Http\Request;

class AdministrationController extends Controller
{
    public function chancellor_1(){
        return view('web.chancellor_1');
    }

    public function vc(){
        return view('web.vc');
    }

    public function universityAuthority(){
        return view('web.university_authority');
    }

    public function statutoryBodies(){
        $administativeOfficers = AdministrativeOfficer::all();
        return view('web.statutory_bodies', compact('administativeOfficers'));
    }

    public function universityOfficers(){
        return view('web.university_officers');
    }

    public function directory(){
        return view('web.directory');
    }
}
