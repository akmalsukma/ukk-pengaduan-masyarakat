<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $fillable = [
        'nik', 'judul_pengaduan', 'isi_pengaduan','tgl_pengaduan','kota', 'foto', 'status'
    ];
}
