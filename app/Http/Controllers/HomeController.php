<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Workspace;
use App\Board;
use App\Kategori;
use Auth;

class HomeController extends Controller
{
    public function index()
    {
        $user =Auth::user();
        
        $workspace = Workspace::all();
        
        return view('home', compact('workspace'));
    }
}
