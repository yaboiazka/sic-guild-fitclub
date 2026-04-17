<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $posts = post::latest()->get();
        return view('home', compact('posts'));
    }
    public function like(){
        return view('home.like');
    }
    public function save(){
        return view('home.save');
    }
    public function UserDetail(){
        $users = User::latest()->get();
        return view('user-detail', compact('users'));
    }
}
