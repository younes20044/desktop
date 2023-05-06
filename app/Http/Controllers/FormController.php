<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Rendez_vous;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class FormController extends Controller
{
    public function form()
    {
        
        $username = Auth::user()->prenom." ".Auth::user()->nom;
        $username=strtoupper($username);
         return view('form')->with('username', $username);

}
public function add_rendez_vous(Request $request)
{
   

    $rendez_vous = new Rendez_vous([
       
        'type_de_rdv'  => $request->type_de_rdv,
        'nom_client'  => $request->nom_client,
        'prenom_client'  => $request->prenom_client,
        'adress_client'  => $request->adress_client,
        'ville'  => $request->ville,
        'code_postale'  => $request->code_postale,
        'fixe_client'  => $request->fixe_client,
        'portable_client'  => $request->portable_client,
        'type_chaufage'  => $request->type_chaufage,
        'propritaire_ou_locataire'  => $request->propritaire_ou_locataire,
        'nb_personne'  => $request->nb_personne,
        'revenu_client'  => $request->revenu_client,
        'num_fiscale'  => $request->num_fiscale,
        'REFERENCE_DE_LA_VIS'  => $request->REFERENCE_DE_LA_VIS,
        'precataire'  => $request->precataire,
        'commentaire'  => $request->commentaire,
       
       
        'id_agent'  =>  auth()->id()
    ]);
    $rendez_vous->save();

    return redirect()->route('form');
}


}
