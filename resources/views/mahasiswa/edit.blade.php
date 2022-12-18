
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
                        <label for="InputNim">NIM</label>    
                        <input type="text" class="form-control" name="Nim" id="InputNim" value="{{ $model->Nim }}"><br/>
                        </div>

                        <div class="form-group">
                        <label for="InputKelas">Kelas</label>    
                        <select class="form-control" name="Kelas" id="">
                           
                           <option value="D3-1A">D3-1A</option>
                           <option value="D3-1B">D3-1B</option>
                           <option value="D4-1A">D4-1A</option>
                           <option value="D4-1B">D4-1B</option>
                           <option value="D3-2A">D3-2A</option>
                           <option value="D3-2B">D3-2B</option>
                           <option value="D4-2A">D4-2A</option>
                           <option value="D4-2B">D4-2B</option>
                           <option value="D3-3A">D3-3A</option>
                           <option value="D3-3B">D3-3B</option>
                           <option value="D4-3A">D4-3A</option>
                           <option value="D4-3B">D4-3B</option>
                           <option value="D4-4A">D4-4A</option>
                           <option value="D4-4A">D4-4B</option>
                           
                       </select>
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
