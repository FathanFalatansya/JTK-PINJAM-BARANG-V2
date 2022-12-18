
@extends('adminlte::page')

@section('title', 'Tambah User')

@section('content_header')
    <h1 class="m-0 text-dark">Tambah Data Mahasiswa</h1>
@stop

@section('content')
    <form action="{{ url('/Mahasiswa') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group">
                        <label for="InputNama">Nama</label>    
                        <input type="text" class="form-control @error('Nama') is-invalid @enderror" name="Nama" placeholder="Nama lengkap" id="InputNama"><br/>
                        @error('Nama') <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-group">
                        <label for="InputNim">Nim</label>    
                        <input type="text" class="form-control @error('Nim') is-invalid @enderror"  name="Nim" placeholder="Nim (9-digit)" id="InputNim"><br/>
                        @error('Nim') <span class="text-danger">{{$message}}</span> @enderror
                        </div>

                        <div class="form-group">
                        <label for="InputKelas">Kelas</label>    
                        <input type="text" class="form-control @error('Kelas') is-invalid @enderror" name="Kelas" placeholder="Kelas (2-digit)" id="InputKelas"><br/>
                        @error('Kelas') <span class="text-danger">{{$message}}</span> @enderror
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
