<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ms_status_acara extends Model
{
    //
    protected $table = 'ms_status_acara';

    public function Ms_acara(){
        return $this->hasMany('App\Ms_acara',"id_status");
    }
}
