<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class filmovi extends Model
{
    public function zanr(){
        return $this->belongsTo('App\zanr');
    }
}
