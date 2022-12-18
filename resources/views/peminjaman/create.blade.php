
@extends('adminlte::page')

@section('title', 'Pinjam Barang')

@section('content_header')
    <h1 class="m-0 text-dark">Data Peminjaman Barang</h1>
@stop

@section('content')
    <form action="{{ route('datapeminjaman.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group">
                        <label for="InputNim">Data Peminjam</label>    
                        <select class="form-control" name="idMahasiswa" id="">
                            @foreach($mahasiswa as $m => $value)
                            <option value="{{$value->id}}">{{$value->Nim  }}  
                                {{$value->Nama}}
                            </option>
                            @endforeach
                        </select>
                        </div>

                        

                        <div class="form-group">
                        <label for="InputNamaBarang">Barang</label>    
                        <select class="form-control" name="idBarang" id="">
                            @foreach($barang as $b => $value)
                            <option value="{{$value->id}}">{{$value->Nama_Barang  }}  
                            </option>
                            @endforeach
                        </select>
                        </div>

                        <div class="form-group">
                        <label for="InputJumlahBarang">Jumlah Barang</label>    
                        <input type="text" required class="form-control @error('JumlahBarang') is-invalid @enderror" name="JumlahBarang" placeholder="Jumlah Barang (Angka)" id="InputJumlahBarang"><br/>
                        @error('JumlahBarang') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                    

                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ url('/home') }}" class="btn btn-default">
                            Batal
                        </a>
                    </div>
                </div>
            </div>
        </div>
@stop
