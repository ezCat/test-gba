@extends('sidebar')

@section('content')

<div id="page-wrapper" >
<div id="page-inner">

<input type="hidden" id="active_menu" value="saisie">

<div  class="col-sm-12">
  <h3>Formulaire de saisie : LHP N4</h3>
<hr/>

<!-- ALL MODAL -->
<div id="modal-ensemble">
    <!--"THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID-->
    <div id="btn-close-modal" class="close-modal-ensemble"> 
        <button class="btn-close btn-circle"><i class="fa fa-close fa-2x"></i></button>
    </div>
    
    <div class="modal-content dark">
        <h2>Ensembles existants</h2>
        <table class="table" style="width: 100%">
          <thead>
             <tr>
              <th>Nom de l'ensemble</th>
              <th>Budget commande</th>
              <th>CDP</th>
              <th>CT</th>
              <th>MET</th>
              <th>MAINT</th>
              <th>OPE</th>
              <th>DIV</th>
              <th>Commentaires</th>
              <th>Supprimer</th>
            </tr> 
          </thead>

          <tbody>
             <tr>
              <td>{{Form::text('', 'Documentation', ["class" => "form-tab"])}}</td>
              <td>{{Form::text('', '120000 €', ["class" => "form-tab"])}}</td>
              <td>{{Form::text('', '12 h', ["class" => "form-tab tab-number"])}}</td>
              <td>{{Form::text('', '21 h', ["class" => "form-tab tab-number"])}}</td>
              <td>{{Form::text('', '30 h', ["class" => "form-tab tab-number"])}}</td>
              <td>{{Form::text('', '4 h', ["class" => "form-tab tab-number"])}}</td>
              <td>{{Form::text('', '1 h', ["class" => "form-tab tab-number"])}}</td>
              <td>{{Form::text('', '90 h', ["class" => "form-tab tab-number"])}}</td>
              <td>{{Form::text('', 'Aucun commentaire', ["class" => "form-tab"])}}</td>
              <td><button class="btn btn-danger">Supprimer</button></td>
            </tr> 
            <tr>
              <td>{{Form::text('', 'Qualification', ["class" => "form-tab"])}}</td>
              <td>{{Form::text('', '400 €', ["class" => "form-tab"])}}</td>
              <td>{{Form::text('', '100 h', ["class" => "form-tab tab-number"])}}</td>
              <td>{{Form::text('', '10 h', ["class" => "form-tab tab-number"])}}</td>
              <td>{{Form::text('', '5 h', ["class" => "form-tab tab-number"])}}</td>
              <td>{{Form::text('', '0 h', ["class" => "form-tab tab-number"])}}</td>
              <td>{{Form::text('', '0 h', ["class" => "form-tab tab-number"])}}</td>
              <td>{{Form::text('', '40 h', ["class" => "form-tab tab-number"])}}</td>
              <td>{{Form::text('', 'Attention aux heures de validation internes', ["class" => "form-tab"])}}</td>
              <td><button class="btn btn-danger">Supprimer</button></td>
            </tr> 
          </tbody>

        </table>
    </div>
</div>

<div id="modal-heure">
    <!--"THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID-->
    <div  id="btn-close-modal" class="close-modal-heure"> 
        <button class="btn-close btn-circle"><i class="fa fa-close fa-2x"></i></button>
    </div>
    
    <div class="modal-content dark">
        <h2>Heures existantes</h2>
        <table class="table">
          <thead>
             <tr>
              <th>Nom de l'ensemble</th>
              <th>Nom de la ressource</th>
              <th>Descriptif de la mission</th>
              <th>Début</th>
              <th>Fin</th>
              <th>Durée effective</th>
              <th>Supprimer</th>
            </tr> 
          </thead>

          <tbody>
             <tr>
              <td>{{Form::text('', 'Documentation', ["class" => "form-tab"])}}</td>
              <td>{{Form::text('', 'MET', ["class" => "form-tab"])}}</td>
              <td>{{Form::text('', 'Création du document de qualification', ["class" => "form-tab"])}}</td>
              <td>{{Form::text('', '05/12/2016', ["class" => "form-tab"])}}</td>
              <td>{{Form::text('', '07/12/2016', ["class" => "form-tab"])}}</td>
              <td>{{Form::text('', '5 h', ["class" => "form-tab"])}}</td>
              <td><button class="btn btn-danger">Supprimer</button></td>
            </tr> 
            <tr>        
              <td>{{Form::text('', 'Qualification', ["class" => "form-tab"])}}</td>
              <td>{{Form::text('', 'CDP', ["class" => "form-tab"])}}</td>
              <td>{{Form::text('', 'Qualification du matériel', ["class" => "form-tab"])}}</td>
              <td>{{Form::text('', '10/12/2016', ["class" => "form-tab"])}}</td>
              <td>{{Form::text('', '23/12/2016', ["class" => "form-tab"])}}</td>
              <td>{{Form::text('', '110 h', ["class" => "form-tab"])}}</td>
              <td><button class="btn btn-danger">Supprimer</button></td>
            </tr> 
          </tbody>

        </table>
    </div>
