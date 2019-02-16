<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class zanr extends Model
{
    public function filmovi() {
        return $this->hasMany('App\filmovi');
    }
}
