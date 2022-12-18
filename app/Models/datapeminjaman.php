<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class datapeminjaman extends Model
{
    protected $table = "datapeminjaman";
    protected $primarykey ="id";
    protected $fillable = ['IDMahasiswa', 'IDBarang', 'Jumlah_Barang'];
    // public function mahasiswa()
    // {
    //     return $this->belongsTo(mahasiswa::class);
    // }

    // public function databarang()
    // {
    //     return $this->belongsTo(databarang::class);
    // }
}


