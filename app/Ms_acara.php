<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ms_acara extends Model
{
    protected $table = 'ms_acara';

    protected $fillable=['img','harga','judul_acara','deskripsi_acara','tanggal','kuota','jumlah_daftar','id_status'];

    public function Ms_status_acara(){
        return $this->BelongsTo('App\Ms_status_acara',"id_status");
    }
}
