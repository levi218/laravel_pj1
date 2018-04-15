<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Question;
use App\Answer;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
	public function index() {
		//$asked = \App\Question::where('uId',Auth::user()->id)->get();
		$asked = Auth::user()->questions;
		//$answered = DB::select("SELECT questions.id as id, question, answer FROM questions join answers on questions.id=answers.qId WHERE answers.uId=?;", [Auth::id()]);
		$answered = \App\Answer::with('question')->where('user_id',Auth::user()->id)->get()->pluck('question');
        return view('profile', ['user' => Auth::user(),'asked'=>$asked,'answered'=>$answered]);
    }
    //
}
