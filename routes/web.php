<?php
use App\Models\application;
use App\Models\Investor;
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

Route::get('/', function () {
    return view('welcome');
});

// Getting applications using Model.
Route::get('/applications', function(){
	$applications=Application::all();
	foreach($applications as $application)
	{
		echo $application->user_id.' '.$application->username.' '.$application->account_type.'<br>';
	}
	return "Testing the user";
});

// Getting Invesors details using Model.
/* Route::get('/investors',function(){
	$investors=Investor::where('user_id','>',20)
						->get();
	foreach($investors as $investor)
	{
		echo $investor->user_id.' '.$investor->firstname.' '.$investor->lastname.' '.$investor->applications->account_type.'<br>';
	}
	return "Testing Investors";
}); */
/*
// Testing middleware 
Route::get('/investors/{id}',function($id){
	
	return " Investor with id of ".$id;
	
})->middleware('invcheck'); */

// Relationship geting investors details using Eloquent relationship
Route::get('/applications/{id}/investor',function($id){
	$investors=Application::find($id)->investors;
	foreach($investors as $investor)
	{
		echo $investor->firstname.' '.$investor->lastname." ";
	}
	return $investors;
});
// updating Investor details using Eloquent
 Route::get('/users/{id}/update',function($id){
	$investor=Investor::find($id);
	return view('practice/updateInvestor')->with('investor',$investor);
	//return $investor;
})->middleware('auth');
Route::post('/users/{id}/update','Practice\investors@storeInvestor');

// Practicing Session
Route::get('/setsession','Practice\investors@setSession');
Route::get('getsession','Practice\investors@getSession');

// Testing Laravel Emails.
Route::get('/sendMail','Practice\investors@sendMail');





Route::resource('investors','Investors\Investors');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
