<?php

use Illuminate\Support\Facades\Route;
use App\District;
use App\Sector;

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



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();
Route::get('lang/{locale}', function($locale){

    session()->put('locale',$locale);
    return redirect()->back();
    

});
Route::get('/', 'ProcessController@index')->name('process.index');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/welcome','ProcessController@welcome')->name('process.welcome');
Route::get('/notice','ProcessController@notice')->name('process.notice');
Route::get('/auth','ProcessController@auth')->name('process.auth');
Route::get('/getsector/{id}','ProcessController@sector')->name('getsector');



Route::get('/medical-test','ProcessController@symptom')->name('process.symptom');


Route::get('/travel-history','ProcessController@travel_history')->name('process.travel_history');



Route::get('/contact-history','ProcessController@contact_history')->name('process.contact_history');
Route::get('/get-details','ProcessController@details')->name('process.details');
Route::get('/test-centers','ProcessController@centers')->name('process.centers');


Route::get('/feedback','ProcessController@feedback')->name('process.feedback');
Route::post('/handle.auth','HandleController@auth')->name('handle.auth');
Route::post('/handle.symptom','HandleController@symptom')->name('handle.symptom');
Route::post('/handle.travel','HandleController@travel')->name('handle.travel');
Route::post('/handle.contact_history','HandleController@contact_history')->name('handle.contact_history');
Route::post('/handle.detail','HandleController@detail')->name('handle.detail');
Route::get('/handle.final','HandleController@final')->name('handle.final');
Route::get('/final-result','HandleController@feedback')->name('handle.feedback');

Route::post('/handle.notice', 'HandleController@notice')->name('handle.notice');

Route::get('/manager.index','ManagerController@index')->name('manager.index');

Route::get('/vistor-list','ManagerController@vistor')->name('manager.vistor');
Route::get('/vistor-trials/{id}','ManagerController@trial')->name('manager.trial');
Route::get('/Emergency-cases','ManagerController@emergency')->name('manager.emergency');
Route::get('/Emergency-contacts','ManagerController@detail')->name('manager.detail');




