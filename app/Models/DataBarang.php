<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class DataBarang extends Model
{
    protected $table = "DataBarang";
    protected $primarykey ="id";
    protected $fillable = ['id', 'Nama_Barang', 'Kode_Barang','Jumlah_Barang'];

}
