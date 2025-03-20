<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

DB::table('Kayttajat')->pluck('nimi');
DB::table('Kayttajat')->pluck('tunnus');
DB::table('Kayttajat')->pluck('rooli');

class checkUserHandler
{

    /*
    function toRoute() {
        Route::post('/submitForm', function () {
        });
    }
    */

    public function checkUser(Request $request)
    {
        if ($request->has($user, $pass))
        {
            switch($role)
            {
                case "sihteeri":
                    return (redirect('sihteeri'));
                case "tuomari":
                    return (redirect('tuomari'));
                case "paakayttaja":
                    return (redirect('paakayttaja'));
                default:
                    return "Käyttäjälle ei ole asetettu roolia.";
            }
        }
    }

}