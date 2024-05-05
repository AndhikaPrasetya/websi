<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DivisiDanaUsaha extends Model
{
    use HasFactory;
    protected $table = 'tbl_divisi_danausaha';
    
    protected $fillable = [
        'nama',
        'angkatan',
        'jabatan',
        'foto'
    ];
}
