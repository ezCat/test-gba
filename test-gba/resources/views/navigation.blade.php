@extends('default')

<!-- Sidebar -->
<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
    <img src="img/suez.png" style="width: 85%; margin-left: 20px; margin-top: 20px; margin-bottom: 10px;">
    <h3 style="color: #999; margin-bottom: 30px; padding-left: 30px;">Base Affaire : Projet</h3>
        <li class="sidebar-brand">
        	<a href="">
        	<img src="{{ asset('ico/data.png') }}" width="10%" height="auto" style="margin-right: 10px; margin-bottom: 8px;">
        	Ajouter une affaire</a>
        </li>
        <li class="sidebar-brand" style="padding-top: 5px;">
        	<a href="">
        	<img src="{{ asset('ico/magic-wand.png') }}" width="10%" height="auto" style="margin-right: 10px; margin-bottom: 8px;">
        	Suivre une affaire</a>
        </li>
	        <li class="">
	        	<a href="">&#8226; Ensemble</a>
	        </li>
	        <li class="">
	        	<a href="">&#8226; Heure</a>
	        </li>
	        <li class="">
	        	<a href="">&#8226; Commande</a>
	        </li>
	        <li class="">
	        	<a href="">&#8226; Ressource</a>
	        </li>
	        <li class="">
	        	<a href="">&#8226; Fournisseur</a>
	        </li>
        <li class="sidebar-brand" style="margin-top: 30px; padding-top: 5px;">
        	<a href="">
        	<img src="{{ asset('ico/stats-bars.png') }}" width="10%" height="auto" style="margin-right: 10px; margin-bottom: 8px;">
        	Bilan général</a>
        </li>
	        <li class="">
	        	<a href="">&#8226; Liste d'Affaires</a>
	        </li>
	        <li class="">
	        	<a href="">&#8226; Etat global</a>
	        </li>
	        <li class="">
	        	<a href="">&#8226; Commandes par fournisseurs</a>
	        </li>
	        <li class="">
	        	<a href="">&#8226; Détails des commandes</a>
	        </li>
	        <li class="">
	        	<a href="">&#8226; Heures par ressources </a>
	        </li>
        <li class="sidebar-brand" style="margin-top: 30px; padding-top: 5px;">
        	<a href="">
        	<img src="{{ asset('ico/wallet.png') }}" width="10%" height="auto" style="margin-right: 10px; margin-bottom: 8px;">
        	Bilan d'une affaire</a>
        </li>
        	<li class="">
	        	<a href="">&#8226; Etat global</a>
	        </li>
	        <li class="">
	        	<a href="">&#8226; Heures par ensembles</a>
	        </li>
	        <li class="">
	        	<a href="">&#8226; Heures par ressources</a>
	        </li>
	        <li class="">
	        	<a href="">&#8226; Commandes par ensembles</a>
	        </li>
	        <li class="">
	        	<a href="">&#8226; Commandes par ressources</a>
	        </li>
        <li class="sidebar-brand" style="margin-top: 30px">
        	<a href=""><img src="{{ asset('ico/clipboard.png') }}" width="10%" height="auto" style="margin-right: 10px; margin-bottom: 8px;">
        	Tableau de bord</a>
        </li>
        <li class="sidebar-brand" style="margin-top: 30px">
        	<a href=""><img src="{{ asset('ico/exit.png') }}" width="10%" height="auto" style="margin-right: 10px; margin-bottom: 8px;">
        	Déconnexion</a>
        </li>
    </ul>
</div>
<!-- /#sidebar-wrapper -->

<!-- Page Content -->
<div id="page-content-wrapper">
    <div class="container-fluid">
