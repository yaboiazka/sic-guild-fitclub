<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function UserDetail(){
        $userDetail = [
            "profile" => "/assets/images/profile.jpg",
            "username" => 'Andhika W',
            "email" => 'andhikaw@gmail.com',
            "phoneNumber" => '08977651431',
            
        ];
        return view('user-detail', compact('userDetail'));
    }
}
