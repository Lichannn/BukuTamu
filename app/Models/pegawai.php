<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'foto',
        'id_pegawai',
        'jabatan',
        'nama',
        'pekerjaan',
    ];

    protected $table = 'pegawai';
}
