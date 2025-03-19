<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

$sql = "SELECT nimi FROM kayttajat";
$user = $mysql->query($sql);
$sql2 = "SELECT tunnus FROM kayttajat";
$pass = $mysql->query($sql2);
$sql3 = "SELECT rooli FROM kayttajat";
$role = $mysql->query($sql3);

class Redirect extends Model
{

    /*
    function toRoute() {
        Route::post('/submitForm', function () {
        });
    }
    */

    public function checkUser(Request $request) {
        if ($request->has($user, $pass))
        {
            switch($role) {
                case "sihteeri":
                    exit(redirect('sihteeri'));
                case "tuomari":
                    exit(redirect('tuomari'));
                case "paakayttaja":
                    exit(redirect('paakayttaja'));
                default:
                    echo "Käyttäjälle ei ole asetettu roolia.";
            }
        }

        $input = $request->all($userValue);
    }
}