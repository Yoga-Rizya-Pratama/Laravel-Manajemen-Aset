<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $role = Auth::user()->role;
        // dd($role);
        if ($role == "admin") {
            $users = User::all();
            return view('/users.dashboard', compact('users'));
        } else {
            return back();
        }
    }
}
