<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Board;
use App\Workspace;

class BoardController extends Controller
{
    public function index()
    {
    	$workspace = Workspace::all();
    	return view('board.index', compact("workspace"));
    }

     public function data(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');
        $date = date('Y-m-d');
        //$user = Auth::user();

        $board = Board::all();
        return Datatables::of($board)->make(true);
    }

    public function store(Request $request)
    {

        date_default_timezone_set('Asia/Jakarta');
        

            $board = new Board();
            $board->title = $request->title;
            $board->id_workspace = $request->id_workspace;
            $board->background= $request->background;
            $board->save();


        return response()->json($board);
    }

    public function show(Request $request)
    {
        $board = Board::all();
        return view('board.show',compact('request','board'));
    }
}
