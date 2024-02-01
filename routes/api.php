<?php

use App\Http\Controllers\Api\ProjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//route test per verificare il funzionamento di postman e dell'api
Route::get('/test', function(){
    return response()->json([
        'name' => 'Pippo',
        'state' => 'Italy'
    ]);
});

//route per prendere i projects
Route::get('/projects',[ProjectController::class, 'index']);
