<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku_tamu extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nama',
        'email',
        'no_hp',
        'alamat',
        'kegiatan',
        'prihal',
        'pekerjaan',
        'kesan',
        'created_at',
    ];

    protected $table = 'buku_tamu';

    protected $primaryKey = 'id_buku_tamu';
}
