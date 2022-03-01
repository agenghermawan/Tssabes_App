<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        return view('User.Home');
    }
    public function profile()
    {
        return view('User.Profile');
    }
    public function tentangKami()
    {
        return view('User.TentangKami');
    }
}
