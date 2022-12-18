<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Mahasiswa::all();
        return view('mahasiswa.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Mahasiswa;
        return view('mahasiswa.create', compact('model'));
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
                'Nama'=>'required', 
                'Nim'=>'required|min:9|unique:mahasiswa,Nim',
                'Kelas'=>'required|min:2',
            ]);
            
        }catch(\Exception $e){
            Log::channel('create_mahasiswa')->error('Data Tidak Valid',['error' => $e->getMessage(),]);
            return redirect()->to('/Mahasiswa/create')->with('error_message','Data tidak valid');
        }
        
        
        $model = new Mahasiswa;
        $model->Nama = $request->input('Nama');
        $model->Nim = $request->input('Nim');
        $model->Kelas = $request->input('Kelas');
        $model->save();

        return redirect()->to('/Mahasiswa')->with('success_message','Data Mahasiswa Berhasil Di Tambahkan');
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
        $model = Mahasiswa::find($id);
        return view('mahasiswa.edit',compact('model'));
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
        $model = Mahasiswa::find($id);
        $model->Nama = $request->input('Nama');
        $model->Nim = $request->input('Nim');
        $model->Kelas = $request->input('Kelas');
        $model->save();

        return redirect()->to('/Mahasiswa')->with('success_message','Data Barang Berhasil Di Tambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $model = Mahasiswa::find($id);
        $model->delete();
        return redirect('/Mahasiswa');
        
    }
}
