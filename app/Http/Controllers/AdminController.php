<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function home(){
        return view('admin.home');
    }
    public function ManageArticles(){
        return view('admin.home');
    }
    public function ManageUsers(){
        return view('admin.manage-users');
    }
    public function ArticeApproval(){
        return view('posts.new-article');
    }
    public function NewArticle(){
        return view('posts.new-article');
    }
}
