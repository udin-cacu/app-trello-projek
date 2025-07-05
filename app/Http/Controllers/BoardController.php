<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Board;
use App\Workspace;
use App\BoardDetail;

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
        $board->id_workspace = $request->id;
        $board->background= $request->background;
        $board->save();


        return response()->json($board);
    }

    public function show(Request $request)
    {
        $board = Board::select('board.*')
        ->where('id', $request->id)
        ->first();
        
        $lists = BoardDetail::where('board_id', $board->id)->where('status', 'list')->get();
        $progres = BoardDetail::where('board_id', $board->id)->where('status', 'progres')->get();
        $cek = BoardDetail::where('board_id', $board->id)->where('status', 'cek')->get();
        $selesai = BoardDetail::where('board_id', $board->id)->where('status', 'selesai')->get();

        //dd($lists);

        return view('board.show',compact('request','board','lists','progres','cek','selesai'));
    }

    /*public function updateStatus(Request $request)
    {
        $card = BoardDetail::find($request->id);
        $card->status = $request->status;
        $card->save();

        return response()->json(['success' => true]);
    }*/


    public function updateStatus(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:board_details,id',
            'status' => 'required|in:list,progres,cek,selesai'
        ]);

        $card = BoardDetail::find($request->id);
        $card->status = $request->status;
        $card->save();

        return response()->json(['success' => true]);
    }

}
