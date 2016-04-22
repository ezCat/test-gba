@extends('sidebar')

@section('content')

<div id="page-wrapper" >
<div id="page-inner">

<input type="hidden" id="active_menu" value="saisie">

<div class="row">
  <div class="col-xs-12">
    <ul class="nav nav-pills nav-tabs nav-justified">
      <li class="active"><a href="#Ensemble-r" data-toggle="tab">Ensemble</a></li>
      <li><a href="#Heure-r" data-toggle="tab">Heure</a></li>
      <li><a href="#Commande-r" data-toggle="tab">Commande</a></li>
    </ul>
  </div>
</div>

<br>

<!-- ALL MODAL -->
<div id="modal-ensemble">
    <!--"THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID-->
    <div id="btn-close-modal" class="close-modal-ensemble"> 
        <button class="btn-close btn-circle"><i class="fa fa-close fa-2x"></i></button>
    </div>
    
    <div class="modal-content dark">
      <h2>Ajouter un ensemble</h2>
      {{Form::open()}}

      Nom de l'ensemble :
      {{Form::text('en_libelle', null, ["class" => "form-control"])}}
      
      Budget affecté aux heures :
      {{Form::text('en_budget_heure', null, ["class" => "form-control", "onClick" => "this.select()", "placeholder" => "Exemple : 35"])}}

      Budget affecté aux commandes :
      {{Form::text('en_budget_commande', null, ["class" => "form-control", "placeholder" => "Exemple : 1280"])}}

      Commentaires :
      {{Form::textarea('en_commentaire', null, ["class" => "form-control"])}}

      <button style="float: right" class="btn btn-validate"><i class="fa fa-arrow-right"></i> Soumettre</button>

      {{Form::close()}}


    </div>
</div>

<div id="modal-heure">
    <!--"THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID-->
    <div  id="btn-close-modal" class="close-modal-heure"> 
        <button class="btn-close btn-circle"><i class="fa fa-close fa-2x"></i></button>
    </div>
    
    <div class="modal-content dark">
    <h2>Ajouter une Heure</h2>
      {{Form::open()}}

      Nom de l'ensemble :
      {{Form::select('h_fk_id_ensemble', ['--Selection--'], null, ["class" => "form-control"])}}

      Nom de la ressource affecté :
      {{Form::select('', ['--Selection--'], null, ["class" => "form-control"])}}

      Descriptif de la mission :
      {{Form::text('', null, ["class" => "form-control"])}}

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
</div>

<div id="modal-commande">
    <!--"THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID-->
    <div  id="btn-close-modal" class="close-modal-commande"> 
        <button class="btn-close btn-circle"><i class="fa fa-close fa-2x"></i></button>
    </div>
    
    <div class="modal-content dark">
    <h2>Ajouter une Commande</h2>
      {{Form::open()}}

      Nom de l'ensemble :
      {{Form::select('c_id', ['--Selection--'], null, ["class" => "form-control"])}}

      Nom du fournisseur :
      {{Form::select('fk_id_fournisseur', ['--Selection--'], null, ["class" => "form-control"])}}

      Descriptif de la commande :
      {{Form::text('c_designation', null, ["class" => "form-control"])}}

      Numéro du bon de commande :
      {{Form::text('c_numero_bon_commande', null, ["class" => "form-control", "placeholder" => "Exemple : SO160301255"])}}

      Date de la commande :
      {{Form::date('c_date_commande', null, ["class" => "form-control"])}}

      Montant de la commande :
      {{Form::text('c_prix', null, ["class" => "form-control", "placeholder" => "Exemple : 1280"])}}

       <input type="checkbox" name="c_insatisfaction_livraison" value="1"> &nbsp; Cochez la case si la commande a été livrée hors délai<br>
     

      <input type="checkbox" name="c_insatisfaction_qualite" value="1"> &nbsp; Cochez la case si le produit de la commande est de qualité non-conforme<br>
      

      <button style="float: right" class="btn btn-validate"><i class="fa fa-arrow-right"></i> Soumettre</button>

      {{Form::close()}}
    </div>
</div>

<div id="modal-ressource">
    <!--"THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID-->
    <div  id="btn-close-modal" class="close-modal-ressource"> 
        <button class="btn-close btn-circle"><i class="fa fa-close fa-2x"></i></button>
    </div>
    
    <div class="modal-content dark">
      <h2>Ajouter une Ressource</h2>
      {{Form::open()}}

      Nom de la ressource :
      {{Form::text('r_libelle', null, ["class" => "form-control"])}}

      Code de la ressource parente :
      {{Form::text('r_id_parent', null, ["class" => "form-control"])}}

      <button style="float: right" class="btn btn-validate"><i class="fa fa-arrow-right"></i> Soumettre</button>

      {{Form::close()}}
    </div>
