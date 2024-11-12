<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\support\Facades\Auth;
use App\Models\User;
class HomeController extends Controller
{
    public function index(){
        return view('home.userpage');
    }
    public function redirect()
    {
        $usertype = Auth::user()->usertype;
         return view('dashboard');

        if ($usertype == '1') {
            return view('admin.home');
        }
        else{
            return view('home.userpage');
        }
    }
}