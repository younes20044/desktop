<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Rendez_vous;
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
        $rendez_vous = DB::table('rendez_vous')->where('id_agent', auth()->id())->get();
        $nombre_rendez_vous = DB::table('rendez_vous')->where('id_agent', auth()->id())->count();
        $nombre_rendez_vous_encours = DB::table('rendez_vous')->where('id_agent', auth()->id())->where('statut', 'en cours')->count();
        $nombre_rendez_vous_confirmer = DB::table('rendez_vous')->where('id_agent', auth()->id())->where('statut', 'confirmer')->count();
         return view('dashboard')->with('username', $username)->with('rendez_vous', $rendez_vous)->with('nombre_rendez_vous', $nombre_rendez_vous)->with('nombre_rendez_vous_encours', $nombre_rendez_vous_encours)->with('nombre_rendez_vous_confirmer', $nombre_rendez_vous_confirmer);
    }

}
