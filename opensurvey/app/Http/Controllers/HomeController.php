<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
       /* if (Auth::check()) {
            $except_qId =\App\Answer::where('uId',Auth::id())->pluck('qId');
            $questions = \App\Question::whereNotIn('id',$except_qId)->orderBy('id','desc')->paginate(5);
            //$questions = DB::select("SELECT * FROM questions WHERE id NOT IN (SELECT qId FROM answers where uId=?)", [Auth::id()]);
        } else {
        */    
        //}
        $hot_questions = \App\Question::orderBy('id','asc')->take(4)->get();
        //foreach ($hot_questions as $question) {
        //    $question->dec_answers = json_decode($question->possibleAnswer);
        //}
        $new_questions = \App\Question::orderBy('id','desc')->take(3)->get();

        $rand_questions = \App\Question::inRandomOrder()->take(10)->get();
        //foreach ($new_questions as $question) {
        //    $question->dec_answers = json_decode($question->possibleAnswer);
        //}
        return view('home', ['hot_questions' => $hot_questions, 'new_questions' => $new_questions, 'rand_questions' => $rand_questions]);
    }

}
