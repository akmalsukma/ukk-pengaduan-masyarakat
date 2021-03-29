<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    protected $fillable = [
        'id_pengaduan', 'id_petugas', 'tgl_tanggapan','isi_tanggapan'
    ];
}
