<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = 'tbl_project';
    
    protected $fillable = [
        'judul',
        'deskripsi',
        'foto',
        'divisi',
        'tanggal_kegiatan',
        'status',
    ];
  
}
