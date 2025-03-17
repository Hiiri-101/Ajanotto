<?php

namespace App\Models;

$sql = "SELECT nimi FROM kayttajat";
$user = $mysql->query($sql);
$sql2 = "SELECT tunnus FROM kayttajat";
$pass = $mysql->query($sql2);

use Illuminate\Database\Eloquent\Model;

class Redirect extends Model
{

    function toRoute() {
        Route::post('/submitForm', function () {
        });
    }

    public function checkUser(Request $request) {
        if ($request->has($user, $pass))
        {
            Route::get('/tunnus', function () {
            });
        }

        $input = $request->all($userValue);
    }
}