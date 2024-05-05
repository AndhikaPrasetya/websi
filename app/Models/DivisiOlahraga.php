<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DivisiOlahraga extends Model
{
    use HasFactory;
    protected $table = 'tbl_divisi_olahraga';
    
    protected $fillable = [
        'nama',
        'angkatan',
        'jabatan',
        'foto'
    ];
   
}