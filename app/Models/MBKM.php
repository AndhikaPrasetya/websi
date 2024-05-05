<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MBKM extends Model
{
    use HasFactory;
    protected $table = 'tbl_mbkm';
    
    protected $fillable = [
        'judul',
        'deskripsi',
        'foto',
        'status',
    ];
}
