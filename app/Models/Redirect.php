<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Redirect extends Model
{
    function toRoute() {
        Route::post('/submitForm', function () {
        });
    }

    public function idk(Request $input) {
        $input = $request->all();
    }
}