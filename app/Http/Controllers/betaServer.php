<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Models\diary;

class betaServer extends Controller
{
    //index route
    function index()
    {
        return view('neo-welcome');
    }
    //generation route
    function generationData()
    {
        $genData = DB::table('generation')->pluck('name');
        return view('generations',compact('genData'));
    }
    //gamelist route
    function gameData()
    {
        $gameList = DB::table('gamelist')->join('generation','gamelist.gen_id','=','generation.id')->select('gamelist.name as gamename','generation.name as genname')->orderBy('gen_id')->get();
        return view('game-list',compact('gameList'));
    }
    //projects route
    function projects(){
        $projects = DB::table('projects')->join('status','projects.status_id','=','status.id')->select('projects.project_name as pname','status.name as sname')->get();
        return view('projects',compact('projects'));
        // return betaServer::json_encode(array('success'));
    }
    // info route
    function info(){
        return view('info');
    }

    //diary list page
    function datediary(){
        $diary = DB::table('diary')->select('date as Date','story as Story')->get();
        return view('diarylist',compact('diary'));
    }

    //diary inserting page
    function getdiary(){
        return view('diary');
    }

    // Release Games
    function release(){
        $release = DB::table('game-list')->select('year as Year','name as GameName')->orderBy('year')->get();
        return view('release',compact('release'));
        // return view('release');
    }

    //gallery
    function gallery(){
        return view('gallery');
    }

    //contact
    function contact(){
        return view('contact');
    }

    //experience
    function experience(){
        return view('experience');
    }

    function insertDiary(Request $request){
        $save = new diary;
        $save->story = $request->title;
        $save->date = $request->date;
        $save->save();
        return redirect('diary')->with('status', 'Diary Added');
    }
}
