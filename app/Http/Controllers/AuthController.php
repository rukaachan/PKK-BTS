<?php

namespace App\Http\Controllers;

use App\Models\Akun;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    
    public function authenticated()
    {
        
    }

    public function home()
    {
        return view('bts.home');
    }
    public function foto_murid()
    {
        return view('bts.foto_murid');
    }
    public function about()
    {
        return view('about.index');
    }
}
