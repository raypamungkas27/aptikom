<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ms_pendaftaran_acara_zoom extends Model
{
    protected $table = 'ms_pendaftaran_acara_zoom';
    protected $fillable=['id_user','id_acara','bukti_transfer','file_sertifikat'];
}
