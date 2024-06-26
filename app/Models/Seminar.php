<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seminar extends Model
{
    use HasFactory;
    protected $table = 'tbl_seminar';
   
    protected $fillable = [
        'slug',
        'judul',
        'deskripsi',
        'foto',
        'status',
    ];
}
