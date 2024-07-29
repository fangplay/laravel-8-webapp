<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\betaServer;

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

// Route::get('/', function () {
//     return view('welcome');
// });
//get new index
Route::get('/', [betaServer::class,'index']);
// game data route way
Route::get('/game-list',[betaServer::class,'gameData']);
// generation route way
Route::get('/generations',[betaServer::class,'generationData']);
// projects route way
Route::get('/projects',[betaServer::class,'projects']);
// info route way
Route::get('/info',[betaServer::class,'info']);
// game release list
Route::get('/release',[betaServer::class,'release']);
