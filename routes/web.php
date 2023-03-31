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
//get new index route
Route::get('', [betaServer::class,'index']);
// game data route
Route::get('game-list',[betaServer::class,'gameData']);
// generation route
Route::get('generations',[betaServer::class,'generationData']);
// projects route
Route::get('projects',[betaServer::class,'projects']);
// info route
Route::get('info',[betaServer::class,'info']);
// game release list route
Route::get('release',[betaServer::class,'release']);
//diary list route
Route::get('diary',[betaServer::class,'datediary']);
//get insert diary route
Route::get('list-diary',[betaServer::class,'getdiary']);
//gallery route
Route::get('gallery',[betaServer::class,'gallery']);
//contact route
Route::get('contact',[betaServer::class,'contact']);
//experience route
Route::get('experience',[betaServer::class,'experience']);

//insert process route
Route::post('insert-diary',[betaServer::class,'insertDiary']);
//pre-update diary route
Route::get('edit-diary/{id}',[betaServer::class,'editDiary']);
//delete diary route
Route::get('delete-diary/{id}',[betaServer::class,'deleteDiary']);
//update diary route
Route::put('update-diary',[betaServer::class,'updateDiary']);
