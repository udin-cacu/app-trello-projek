<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;

class KategoriController extends Controller
{
    public function index()
    {
    	$kategori = Kategori::all();
    	return view('kategori.index', compact("kategori"));
    }

     public function data(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');
        $date = date('Y-m-d');
        //$user = Auth::user();

        $kategori = Kategori::all();
        return Datatables::of($kategori)->make(true);
    }

    public function store(Request $request)
    {

        date_default_timezone_set('Asia/Jakarta');
        

            $kategori = new Kategori();
            $kategori->name = $request->name;
            $kategori->id_board = $request->id_board;
            $kategori->save();


        return response()->json($kategori);
    }
}
