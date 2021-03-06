<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Support\Facades\Auth;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestionController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		//
	}
	public function hot_questions() {
       
        $hot_questions = \App\Question::inRandomOrder()->take(10)->get();
        return view('hot_questions', ['hot_questions' => $hot_questions]);
    }
	public function new_questions() {
        $new_questions = \App\Question::inRandomOrder()->take(10)->get();
        return view('new_questions', ['new_questions' => $new_questions]);
    }
    public function search(Request $request) {
    	$keyword = $request->keyword;
        $result = \App\Question::with('answers')->where('question', 'like', '%'.$keyword.'%')->get();
        return view('search', ['result' => $result]);
    }
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
	}

	public function myQuestions() {
		// for question with multiple choice answers
		$questions = DB::select("SELECT MAX(A.id) as id,MAX(A.question) as question,MAX(A.possibleAnswer) as possibleAnswer,MAX(B.answer) as answer, count(B.answer) as count FROM (questions as A join answers as B on A.id=B.qId) WHERE A.uId=? GROUP BY A.id, B.answer;", [Auth::id()]);
		// change to left join to show all type of question, then impliment logic below
		$res_array = array();
		foreach ($questions as $question) {
//            var_dump($question);
			if (!array_key_exists($question->id, $res_array)) {
				$res_array[$question->id] = json_decode(json_encode($question), true);
				;
				//$res_array[$question->id]['possibleAnswer'] = json_decode($res_array[$question->id]['possibleAnswer']);
				$res_array[$question->id]['ans'] = array();
				foreach (json_decode($res_array[$question->id]['possibleAnswer']) as $a) {
					$res_array[$question->id]['ans'][] = 0;
				}
				$res_array[$question->id]['ans'][$question->answer] = (int) $question->count;
			} else {
				$res_array[$question->id]['ans'][$question->answer] = (int) $question->count;
			}
		}
		return view('myQuestions', ['questions' => $res_array]);
	}

	public function answer(Request $request) {
		$answer = new \App\Answer;

		$answer->answer = $request->answer;
		$answer->user_id = Auth::id();
		$answer->question_id = $request->question_id;
		if (Auth::check()) {
			Auth::user()->point += 1;
			Auth::user()->save();
		}
		$answer->save();
		return redirect()->route('home');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		//
		$question = new \App\Question;

		$question->question = $request->question;
		if(isset($request->answers)){
			$question->possibleAnswer = json_encode($request->answers);
		}else{
			$question->possibleAnswer = null;
		}
		$question->status = 0;
		if (Auth::check()) {
			$question->user_id = Auth::id();
			if(Auth::user()->point>0){
				Auth::user()->point -= 1;
				Auth::user()->save();
				$question->save();
			}else{
				$validator = Validator::make($request->all(), []);
				$validator->errors()->add('newQuest', 'You dont have enough point to do this');
				return back()->withErrors($validator)->withInput();
			}
		}else{
			$question->user_id = null;
			$question->save();
		}



		return redirect()->route('home');
	}
	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Question  $question
	 * @return \Illuminate\Http\Response
	 */
	public function show(Question $question) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Question  $question
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Question $question) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Question  $question
	 * @return \Illuminate\Http\Response
	 */
	public function display_detail(Request $request){
		$question = \App\Question::find($request->quest_id);
		$question->dec_answers = json_decode($question->possibleAnswer);

		//$others_answers = \App\Answer::where('qId',$question->id)->get();

		//$others_answers = DB::select("SELECT A.id, A.answer, A.uId, A.created_at, B.username, B.name FROM answers as A left join users as B on A.uId=B.id where A.qId=?;", [$question->id]);
		$others_answers = $question->answers;
		// change to left join to show all type of question, then impliment logic below
		$res_array = DB::select("SELECT A.answer as answer, count(A.answer) as count  FROM answers as A where A.question_id=? GROUP BY A.question_id, A.answer;", [$question->id]);

		return view('form_question_detail', ['quest' => $question, 'others_answers' => $others_answers, 'percentage' => $res_array]);
	}
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Question  $question
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Question $question) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Question  $question
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Question $question) {
		//
	}

}
