<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\achievement;

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
        return view('User.AboutMe');
    }
    public function rules()
    {
        return view('User.Rules');
    }
    public function register()
    {
        return view('User.Register');
    }
    public function prestasi()
    {
        $achievementList = achievement::all();
        $achievementSD = achievement::where('status','Prestasi SD')->get();
        $achievementRemaja = achievement::where('status','Prestasi Remaja')->get();
        return view('User.Achievement',compact(['achievementList','achievementSD','achievementRemaja']));
    }

}
