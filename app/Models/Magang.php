<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Magang extends Model
{
    use HasFactory;
    protected $table = 'tbl_magang';
    
    protected $fillable = [
        'slug',
        'judul',
        'deskripsi',
        'foto',
        'status',
    ];
}
