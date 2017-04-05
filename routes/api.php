<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/webhook', function(Request $request) {
	$all = $request->all();
	$out = "\n\nparams: ".json_encode($all)."\n";
	$out.= "headers: ".json_encode(getallheaders())."\n";
	$wrote = File::append('../storage/logs/webhooks.log', $out);
	return $wrote === false ? 'error writting file' : 'OK';
});