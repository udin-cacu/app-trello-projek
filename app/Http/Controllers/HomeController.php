<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Workspace;
use App\Board;
use App\Kategori;

class HomeController extends Controller
{
    public function index()
    {
        $workspace = Workspace::all();
        
        return view('home', compact('workspace'));
    }
}
