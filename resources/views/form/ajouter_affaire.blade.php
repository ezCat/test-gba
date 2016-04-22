@extends('sidebar')

@section('content')

<div id="page-wrapper" >
<div id="page-inner">

<input type="hidden" id="active_menu" value="ajouter">

<div id="modal-affaire">
    <!-- THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID -->
    <div  id="btn-close-modal" class="close-modal-affaire"> 
        <button class="btn-close btn-circle"><i class="fa fa-close fa-2x"></i></button>
    </div>
    
    <div class="modal-content dark">
        <h2>Projets existants</h2>
        <table class="table">
          <thead>
             <tr>
              <th>Nom du projet</th>
              <th>Etat du projet</th>
            </tr> 
          </thead>

          <tbody>
             <tr>
         	  <td>{{Form::text('', 'LHP N4', ["class" => "form-tab"])}}</td>
              <td>{{Form::text('', 'Soldé', ["class" => "form-tab"])}}</td>
            </tr> 
            <tr>        
              <td>{{Form::text('', 'ITV PE SUP 1400', ["class" => "form-tab"])}}</td>
              <td>{{Form::text('', 'En cours', ["class" => "form-tab"])}}</td>
            </tr> 
          </tbody>

        </table>
    </div>
</div>

<div class="col-xs-9">
<a href="#modal-affaire" id="btn-affaire"><button style="float: right" class="btn-inverse btn-circle"><i class="fa fa-list"></i></button></a>
<h3>Ajouter une affaire</h3>
<hr>

{{Form::open()}}

<label>Nom de l'affaire :</label>
{{Form::text('', null, ['class' => 'form-control', "placeholder" => "Entrez le nom du nouveau projet..."])}}

<button class="btn btn-validate" style="float: right;"><i class="fa fa-arrow-right"></i> Soumettre</button>

{{Form::close()}}
</div>

@endsection