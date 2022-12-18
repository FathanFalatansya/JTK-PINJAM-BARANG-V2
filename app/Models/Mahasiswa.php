<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = "mahasiswa";
    protected $primarykey ="id";
    protected $fillable = ['id', 'Nama', 'Nim','Kelas'];

}
