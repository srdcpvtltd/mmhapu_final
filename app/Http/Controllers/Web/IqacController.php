<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Committee;
use App\Models\Evaluation;
use App\Models\EvaluationTitle;
use App\Models\Feedback;
use App\Models\Minute;
use App\Models\Policy;
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
    public function committees(){
        $committees = Committee::all();
        return view('web.iqac_committees', compact('committees'));
    }
    public function policy(){
        $policy = Policy::all();
        return view('web.policy', compact('policy'));
    }
    public function minutes(){
        $minute = Minute::all();
        return view('web.iqac_minutes', compact('minute'));
    }
}
