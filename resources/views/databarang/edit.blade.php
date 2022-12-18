
@extends('adminlte::page')

@section('title', 'Edit Databarang')

@section('content_header')
    <h1 class="m-0 text-dark">Update Data Barang</h1>
@stop

@section('content')
    <form action="{{ url('DataBarang/'.$model->id) }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group">
                        <label for="InputNamaBarang">Nama Barang</label>    
                        <input type="text" class="form-control" name="NamaBarang" id="InputNamaBarang" value="{{ $model->Nama_Barang }}"><br/>
                        </div>

                        <div class="form-group">
                        <label for="InputKodeBarang">Kode Barang</label>    
                        <input type="text" class="form-control" name="KodeBarang" id="InputKodeBarang" value="{{ $model->Kode_Barang }}"><br/>
                        </div>

                        <div class="form-group">
                        <label for="InputJumlahBarang">Jumlah Barang</label>    
                        <input type="text" class="form-control" name="JumlahBarang" id="InputJumlahBarang" value="{{ $model->Jumlah_Barang }}"><br/>
                        </div>

                        <div class="form-group">
                        <label for="InputStatus">Jumlah Barang</label>    
                        <input type="text" class="form-control" name="Status" id="InputStatus" value="{{ $model->Status }}"><br/>
                        </div>
                    

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ url('/DataBarang') }}" class="btn btn-default">
                            Batal
                        </a>
                    </div>
                </div>
            </div>
        </div>
@stop
