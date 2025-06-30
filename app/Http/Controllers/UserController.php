<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Users;
use App\Wilayah;
use App\Roles;
use Auth;
use DataTables;

class UserController extends Controller
{
    public function index()
    {
        $user = Auth::user();  

       
        
        if($user->role_id == 1){
            
             $role = Roles::where('id','!=', 1)
            ->get(); 
            
            
        } else {
            
            $role = Roles::whereIn('id', [3, 4])
            ->get();
            
             ->get(); 
        }

           

        return view('users.index', compact('role'));
    }

    
}
