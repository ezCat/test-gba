@extends('default')
    
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="" style="padding-top: 20px;">Cellule Projets</a> 
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li><a href="#" class="li-menu-high" style="padding-top: 20px">
                    <i class="fa fa-plus"></i>Ajouter une affaire 
                    <span class="sr-only">(current)</span></a></li>
                    <li><a href="#" class="li-menu-high" style="padding-top: 20px">
                    <i class="fa fa-refresh"></i>Changer d'affaire
                    </a></li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                    <li>Déconnexion</li>
                  </ul>
                </div>

              <!-- Modal change projet -->
              <div class="modal fade" id="modal-change-projet" tabindex="-1" role="dialog" aria-labelledby="modal-change-projet" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-close"></i></button>
                        <h4 class="modal-title" id="myModalLabel">Choisir un projet</h4>
                        </div>
                        <div class="modal-body">
                            <h3>Liste des projets</h3>
                            <input></input>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                            <button type="button" class="btn btn-primary">Sauvegarder</button>
                        </div>
                </div>
              </div>
            </div>
        </nav>   


        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="{{asset('img/suez.png')}}" class="user-image img-responsive"/>
					</li>
                    <li>
                        <a href="/public/ajouter/affaire" id="ajouter"><i class="fa fa-folder-open fa-3x"></i> Ajouter une affaire</a>
                    </li>	
                    <li>
                        <a href="/public/saisir/affaire" id="saisie"><i class="fa fa-pencil-square-o fa-3x"></i> Saisie d'une affaire</a>
                    </li>	
                    <li>
                        <a></a>
                    </li>
                    <li>
                        <a href="/public/dashboard/general" id="general"><i class="fa fa-money fa-3x"></i> Bilan : Général</a>
                    </li>	
                    <li>
                        <a href="/public/dashboard/unique" id="unique"><i class="fa fa-line-chart fa-3x"></i> Bilan : Affaire Unique</a>
                    </li>				
                    <li>
                        <a href="/public/dashboard/master" id="master"><i class="fa fa-tasks fa-3x"></i> Tableau de bord</a>
                    </li>	
                    <li>
                        <a></a>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-cogs fa-3x"></i> Besoin d'aide ?</a>
                    </li>
                </ul>
            </div>
        </nav>  