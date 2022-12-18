<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DataBarang;
use Illuminate\Support\Facades\Log;

class DataBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DataBarang::all();
        return view('databarang.index',compact('data'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new DataBarang;
        return view('databarang.create', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        try{
            $request->validate([
                'NamaBarang'=>'required',
                'KodeBarang'=>'required|min:8|unique:databarang,Kode_Barang',
                'JumlahBarang'=>'required',
            ]);
    
            if($request->JumlahBarang < 0){
                return redirect()->to('/DataBarang/create')->with('error_message','Stok tidak bisa diisi dengan 0');
            }    
        }catch(\Exception $e){
            Log::channel('create_barang')->error('Data tidak valid',['error' => $e->getMessage(),]);
            return redirect()->to('/DataBarang/create')->with('error_message','Data tidak valid');
        }
      

        $model = new DataBarang;
        $model->Nama_Barang = $request->input('NamaBarang');
        $model->Kode_Barang = $request->input('KodeBarang');
        $model->Jumlah_Barang = $request->input('JumlahBarang');
        $model->save();

        return redirect()->to('/DataBarang')->with('success_message','Data Barang Berhasil Di Tambahkan');
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
        $model = DataBarang::find($id);
        return view('databarang.edit',compact('model'));
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
        $model = DataBarang::find($id);
        $model->Nama_Barang = $request->input('NamaBarang');
        $model->Kode_Barang = $request->input('KodeBarang');
        $model->Jumlah_Barang = $request->input('JumlahBarang');
        $model->Status = $request->input('Status');
        $model->save();

        return redirect()->to('/DataBarang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = DataBarang::find($id);
        $model->delete();
        return redirect('/DataBarang');
    }
}
