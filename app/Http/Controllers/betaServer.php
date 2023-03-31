<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Models\diary;

class betaServer extends Controller
{
    //index route
    public function index()
    {
        return view('neo-welcome');
    }
    //generation route
    public function generationData()
    {
        $genData = DB::table('generation')->pluck('name');
        return view('generations',compact('genData'));
    }
    //gamelist route
    public function gameData()
    {
        $gameList = DB::table('gamelist')->join('generation','gamelist.gen_id','=','generation.id')->select('gamelist.name as gamename','generation.name as genname')->orderBy('gen_id')->get();
        return view('game-list',compact('gameList'));
    }
    //projects route
    public function projects(){
        $projects = DB::table('projects')->join('status','projects.status_id','=','status.id')->select('projects.project_name as pname','status.name as sname')->get();
        return view('projects',compact('projects'));
        // return betaServer::json_encode(array('success'));
    }
    // info route
    public function info(){
        return view('info');
    }

    //diary list page
    public function datediary(){
        $diary = DB::table('diary')->select('date as Date','story as Story')->get();
        return view('diarylist',compact('diary'));
    }

    //diary inserting page
    public function getdiary(){
        return view('diaryinsert');
    }

    // Release Games
    public function release(){
        $release = DB::table('game-list')->select('year as Year','name as GameName')->orderBy('year')->get();
        return view('release',compact('release'));
        // return view('release');
    }

    //gallery
    public function gallery(){
        return view('gallery');
    }

    //contact
    public function contact(){
        return view('contact');
    }

    //experience
    public function experience(){
        return view('experience');
    }

    //insert diary function
    public function insertDiary(Request $request){
        $date = $request->input('date');
        $story = $request->input('story');
        DB::insert('insert into diary (date, story) values (?, ?)', [$date, $story]);
        return redirect()->back()->with('status', 'Diary Added');
    }

    //edit diary function
    public function editDiary($id){
        $diaryfind = diary::find($id);
        return view('diaryedit',compact('diaryfind'));
    }

    //delete diary function
    public function deleteDiary(Request $request){

    }

    //update diary function
    public function updateDiary(Request $request){

    }
}
