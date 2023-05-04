<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rendez_vous', function (Blueprint $table) {
            $table->id();
            $table->string('nom_client');
            $table->string('prenom_client');
            $table->string('adress_client');
            $table->string('ville');
            $table->integer('code_postale');
            $table->string('fixe_client');
            $table->string('portable_client');
            $table->string('type_chaufage');
            $table->string('propritaire_ou_locataire');
            $table->integer('nb_personne');
            $table->float('revenu_client');
            $table->integer('num_fiscale');
            $table->integer('REFERENCE_DE_LA_VIS');
            $table->string('precataire');
            $table->string('commentaire');
            $table->string('statut');
            $table->string('confimateur');
            $table->string('id_agent');
            
            


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rendez_vouses');
    }
};
