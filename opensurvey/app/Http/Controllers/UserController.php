<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Question;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
	public function index() {
		$asked = \App\Question::where('uId',Auth::user()->id)->get();
		$answered = DB::select("SELECT questions.id as id, question, answer FROM opensurvey.questions join opensurvey.answers on questions.id=answers.qId WHERE answers.uId=?;", [Auth::id()]);
        return view('profile', ['user' => Auth::user(),'asked'=>$asked,'answered'=>$answered]);
    }
    //
}
