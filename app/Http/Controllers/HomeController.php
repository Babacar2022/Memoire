<?php

namespace App\Http\Controllers;

use App\Models\Hos;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.userPage');
    }
    public function redirect()
    {
        $userType=Auth::user()->userType;
        if($userType=='1')
        {
            return view('admin.pages');
        }
        else
        {
            $det=Hos::all();
            return view('admin.pages2',compact('det'));
        }
    }

}
