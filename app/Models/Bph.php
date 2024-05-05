<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bph extends Model
{
    use HasFactory;
    protected $table = 'tbl_bph';
    
    protected $fillable = [
        'nama',
        'angkatan',
        'jabatan',
        'foto'
    ];
}
