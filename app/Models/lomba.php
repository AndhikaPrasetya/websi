<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lomba extends Model
{
    use HasFactory;
    protected $table = 'tbl_lomba';
   
    protected $fillable = [
        'slug',
        'judul',
        'deskripsi',
        'foto',
        'status',
    ];
}
