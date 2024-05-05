<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DivisiAgama extends Model
{
    use HasFactory;
    protected $table = 'tbl_divisi_agama';
    
    protected $fillable = [
        'nama',
        'angkatan',
        'jabatan',
        'foto'
    ];

   
}
