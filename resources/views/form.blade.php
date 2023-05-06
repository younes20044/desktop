@extends('welcome')
@section('title')
ajouter un rendez-vous
@endsection
@section('content')
<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">ajouter un rendez-vous</h4>
                    <p class="card-description">ajouter un rendez-vous </p>
                    <form action="{{ route('add_rendez_vous') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="exampleSelectGender">Type de rendez-vous</label>
                        <select name="type_de_rdv"  class="form-control" id="exampleSelectGender">
                          <option value="ISO 101 Plancher">ISO 101 Plancher</option>
                          <option  value="ISO 101 Rampants">ISO 101 Rampants</option>
                          <option  value="ISO 102">ISO 102</option>
                          <option  value="ISO 103">ISO 103</option>
                          <option  value="PAC RESTE A CHARGE">PAC RESTE A CHARGE</option>
                          <option  value="PAC 1EURO">PAC 1EURO</option>
                          <option  value="CHAUDIERE A CAZ">CHAUDIERE A CAZ </option>
                          <option  value="CHAUDIERE A CAZ ">CHAUDIERE A CAZ </option>
                          <option  value="VMG">VMG</option>
                          <option  value="ITE">ITE</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Non client</label>
                        <input name="nom_client" type="text" class="form-control" id="exampleInputName1" placeholder="Non client">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">prénon client</label>
                        <input name="prenom_client" type="text" class="form-control" id="exampleInputName1" placeholder="prénon client">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Adress client</label>
                        <input name="adress_client" type="text" class="form-control" id="exampleInputName1" placeholder="Adress client">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">La ville</label>
                        <input name="ville" type="text" class="form-control" id="exampleInputName1" placeholder="La ville">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Code postal</label>
                        <input name="code_postale" type="number" class="form-control" id="exampleInputName1" placeholder="Code postal">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Fixe client</label>
                        <input name="fixe_client" type="tel" class="form-control" id="exampleInputName1" placeholder="fix de client">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Portable client</label>
                        <input  name="portable_client" type="tel" class="form-control" id="exampleInputName1" placeholder="Portable client">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Type chaufage</label>
                        <input  name="type_chaufage" type="text" class="form-control" id="exampleInputName1" placeholder="Type chaufage">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Propriétaire ou locataire</label>
                        <input name="propritaire_ou_locataire" type="text" class="form-control" id="exampleInputName1" placeholder="Propriétaire ou locataire">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">nombre de personne</label>
                        <input name="nb_personne" type="number" class="form-control" id="exampleInputName1" placeholder="nombre de personne">
                      </div>
                      
                       <div class="form-group">
                        <label for="exampleInputName1">revenu de client</label>
                        <input name="revenu_client" type="number" class="form-control" id="exampleInputName1" placeholder="revenu de client">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">numero fiscale</label>
                        <input name="num_fiscale" type="number" class="form-control" id="exampleInputName1" placeholder="numero fiscale">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">references de l'avis</label>
                        <input name="REFERENCE_DE_LA_VIS" type="number" class="form-control" id="exampleInputName1" placeholder="numero fiscale">
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">précarité</label>
                        <select name="precataire" class="form-control" id="exampleSelectGender">
                          <option value="GRAND PRECAIRE">GRAND PRECAIRE</option>
                          <option  value="PRECAIRE">PRECAIRE</option>
                          <option  value="CLASSIQUE">CLASSIQUE</option>
                        </select>
                      </div>
                    
                      <div class="form-group">
                        <label for="exampleTextarea1">commentaire</label>
                        <textarea name="commentaire" class="form-control" id="exampleTextarea1" rows="4"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                     
                    </form>
                  </div>
                </div>
              </div>
        
          
@endsection