<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Workspace;
use App\UserWorkspaces;
use Auth;

class WorkspaceController extends Controller
{
    public function index()
    {
    	/*$workspace = Workspace::all();
    	return view('workspace.index', compact('workspace'))*/;
    }

    public function data(Request $request)
    {
        date_default_timezone_set('Asia/Jakarta');
        $date = date('Y-m-d');
        //$user = Auth::user();

        $work = Workspace::all();
        return Datatables::of($work)->make(true);
    }

    public function store(Request $request)
    {

        date_default_timezone_set('Asia/Jakarta');
        
        $user = Auth::user();

        $work = new Workspace();
        $work->name = $request->name;
        $work->type = $request->type;
        $work->description= $request->description;
        $work->save();


        $userworkspace = new UserWorkspaces();
        $userworkspace->user_id = $user->id;
        $userworkspace->workspace_id = $work->id;
        $userworkspace->save();

        $data = 1;


        return response()->json($data);
    }
}
