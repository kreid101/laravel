<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class profilesController extends Controller
{
    public function index($user)
    {
        $user=User::findorfail($user);
        return view('profile\index',['user'=>$user,]);
    }
}
