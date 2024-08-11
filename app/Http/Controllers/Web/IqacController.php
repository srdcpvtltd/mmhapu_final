<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class IqacController extends Controller
{
    public function feedback(){
        $feedback = Feedback::all();
        return view('web.feedback', compact('feedback'));
    }
}