</div>

<div id="modal-commande">
    <!--"THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID-->
    <div  id="btn-close-modal" class="close-modal-commande"> 
        <button class="btn-close btn-circle"><i class="fa fa-close fa-2x"></i></button>
    </div>
    
    <div class="modal-content dark">
        <h2>Commandes existantes</h2>
        <table class="table">
          <thead>
             <tr>
              <th>Nom de l'ensemble</th>
              <th>Nom du fournisseur</th>
              <th>Descriptif de la commande</th>
              <th>Numéro du bon de commande</th>
              <th>Date</th>
              <th>Montant</th>
              <th>Supprimer</th>
            </tr> 
          </thead>

          <tbody>
             <tr>
              <td>{{Form::text('', 'Colisage', ["class" => "form-tab"])}}</td>
              <td>{{Form::text('', 'CDP', ["class" => "form-tab"])}}</td>
              <td>{{Form::text('', 'Commande d\'un coffret', ["class" => "form-tab"])}}</td>
              <td>{{Form::text('', 'S0160312455', ["class" => "form-tab"])}}</td>
              <td>{{Form::text('', '07/12/2016', ["class" => "form-tab"])}}</td>
              <td>{{Form::text('', '1200,52 €', ["class" => "form-tab"])}}</td>
              <td><button class="btn btn-danger">Supprimer</button></td>
            </tr> 
            <tr>        
              <td>{{Form::text('', 'Qualification', ["class" => "form-tab"])}}</td>
              <td>{{Form::text('', 'BE', ["class" => "form-tab"])}}</td>
              <td>{{Form::text('', 'Pièces pour barres TO', ["class" => "form-tab"])}}</td>
              <td>{{Form::text('', 'S0160312412', ["class" => "form-tab"])}}</td>
              <td>{{Form::text('', '23/12/2016', ["class" => "form-tab"])}}</td>
              <td>{{Form::text('', '4502,99 €', ["class" => "form-tab"])}}</td>
              <td><button class="btn btn-danger">Supprimer</button></td>
            </tr> 
          </tbody>

        </table>
    </div>
</div>

<div id="modal-ressource">
    <!--"THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID-->
    <div  id="btn-close-modal" class="close-modal-ressource"> 
        <button class="btn-close btn-circle"><i class="fa fa-close fa-2x"></i></button>
    </div>
    
    <div class="modal-content dark">
        <h2>Ressources existantes</h2>
        <table class="table">
          <thead>
             <tr>
              <th>Nom de la ressource</th>
              <th>Code de la ressource</th>
              <th>Supprimer</th>
            </tr> 
          </thead>

          <tbody>
             <tr>
              <td>{{Form::text('', 'Méthodes', ["class" => "form-tab"])}}</td>
              <td>{{Form::text('', 'MET', ["class" => "form-tab"])}}</td>
              <td><button class="btn btn-danger">Supprimer</button></td>
            </tr> 
            <tr>        
              <td>{{Form::text('', 'Chef de Projet', ["class" => "form-tab"])}}</td>
              <td>{{Form::text('', 'CDP', ["class" => "form-tab"])}}</td>
              <td><button class="btn btn-danger">Supprimer</button></td>
            </tr> 
          </tbody>

        </table>
    </div>
