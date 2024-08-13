<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Evaluation;
use App\Models\EvaluationTitle;
use App\Models\Feedback;
use Illuminate\Http\Request;

class IqacController extends Controller
{
    public function feedback(){
        $feedback = Feedback::all();
        return view('web.feedback', compact('feedback'));
    }
    public function Evaluation(){
        $evaluations = Evaluation::all();
        return view('web.evaluation_report', compact('evaluations'));
    }
}
