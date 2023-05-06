<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rendez_vous extends Model
{
    use HasFactory;
    protected $table = 'rendez_vous';
    protected $fillable = [
        'type_de_rdv',
        'nom_client',
        'prenom_client',
        'adress_client',
        'ville',
        'code_postale',
        'fixe_client',
        'portable_client',
        'type_chaufage',
        'propritaire_ou_locataire',
        'nb_personne',
        'revenu_client',
        'num_fiscale',
        'REFERENCE_DE_LA_VIS',
        'precataire',
        'commentaire',
        'statut',
        'confimateur',
        'id_agent'

        
    ];
}
