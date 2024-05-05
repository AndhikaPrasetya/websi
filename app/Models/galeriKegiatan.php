<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class galeriKegiatan extends Model
{
    use HasFactory;
    protected $table = 'tbl_galeri_kegiatan';
    
    protected $fillable = [
        'slug',
        'judul',
        'deskripsi',
        'tanggal_kegiatan',
        'foto',
        'status',
    ];
}
