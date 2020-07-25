<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ms_home extends Model
{
    protected $table = 'ms_home';

    protected $fillable=['title_browser','img_title_browser','logo','judul','judul_acara','deskripsi_judul_acara','judul_login','deskripsi_judul_login','judul_testimoni','deskripsi_judul_testimoni'];
}
