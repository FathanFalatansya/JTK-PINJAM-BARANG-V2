
@extends('adminlte::page')

@section('title', 'Tambah User')

@section('content_header')
    <h1 class="m-0 text-dark">Edit Data Mahasiswa</h1>
@stop

@section('content')
    <form action="{{ url('Mahasiswa/'.$model->id) }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group">
                        <label for="InputNama">Nama</label>    
                        <input type="text" class="form-control" name="Nama" id="InputNama" value="{{ $model->Nama }}"><br/>
                        </div>

                        <div class="form-group">
                        <label for="InputNim">Nim</label>    
                        <input type="text" class="form-control" name="Nim" id="InputNim" value="{{ $model->Nim }}"><br/>
                        </div>

                        <div class="form-group">
                        <label for="InputKelas">Kelas</label>    
                        <input type="text" class="form-control" name="Kelas" id="InputKelas" value="{{ $model->Kelas }}"><br/>
                        </div>
                    

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ url('/Mahasiswa') }}" class="btn btn-default">
                            Batal
                        </a>
                    </div>
                </div>
            </div>
        </div>
@stop
