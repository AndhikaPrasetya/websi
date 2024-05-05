<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFE extends Model
{
    use HasFactory;
    protected $table = 'tbl_userFE';
    protected $username = 'nim';

    protected $fillable = [
       'nama',
       'nim',
       'password',
    ];
}
