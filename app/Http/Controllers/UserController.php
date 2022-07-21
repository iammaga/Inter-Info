<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(Request $request) 
    {
        return response($users = User::whereEmail($request->email)->get(), 200);
        // return view('users.index', compact('users'));
    }

    public function show($id) 
    {
        $user = DB::table('users')->where("id", $id);
        $user = User::find($id);
        return view('users.show', compact('user'));
    }
}
