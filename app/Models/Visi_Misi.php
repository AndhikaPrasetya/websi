<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visi_Misi extends Model
{
    use HasFactory;
    protected $table = 'tbl_visimisi';
    
    protected $fillable = [
        'visi',
        'misi',
    ];
}
