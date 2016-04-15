@extends('sidebar')

@section('content')

<div id="page-wrapper">

<div style="margin:  1% 5% 0 5% ">

<input type="hidden" id="active_menu" value="master">

<div class="row">
	<div style="margin-left: 50px"><h2>Tableau de bord : Gestion Projet Global</h2></div>
</div>

<div class="row equal">
	<div class="col-xs-6">

		<div class="panel back-dash-master">
			<div class="back-dash-heading">
               <i class="fa fa-euro fa-3x"></i><strong> &nbsp; BILAN FINANCIER</strong>
           	</div>

           	<div class="back-dash-content">
	           	<table style="width: 100%">
	           		<tr>
	           			<td style="width: 30%"><p>Budget prévu : </p></td>
	           			<td style="width: 30%"><p><strong>514 298 €</strong></p></td>

	       				<td rowspan="2" style="text-align: center; font-size: 24px"><strong>- 100 000 €</strong></td>

	           		</tr>
	           		<tr>
	           			<td><p>Budget dépensé : </p></td>
	           			<td><p><strong>414 298 €</strong></p></td>
	           		</tr>
	           	</table>

	           	<hr>

	           	<p class="back-dash-comment">Ceci est un commentaire</p>

           	</div>

           	<div class="back-dash-footer success">
           		<i class="fa fa-thumbs-up"></i> &nbsp; Bon résultat
           	</div>
        </div>

	</div>

	<div class="col-xs-6">

		<div class="panel back-dash-master">
			<div class="back-dash-heading">
               <i class="fa fa-user-secret fa-3x"></i><strong> &nbsp; SATISFACTION CLIENT</strong>
           	</div>

           	<div class="back-dash-content">
	           	<table style="width: 100%">
	           		<tr>
	           			<td style="width: 30%"><p>FEP Qualification : </p></td>
	           			<td style="width: 30%"><p><strong>B -</strong></p></td>

	       				<td rowspan="2" style="text-align: center; font-size: 24px"><strong>
	       					<i class="fa fa-meh-o fa-4x" style="color: orange"></i>
	       				</strong></td>

	           		</tr>
	           		<tr>
	           			<td><p>FEP MSI : </p></td>
	           			<td><p><strong>B</strong></p></td>
	           		</tr>
	           	</table>

	           	<hr>

	           	<p class="back-dash-comment">Ceci est un commentaire</p>
           	</div>

           	<div class="back-dash-footer warning">
           		<i class="fa fa-hand-stop-o"></i> &nbsp; Améliorable
           	</div>
        </div>

	</div>
</div>

<div class="row equal">
	<div class="col-xs-6">

		<div class="panel back-dash-master">
			<div class="back-dash-heading">
               <i class="fa fa-calendar fa-3x"></i><strong> &nbsp; PLANNING</strong>
           	</div>

           	<div class="back-dash-content">
	           	<table style="width: 100%">
	           		<tr>
	           			<td style="width: 30%"><p>Phase planifiée : </p></td>
	           			<td style="width: 30%"><p><strong>N°5 : Projet Soldé</strong></p></td>

	       				<td rowspan="2" style="text-align: center; font-size: 24px"><strong>
	       					<i class="fa fa-frown-o fa-4x" style="color: #F75C4C"></i>
	       				</strong></td>

	           		</tr>
	           		<tr>
	           			<td><p>Phase en cours : </p></td>
	           			<td><p><strong>N°4 : Préparation MSI</strong></p></td>
	           		</tr>
	           	</table>

	          	<hr>

	           	<p class="back-dash-comment">Ceci est un commentaire</p>
           	</div>

           	<div class="back-dash-footer danger">
           		<i class="fa fa-thumbs-down"></i> &nbsp; Mauvais résultat
           	</div>
        </div>

	</div>

	<div class="col-xs-6">

		<div class="panel back-dash-master">
			<div class="back-dash-heading">
               <i class="fa fa-group fa-3x"></i><strong> &nbsp; RESSOURCES</strong>
           	</div>

           	<div class="back-dash-content">
	           	<table style="width: 100%">
	           		<tr>
	           			<td style="width: 30%"><p>Heures prévues : </p></td>
	           			<td style="width: 30%"><p><strong>514 298 €</strong></p></td>

	       				<td rowspan="2" style="text-align: center; font-size: 24px"><strong>- 100 000 €</strong></td>

	           		</tr>
	           		<tr>
	           			<td><p>Heures réalisées : </p></td>
	           			<td><p><strong>414 298 €</strong></p></td>
	           		</tr>
	           	</table>

	           	<hr>

	           	<p class="back-dash-comment">Ceci est un commentaire</p>

           	</div>

           	<div class="back-dash-footer success">
           		<i class="fa fa-thumbs-up"></i> &nbsp; Bon résultat
           	</div>
        </div>

	</div>
	</div>

<div class="row">
	<div class="col-xs-12">
		<div class="panel back-dash-master">
			<div class="back-dash-heading">
               <i class="fa fa-thumb-tack fa-3x"></i><strong> &nbsp; LIVRABLES</strong>
           	</div>

           	<div class="back-dash-content">
	           	<table border="1" style="width: 100%; text-align: center;">
					<tr style="height: 4rem">
						<td style="width: 30%">Dosier de conception</td>
						<td style="width: 15%"><i class="fa fa-smile-o fa-3x" style="color: #2ECC71"></i></td>
						<td style="width: 55%">Ceci est un long commentaire</td>
					</tr>  
					<tr style="height: 4rem">
						<td>Programme recette</td>
						<td><i class="fa fa-smile-o fa-3x" style="color: #2ECC71"></i></td>
						<td>Ceci est un long commentaire</td>
					</tr> 
					<tr style="height: 4rem">
						<td>Dossier formation</td>
						<td><i class="fa fa-smile-o fa-3x" style="color: #2ECC71"></i></td>
						<td>Ceci est un long commentaire</td>
					</tr> 
					<tr style="height: 4rem">
						<td>DRT Qualification</td>
						<td><i class="fa fa-smile-o fa-3x" style="color: #2ECC71"></i></td>
						<td>Ceci est un long commentaire</td>
					</tr>    
					<tr style="height: 4rem">
						<td>RFQ/RFF</td>
						<td><i class="fa fa-smile-o fa-3x" style="color: #2ECC71"></i></td>
						<td>Ceci est un long commentaire</td>
					</tr>  
					<tr style="height: 4rem">
						<td>DRT intervention</td>
						<td><i class="fa fa-smile-o fa-3x" style="color: #2ECC71"></i></td>
						<td>Ceci est un long commentaire</td>
					</tr> 
					<tr style="height: 4rem">
						<td>Dosier de maintenance</td>
						<td><i class="fa fa-smile-o fa-3x" style="color: #2ECC71"></i></td>
						<td>Ceci est un long commentaire</td>
					</tr> 
					<tr style="height: 4rem">
						<td>RFI MSI</td>
						<td><i class="fa fa-smile-o fa-3x" style="color: #2ECC71"></i></td>
						<td>Ceci est un long commentaire</td>
					</tr>     
					<tr style="height: 4rem">
						<td>DSE & Liste docs projet</td>
						<td><i class="fa fa-smile-o fa-3x" style="color: #2ECC71"></i></td>
						<td>Ceci est un long commentaire</td>
					</tr>      		
	           	</table>
           	</div>

           	<div class="back-dash-footer success">
           		<i class="fa fa-thumbs-up"></i> &nbsp; Bon résultat
           	</div>
        </div>
	</div>
</div>

</div>


@endsection