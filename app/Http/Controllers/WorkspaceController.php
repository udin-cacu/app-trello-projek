<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Workspace;

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
        

            $work = new Workspace();
            $work->name = $request->name;
            $work->type = $request->type;
            $work->description= $request->description;
            $work->save();


        return response()->json($work);
    }
}
