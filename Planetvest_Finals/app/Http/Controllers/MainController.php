<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class MainController extends Controller
{
    public function index(Request $request): Factory|View|Application
    {
        return view('homepage');
    }
    function login(){
        return view('login');
    }
    function register(){
        return view('register');
    }
}
