<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', function () {
    return view('kirjautuminen.login');
});

// , ['sivuNimi' => 'Kirjaudu']

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
/*
use App\Http\Controllers\PostController;

Route::get('/post/create', [PostController::class, 'create']);
Route::post('/post', [PostController::class, 'store']);
*/

/*
//another ex.
use App\Models\User;

Route::get('/user/{user}', function (User $user) {
    return $user;
});
*/

/*
Route::get('/test', function () {
    DB::table('kayttajat')->get();

    dd(DB::getQueryLog());
});
*/

// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// destroy - Delete listing