<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LogMiddleware;
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

Route::get('/hello', 'HelloController@index');

Route::get('/hello/view', 'HelloController@view');

Route::get('/hello/list', 'HelloController@list');

Route::get('/view/escape', 'ViewController@escape');

Route::get('/view/if', 'ViewController@if');
Route::get('/view/isset', 'ViewController@isset');
Route::get('/view/foreach_assoc', 'ViewController@foreach_assoc');
Route::get('/view/foreach_loop', 'ViewController@foreach_loop');
Route::get('/view/master', 'ViewController@master');
Route::get('/view/comp', 'ViewController@comp');
Route::get('/view/list', 'ViewController@list');

Route::get('/route/param/{id?}', 'RouteController@param')
    ->where(['id' => '[0-9][2,3]']);

Route::get('ctrl/plain', 'CtrlController@plain');
Route::get('ctrl/header', 'CtrlController@header');
Route::get('ctrl/outJson', 'CtrlController@outJson');
Route::get('ctrl/outFile', 'CtrlController@outFile');
Route::get('ctrl/outCsv', 'CtrlController@outCsv');
Route::get('ctrl/index', 'CtrlController@index');
Route::get('ctrl/form', 'CtrlController@form');
Route::post('ctrl/result', 'CtrlController@result');
Route::get('ctrl/upload', 'CtrlController@upload');
Route::post('ctrl/uploadfile', 'CtrlController@uploadfile');
Route::get('ctrl/middle', 'CtrlController@middle')
    ->middleware(LogMiddleware::class);

Route::get('state/recCookie', 'StateController@recCookie');
Route::get('state/readCookie', 'StateController@readCookie');
Route::get('state/session1', 'StateController@session1');
Route::get('state/session2', 'StateController@session2');


Route::fallback(function() {
    return view('route.error');
});