<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Proceeding;
use Illuminate\Http\Request;

class PublicationsController extends Controller
{
    public function proceedings(){
        $proceedings = Proceeding::all();
        return view('web.proceedings', compact('proceedings'));
    }
    public function documentation(){
        return view('web.documentation');
    }
    public function annualMagazine(){
        return view('web.annual_magazine');
    }
}
