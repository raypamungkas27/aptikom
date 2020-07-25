<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ms_pendaftaran_acara_youtube extends Model
{
    //
    protected $table = 'ms_pendaftaran_acara_youtube';
    protected $fillable=['id_user','id_acara','sertifikat','bukti_transfer','file_sertifikat'];
}