</div>

<div id="modal-fournisseur">
    <!--"THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID-->
    <div  id="btn-close-modal" class="close-modal-fournisseur"> 
        <button class="btn-close btn-circle"><i class="fa fa-close fa-2x"></i></button>
    </div>
    
    <div class="modal-content dark">
        <h2>Fournisseurs existants</h2>
        <table class="table">
          <thead>
             <tr>
              <th>Nom du fournisseur</th>
              <th>Supprimer</th>
            </tr> 
          </thead>

          <tbody>
             <tr>
              <td>{{Form::text('', 'IKEA', ["class" => "form-tab"])}}</td>
              <td><button class="btn btn-danger">Supprimer</button></td>
            </tr> 
            <tr>        
              <td>{{Form::text('', 'Carrefour', ["class" => "form-tab"])}}</td>
              <td><button class="btn btn-danger">Supprimer</button></td>
            </tr> 
          </tbody>

        </table>
    </div>
</div>

<div class="col-sm-9">
  <!-- Tab panes -->
  <div class="tab-content">

    <!-- AJOUT ENSEMBLE -->
    <div class="tab-pane active" id="Ensemble-r">
      <a href="#modal-ensemble" id="btn-ensemble"><button style="float: right" class="btn-info btn-circle"><i class="fa fa-search"></i></button></a>
      <h2>Ajouter un ensemble</h2>
      {{Form::open()}}

      Nom de l'ensemble :
      {{Form::text('e_nom_ensemble', null, ["class" => "form-control"])}}
      
      Budget affecté aux heures :<br><br>
      <table class="table" style="width: 100%">
        <thead>
        <tr>
          <th>CDP</th>
          <th>CT</th>
          <th>MET</th>
          <th>MAINT</th>
          <th>OPE</th>
          <th>DIV</th>
        </tr>
        </thead>

        <tbody>
        <tr>
          <td>{{Form::text('', 0, ["class" => "form-tab h_sum", "onClick" => "this.select()"])}}</td>
          <td>{{Form::text('', 0, ["class" => "form-tab h_sum", "onClick" => "this.select()"])}}</td>
          <td>{{Form::text('', 0, ["class" => "form-tab h_sum", "onClick" => "this.select()"])}}</td>
          <td>{{Form::text('', 0, ["class" => "form-tab h_sum", "onClick" => "this.select()"])}}</td>
          <td>{{Form::text('', 0, ["class" => "form-tab h_sum", "onClick" => "this.select()"])}}</td>
          <td>{{Form::text('', 0, ["class" => "form-tab h_sum", "onClick" => "this.select()"])}}</td>
        </tr>
        </tbody>
      </table>

      Budget affecté aux commandes :
      {{Form::text('e_budget_commande', null, ["class" => "form-control", "placeholder" => "Exemple : 1280"])}}


      <b>Total : <span id="total_budget_heure"><b>0</b></span>h</b>

      <br><br>

      Commentaires :
      {{Form::textarea('e_commentaire', null, ["class" => "form-control"])}}

      <button style="float: right" class="btn btn-validate"><i class="fa fa-arrow-right"></i> Soumettre</button>

      {{Form::close()}}
    </div>

    <!-- AJOUT HEURE -->
    <div class="tab-pane" id="Heure-r">
      <a href="#modal-heure" id="btn-heure"><button style="float: right" class="btn-info btn-circle"><i class="fa fa-search"></i></button></a>
      <h2>Ajouter une Heure</h2>
      {{Form::open()}}

      Nom de l'ensemble :
      {{Form::select('h_id_ensemble', ['--Selection--'], null, ["class" => "form-control"])}}

      Nom de la ressource affecté :
      {{Form::select('h_id_ressource', ['--Selection--'], null, ["class" => "form-control"])}}

      Descriptif de la mission :
      {{Form::text('h_description_mission', null, ["class" => "form-control"])}}

      Date réalisée :<br>
      <table style="width: 100%; margin-bottom: 10px;">
        <tr>
          <td>Du : </td>
          <td>{{Form::date('h_date_debut', null, ["class" => "form-control"])}} </td>
          <td>au : </td>
          <td>{{Form::date('h_date_fin', null, ["class" => "form-control"])}}</td>
        </tr>
      </table>

      Durée effectif de la mission :
      {{Form::text('h_duree_mission', null, ["class" => "form-control", "placeholder" => "Exemple : 42"])}}

      <button style="float: right" class="btn btn-validate"><i class="fa fa-arrow-right"></i> Soumettre</button>

      {{Form::close()}}
    </div>

    <!-- AJOUT COMMANDE -->
    <div class="tab-pane" id="Commande-r">
      <a href="#modal-commande" id="btn-commande"><button style="float: right" class="btn-info btn-circle"><i class="fa fa-search"></i></button></a>
      <h2>Ajouter une Commande</h2>
      {{Form::open()}}

      Nom de l'ensemble :
      {{Form::select('c_id_ensemble', ['--Selection--'], null, ["class" => "form-control"])}}

      Nom du fournisseur :
      {{Form::select('c_id_fournisseur', ['--Selection--'], null, ["class" => "form-control"])}}

      Descriptif de la commande :
      {{Form::text('c_description_commande', null, ["class" => "form-control"])}}

      Numéro du bon de commande :
      {{Form::text('c_numero_bon_commande', null, ["class" => "form-control", "placeholder" => "Exemple : SO160301255"])}}

      Date de la commande :
      {{Form::date('c_date_commande', null, ["class" => "form-control"])}}

      Montant de la commande :
      {{Form::text('c_montant_commande', null, ["class" => "form-control", "placeholder" => "Exemple : 1280"])}}

      <button style="float: right" class="btn btn-validate"><i class="fa fa-arrow-right"></i> Soumettre</button>

      {{Form::close()}}
    </div>

    <!-- AJOUT RESSOURCE -->
    <div class="tab-pane" id="Ressource-r">
      <a href="#modal-ressource" id="btn-ressource"><button style="float: right" class="btn-info btn-circle"><i class="fa fa-search"></i></button></a>
      <h2>Ajouter une Ressource</h2>
      {{Form::open()}}

      Nom de la ressource :
      {{Form::text('r_nom_ressource', null, ["class" => "form-control"])}}

      <button style="float: right" class="btn btn-validate"><i class="fa fa-arrow-right"></i> Soumettre</button>

      {{Form::close()}}
    </div>

    <!-- AJOUT FOURNISSEUR -->
    <div class="tab-pane" id="Fournisseur-r">
      <a href="#modal-fournisseur" id="btn-fournisseur"><button style="float: right" class="btn-info btn-circle"><i class="fa fa-search"></i></button></a>
      <h2>Ajouter un Fournisseur</h2>
      {{Form::open()}}

      Nom du fournisseur :
      {{Form::text('f_nom_fournisseur', null, ["class" => "form-control"])}}

      <button style="float: right" class="btn btn-validate"><i class="fa fa-arrow-right"></i> Soumettre</button>

      {{Form::close()}}
    </div>

    <!-- PUT SOLDEE -->
    <div class="tab-pane" id="Soldee-r">
      <h2>Soldé un Projet</h2> 
      {{Form::open()}}

      Statut du projet :
      {{Form::select('is_soldee', ['En cours', 'Soldé'], null, ["class" => "form-control"])}}

      <button style="float: right" class="btn btn-validate"><i class="fa fa-arrow-right"></i> Soumettre</button>

      {{Form::close()}}

    </div>
  </div>
</div>

<div class="col-sm-3"> <!-- required for floating -->
  <!-- Nav tabs -->
  <ul class="nav nav-tabs tabs-right">
    <li class="active"><a href="#Ensemble-r" data-toggle="tab">Ensemble</a></li>
    <li><a href="#Heure-r" data-toggle="tab">Heure</a></li>
    <li><a href="#Commande-r" data-toggle="tab">Commande</a></li>
    <li><a href="#Ressource-r" data-toggle="tab">Ressource</a></li>
    <li><a href="#Fournisseur-r" data-toggle="tab">Fournisseur</a></li>
    <li><a href="#Soldee-r" data-toggle="tab">Soldé</a></li>
  </ul>
</div>
</div>

  <div class="clearfix"></div>

@endsection