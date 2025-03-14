<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('kirjautuminen.tunnus', ['sivuNimi' => 'Kirjaudu']);
});

Route::get('/koodi', function () {
    return view('kirjautuminen.koodi', ['sivuNimi' => 'Kirjaudu
                                                      koodilla']);
});

Route::get('/sihteeri', function () {
    return view('aloitus.sihteeri');
});

Route::get('/tuomari', function () {
    return view('aloitus.tuomari');
});

Route::get('/paakayttaja', function () {
    return view('aloitus.paakayttaja');
});

#-

Route::get('/process', 'Redirect@toRoute');


// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing