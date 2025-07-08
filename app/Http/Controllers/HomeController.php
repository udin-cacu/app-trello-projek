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
        /*$user =Auth::user();
        
        $workspace = Workspace::select('workspace.*','users.id as userid')
        ->join('users','workspace.user_id','=','users.id')
        ->where('workspace.user_id', $user->id)
        ->get();*/

        $user = Auth::user();

    // Ambil workspace yang terkait dengan user ini
        $workspace = $user->workspaces()->get();

        
        
        return view('home', compact('workspace'));
    }
}
