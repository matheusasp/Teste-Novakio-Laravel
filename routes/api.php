<?php

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HelloController;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/', function (Request $request) {
    return response()->json([
        'mensagem' => 'Olá mundo, servidor api funcionando!'
    ]);
});

Route::get('/hello', [ HelloController::class, 'hello' ]);

Route::get('/date', [Controller::class, 'getNowDate']);

Route::post('/text', [Controller::class, 'getText']);

