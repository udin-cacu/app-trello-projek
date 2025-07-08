<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BoardDetail;
use App\UserBoardDetails;

class BoardDetailsController extends Controller
{
    public function store(Request $request)
    {

        date_default_timezone_set('Asia/Jakarta');
        

        /*$board = new BoardDetail();
        $board->board_id = $request->id;
        $board->title = $request->title;
        $board->deskripsi = $request->deskripsi;
        $board->status= "list";
        $board->save();

        $userworkspace = new UserBoardDetails();
        $userworkspace->user_id = $user->id;
        $userworkspace->board_detail_id = $board->id;
        $userworkspace->save();*/

        /*$request->validate([
            'title'      => 'required|string|max:255',
            'deskripsi'  => 'nullable|string',
            'user_id'    => 'required|array',
            'user_id.*'  => 'exists:users,id',
        ]);*/

        // 1. Simpan BoardDetail
        $board = new BoardDetail();
        $board->board_id = $request->id;
        $board->title = $request->title;
        $board->deskripsi = $request->deskripsi;
        $board->status= "list";
        $board->save();

        //dd($boardDetail);

        // 2. Simpan ke tabel pivot (banyak user)
        foreach ($request->user_id as $uid) {
            UserBoardDetails::firstOrCreate([
                'user_id'         => $uid,
                'board_detail_id' => $board->id,
            ]);
        }

        $data = 1;

        return response()->json($data);
    }

}
