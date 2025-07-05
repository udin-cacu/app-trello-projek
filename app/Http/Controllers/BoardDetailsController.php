<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BoardDetail;

class BoardDetailsController extends Controller
{
    public function store(Request $request)
    {

        date_default_timezone_set('Asia/Jakarta');
        

        $board = new BoardDetail();
        $board->board_id = $request->id;
        $board->title = $request->title;
        $board->deskripsi = $request->deskripsi;
        $board->status= "list";
        $board->save();

        //dd($board);


        return response()->json($board);
    }

}
