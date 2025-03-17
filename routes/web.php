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

//Route::get('/process', 'Redirect@toRoute');


// ex. test
use App\Http\Controllers\PostController;

Route::get('/post/create', [PostController::class, 'create']);
Route::post('/post', [PostController::class, 'store']);

//another ex.
use App\Models\User;

Route::get('/user/{user}', function (User $user) {
    return $user;
});


// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing