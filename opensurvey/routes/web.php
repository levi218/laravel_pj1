<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/aboutus', function (){return view('about');})->name('aboutus');
Route::get('/shop', function (){return view('shop');})->name('shop');
Route::get('/search', function (){return view('search');})->name('search');

Route::get('/questions/new', 'QuestionController@new_questions');
Route::get('/questions/hot', 'QuestionController@hot_questions');

Route::get('/questions/display_detail', 'QuestionController@display_detail');
Route::get('/profile','UserController@index')->name('profile')->middleware('auth');;

Route::post('/questions/answer','QuestionController@answer')->name('questions.answer');
Route::get('/questions/own','QuestionController@myQuestions')->name('questions.own');
Route::resource('questions', 'QuestionController');