<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\datapeminjaman;
use App\Models\DataBarang;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\DB;

class DataPeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('datapeminjaman')
        ->join('mahasiswa', 'datapeminjaman.IDMahasiswa', '=', 'mahasiswa.id')
        ->join('databarang', 'datapeminjaman.IDBarang', '=', 'databarang.id')
        ->select('datapeminjaman.*', 'mahasiswa.Nama','mahasiswa.Nim','mahasiswa.Kelas')
        ->get();
        
    
        
        return view('peminjaman.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new datapeminjaman;
        return view('peminjaman.create', [
            'barang' => DataBarang::all(),
            'mahasiswa' => Mahasiswa::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request->all());
        
        // $request->validate([
        //     'Nim'=>'required|min:9|unique:datapeminjaman,Nim',
        //     'KodeBarang'=>'required|min:8',
        //     'JumlahBarang'=>'required',
        // ]);

        // $model = new datapeminjaman;
        // $model->Nim = $request->input('Nim');
        // $model->Nama_Barang = null;
        // $model->Kode_Barang = $request->input('idBarang');
        // $model->Jumlah_Barang = $request->input('JumlahBarang');
        // $model->save();

        datapeminjaman::create([
            'IDMahasiswa' => $request->input('idMahasiswa'),
            'IDBarang' => $request->input('idBarang'),
            'Jumlah_Barang' => $request->input('JumlahBarang'),
        ]);     

        // DataBarang::update([
        //     'Jumlah_Barang' = 
        // ]);
        


        return redirect()->to('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = datapeminjaman::find($id);
        return view('peminjaman.edit',compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = datapeminjaman::find($id);
        $model->Nim = $request->input('Nim');
        $model->Nama_Barang = $request->input('NamaBarang');
        $model->Kode_Barang = $request->input('KodeBarang');
        $model->Jumlah_Barang = $request->input('JumlahBarang');
        $model->save();

        return redirect()->to('/datapeminjaman');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = datapeminjaman::find($id);
        $model->delete();
        return redirect('/datapeminjaman');
    }
}
