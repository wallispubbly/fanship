<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FandomTag extends Model
{
    public function fandom() {
        return $this->hasOne('App\Fandom');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
}
