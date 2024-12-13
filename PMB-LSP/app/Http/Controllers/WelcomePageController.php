<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

class WelcomePageController extends Controller
{
    public function welcome()
    {   
        $pengumuman = Pengumuman::all();
        return view('welcome', compact('pengumuman'));
    }
}
