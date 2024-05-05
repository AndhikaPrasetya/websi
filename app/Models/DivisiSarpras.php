<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DivisiSarpras extends Model
{
    use HasFactory;
    protected $table = 'tbl_divisi_sarpras';
    
    protected $fillable = [
        'nama',
        'angkatan',
        'jabatan',
        'foto'
    ];
}
