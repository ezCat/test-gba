<?php

Route::group(['middleware' => ['web']], function () {

    Route::get('login', function(){
		return view('login');
	});

    Route::get('/', function(){
		return view('dashboard/general');
	});

    Route::get('ajouter/affaire', function(){
		return view('form/ajouter_affaire');
	});

    Route::get('saisir/affaire', function(){
		return view('saisie/saisie');
	});

    Route::get('dashboard/general', function(){
		return view('dashboard/general');
	});

	Route::get('dashboard/unique', function(){
		return view('dashboard/unique');
	});

	Route::get('dashboard/master', function(){
		return view('dashboard/master');
	});

});
