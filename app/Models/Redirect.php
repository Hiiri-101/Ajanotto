<?php

namespace App\Models;

$sql = "SELECT nimi, tunnus FROM kayttajat";
$userValue = $mysql->query($sql);

use Illuminate\Database\Eloquent\Model;

class Redirect extends Model
{

    function toRoute() {
        Route::post('/submitForm', function () {
        });
    }

    public function idk(Request $request) {
        if ($request->has(''))

        $input = $request->all($userValue);
    }
}