</div>

<div id="modal-fournisseur">
    <!--"THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID-->
    <div  id="btn-close-modal" class="close-modal-fournisseur"> 
        <button class="btn-close btn-circle"><i class="fa fa-close fa-2x"></i></button>
    </div>
    
    <div class="modal-content dark">
      <h2>Ajouter un Fournisseur</h2>
      {{Form::open()}}

      Nom du fournisseur :
      {{Form::text('f_libelle', null, ["class" => "form-control"])}}

      <button style="float: right" class="btn btn-validate"><i class="fa fa-arrow-right"></i> Soumettre</button>

      {{Form::close()}}
    </div>
</div>

<div class="row">
  <div class="col-sm-12">
  <!-- Tab panes -->
  <div class="tab-content">
    <!-- AJOUT ENSEMBLE -->
    <div class="tab-pane active" id="Ensemble-r">
      <a href="#modal-ensemble" id="btn-ensemble">
        <button style="float: right; margin-right: 5px" class="btn-circle btn-blue-green" title="Ajouter une entrée"><i class="fa fa-plus"></i></button>
      </a>
      <a href="/public/dashboard/unique">
        <button style="float: right; margin-right: 5px" class="btn-circle btn-inverse" title="Ouvrir le tableau de bord"><i class="fa fa-bar-chart"></i></button>
      </a>

        <h2>Ensembles existants</h2>
        <br>
        <div class="table-responsive">
        <table class="table table-striped table-bordered" width="100%">
          <thead>
           <tr>
            <th style="width: 20%">Nom de l'ensemble</th>
            <th style="width: 10%">Budget commande</th>
            <th style="width: 5%">CDP</th>
            <th style="width: 5%">TEC</th>
            <th style="width: 5%">MET</th>
            <th style="width: 5%">MAINT</th>
            <th style="width: 5%">OPE</th>
            <th style="width: 5%">DIV</th>
            <th style="width: 20%">Commentaires</th>
            <th style="text-align: center; width: 5%">Supprimer</th>
          </tr> 
          </thead>

          <tbody>
           <tr>
            <td>{{Form::text('', 'Documentation', ["class" => "form-tab width-input-text"])}}</td>
            <td>{{Form::text('', '120000 €', ["class" => "form-tab width-input-number"])}}</td>
            <td>{{Form::text('', '12 h', ["class" => "form-tab tab-number"])}}</td>
            <td>{{Form::text('', '21 h', ["class" => "form-tab tab-number"])}}</td>
            <td>{{Form::text('', '30 h', ["class" => "form-tab tab-number"])}}</td>
            <td>{{Form::text('', '4 h', ["class" => "form-tab tab-number"])}}</td>
            <td>{{Form::text('', '1 h', ["class" => "form-tab tab-number"])}}</td>
            <td>{{Form::text('', '90 h', ["class" => "form-tab tab-number"])}}</td>
            <td>{{Form::text('', 'Aucun commentaire', ["class" => "form-tab width-input-text"])}}</td>
            <td style="padding-top: 15px" class="supprimer-click"><i class="fa fa-close fa-2x"></i></td>
          </tr> 
          <tr>
            <td>{{Form::text('', 'Qualification', ["class" => "form-tab width-input-text"])}}</td>
            <td>{{Form::text('', '400 €', ["class" => "form-tab width-input-number"])}}</td>
            <td>{{Form::text('', '100 h', ["class" => "form-tab tab-number"])}}</td>
            <td>{{Form::text('', '10 h', ["class" => "form-tab tab-number"])}}</td>
            <td>{{Form::text('', '5 h', ["class" => "form-tab tab-number"])}}</td>
            <td>{{Form::text('', '0 h', ["class" => "form-tab tab-number"])}}</td>
            <td>{{Form::text('', '0 h', ["class" => "form-tab tab-number"])}}</td>
            <td>{{Form::text('', '40 h', ["class" => "form-tab tab-number"])}}</td>
            <td>{{Form::text('', 'Attention aux heures de validation internes', ["class" => "form-tab width-input-text"])}}</td>
            <td style="padding-top: 15px" class="supprimer-click"><i class="fa fa-close fa-2x"></i></td>
          </tr> 
          </tbody>
          <tfoot>
              <tr>
                <th>Nom de l'ensemble</th>
                <th>Budget commande</th>
                <th>CDP</th>
                <th>TEC</th>
                <th>MET</th>
                <th>MAINT</th>
                <th>OPE</th>
                <th>DIV</th>
                <th>Commentaires</th>
                <th style="text-align: center">Supprimer</th>
              </tr>
          </tfoot>
        </table>
        </div>
    </div>

    <!-- AJOUT HEURE -->
    <div class="tab-pane" id="Heure-r">
      <a href="#modal-ressource" id="btn-ressource">
        <button style="float: right" class="btn-circle btn-blue-green" title="Ajouter une ressource"><i class="fa fa-plus"></i> <i class="fa fa-user"></i></button>
      </a>
      <a href="/public/dashboard/unique">
        <button style="float: right; margin-right: 5px" class="btn-circle btn-inverse" title="Ouvrir le tableau de bord"><i class="fa fa-bar-chart"></i></button>
      </a>
      <a href="#modal-heure" id="btn-heure">
        <button style="float: right; margin-right: 5px" class="btn-circle btn-blue-green" title="Ajouter une entrée"><i class="fa fa-plus"></i></button>
      </a>

        <h2>Heures existantes</h2>
        <br>
        <div class="table-responsive">
        <table class="table table-striped table-bordered" width="100%">
          <thead>
             <tr>
              <th style="width: 20%">Nom de l'ensemble</th>
              <th style="width: 15%">Nom de la ressource</th>
              <th style="width: 20%">Descriptif de la mission</th>
              <th style="width: 8%">Début</th>
              <th style="width: 8%">Fin</th>
              <th style="width: 5%">Durée effective</th>
              <th style="width: 5%; text-align: center">Supprimer</th>
            </tr> 
          </thead>

          <tbody>
             <tr>
              <td>{{Form::text('', 'Documentation', ["class" => "form-tab width-input-text"])}}</td>
              <td>{{Form::text('', 'MET', ["class" => "form-tab width-input-text"])}}</td>
              <td>{{Form::text('', 'Création du document de qualification', ["class" => "form-tab width-input-text"])}}</td>
              <td>{{Form::text('', '05/12/2016', ["class" => "form-tab width-input-text"])}}</td>
              <td>{{Form::text('', '07/12/2016', ["class" => "form-tab width-input-text"])}}</td>
              <td>{{Form::text('', '5 h', ["class" => "form-tab width-input-text"])}}</td>
              <td style="padding-top: 15px" class="supprimer-click"><i class="fa fa-close fa-2x"></i></td>
            </tr> 
            <tr>        
              <td>{{Form::text('', 'Qualification', ["class" => "form-tab width-input-text"])}}</td>
              <td>{{Form::text('', 'CDP', ["class" => "form-tab width-input-text"])}}</td>
              <td>{{Form::text('', 'Qualification du matériel', ["class" => "form-tab width-input-text"])}}</td>
              <td>{{Form::text('', '10/12/2016', ["class" => "form-tab width-input-text"])}}</td>
              <td>{{Form::text('', '23/12/2016', ["class" => "form-tab width-input-text"])}}</td>
              <td>{{Form::text('', '110 h', ["class" => "form-tab width-input-text"])}}</td>
              <td style="padding-top: 15px" class="supprimer-click"><i class="fa fa-close fa-2x"></i></td>
            </tr> 
          </tbody>

        </table>
        </div>
    </div>

    <!-- AJOUT COMMANDE -->
    <div class="tab-pane" id="Commande-r">
      <a href="#modal-fournisseur" id="btn-fournisseur">
        <button style="float: right;" class="btn-circle btn-blue-green" title="Ajouter un fournisseur"><i class="fa fa-plus"></i> <i class="fa fa-truck"></i></button>
      </a>
      <a href="/public/dashboard/unique">
        <button style="float: right; margin-right: 5px" class="btn-circle btn-inverse" title="Ouvrir le tableau de bord"><i class="fa fa-bar-chart"></i></button>
      </a>
      <a href="#modal-commande" id="btn-commande">
        <button style="float: right; margin-right: 5px" class="btn-circle btn-blue-green" title="Ajouter une entrée"><i class="fa fa-plus"></i></button>
      </a>
        <h2>Commandes existantes</h2>
        <br>
        <div class="table-responsive">
        <table class="table table-striped table-bordered">
          <thead>
             <tr>
              <th style="width: 17%">Ensemble</th>
              <th style="width: 13%">Fournisseur</th>
              <th style="width: 30%">Descriptif de la commande</th>
              <th style="width: 10%">N° du bon de commande</th>
              <th style="width: 10%">Date</th>
              <th style="width: 10%">Montant</th>
              <th style="width: 2%">Qualité</th>
              <th style="width: 2%">Livraison</th>
              <th style="width: 10%; text-align: center">Supprimer</th>
            </tr> 
          </thead>

          <tbody>
             <tr>
              <td>{{Form::text('', 'Colisage', ["class" => "form-tab width-input-text"])}}</td>
              <td>{{Form::text('', 'BABCOCK', ["class" => "form-tab width-input-text"])}}</td>
              <td>{{Form::text('', 'Commande d\'un coffret', ["class" => "form-tab width-input-text"])}}</td>
              <td>{{Form::text('', 'S0160312455', ["class" => "form-tab width-input-text"])}}</td>
              <td>{{Form::text('', '07/12/2016', ["class" => "form-tab width-input-text"])}}</td>
              <td>{{Form::text('', '1200,52 €', ["class" => "form-tab width-input-text"])}}</td>
              <td class="check-tab"><input type="checkbox" name="c_insatisfaction_livraison" value="1" checked></td>
              <td class="check-tab"><input type="checkbox" name="c_insatisfaction_qualite" value="1"></td>
              <td style="padding-top: 15px" class="supprimer-click"><i class="fa fa-close fa-2x"></i></td>
            </tr> 
            <tr>        
              <td>{{Form::text('', 'Qualification', ["class" => "form-tab width-input-text"])}}</td>
              <td>{{Form::text('', 'CARREFOUR', ["class" => "form-tab width-input-text"])}}</td>
              <td>{{Form::text('', 'Pièces pour barres TO', ["class" => "form-tab width-input-text"])}}</td>
              <td>{{Form::text('', 'S0160312412', ["class" => "form-tab width-input-text"])}}</td>
              <td>{{Form::text('', '23/12/2016', ["class" => "form-tab width-input-text"])}}</td>
              <td>{{Form::text('', '4502,99 €', ["class" => "form-tab width-input-text"])}}</td>
              <td class="check-tab"><input type="checkbox" name="c_insatisfaction_livraison" value="1"></td>
              <td class="check-tab"><input type="checkbox" name="c_insatisfaction_qualite" value="1"></td>
              <td style="padding-top: 15px" class="supprimer-click"><i class="fa fa-close fa-2x"></i></td>
            </tr> 
          </tbody>

        </table>
        </div>
    </div>

    <!-- AJOUT RESSOURCE -->
    <div class="tab-pane" id="Ressource-r">
      <a href="#modal-ressource" id="btn-ressource">
        <button style="float: right" class="btn-circle btn-inverse" title="Ouvrir le tableau de bord"><i class="fa fa-bar-chart"></i></button>
        <button style="float: right; margin-right: 5px" class="btn-circle btn-blue-green" title="Ajouter une entrée"><i class="fa fa-plus"></i></button>
      </a>
        <h2>Ressources existantes</h2>
        <table class="table" style="width: 50%">
          <thead>
             <tr>
              <th>Nom de la ressource</th>
              <th>Code de la ressource</th>
              <th style="text-align: center">Supprimer</th>
            </tr> 
          </thead>

          <tbody>
             <tr>
              <td>{{Form::text('', 'Méthodes', ["class" => "form-tab"])}}</td>
              <td>{{Form::text('', 'MET', ["class" => "form-tab"])}}</td>
              <td style="padding-top: 15px" class="supprimer-click"><i class="fa fa-close fa-2x"></i></td>
            </tr> 
            <tr>        
              <td>{{Form::text('', 'Chef de Projet', ["class" => "form-tab"])}}</td>
              <td>{{Form::text('', 'CDP', ["class" => "form-tab"])}}</td>
              <td style="padding-top: 15px" class="supprimer-click"><i class="fa fa-close fa-2x"></i></td>
            </tr> 
          </tbody>

        </table>
    </div>

    <!-- AJOUT FOURNISSEUR -->
    <div class="tab-pane" id="Fournisseur-r">
      <a href="#modal-fournisseur" id="btn-fournisseur"><button style="float: right" class="btn-circle btn-inverse" title="Ouvrir le tableau de bord"><i class="fa fa-bar-chart"></i></button><button style="float: right; margin-right: 5px" class="btn-circle btn-blue-green" title="Ajouter une entrée"><i class="fa fa-plus"></i></button></a>
        <h2>Fournisseurs existants</h2>
        <table class="table" style="width: 50%">
          <thead>
             <tr>
              <th>Nom du fournisseur</th>
              <th style="text-align: center">Supprimer</th>
            </tr> 
          </thead>

          <tbody>
             <tr>
              <td>{{Form::text('', 'IKEA', ["class" => "form-tab"])}}</td>
              <td style="padding-top: 15px" class="supprimer-click"><i class="fa fa-close fa-2x"></i></td>
            </tr> 
            <tr>        
              <td>{{Form::text('', 'Carrefour', ["class" => "form-tab"])}}</td>
              <td style="padding-top: 15px" class="supprimer-click"><i class="fa fa-close fa-2x"></i></td>
            </tr> 
          </tbody>

        </table>
    </div>
  </div>
</div>


</div>

</div>

  <div class="clearfix"></div>

@endsection