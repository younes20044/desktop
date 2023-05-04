<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function dashboard()
    {
        
        $username = Auth::user()->prenom." ".Auth::user()->nom;
        $username=strtoupper($username);
         return view('dashboard')->with('username', $username);
    }

}
