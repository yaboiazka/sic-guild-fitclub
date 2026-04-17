<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home(){
        return view('home');
    }
    public function ManageUsers(){
        $users = User::latest()->get();
        return view('admin.manage-users', compact('users'));
    }
    public function ArticeApproval(){
        return view('test');
    }
}
