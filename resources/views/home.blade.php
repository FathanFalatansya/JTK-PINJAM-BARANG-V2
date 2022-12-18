@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="m-0 text-dark ml-2">JTK PINJAM BARANG</h1>
@stop

@section('content')
    <div class="row ml-1">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">Selamat datang di JTK Pinjam Barang!</p>
                </div>
            </div>
        </div>
    </div>
  
    
            <div class="row ml-2">
                <div class="col-md-1.5">
                     <a class="btn btn-primary btn-lg mb-2" href="{{ 'datapeminjaman/create' }}">
                        Peminjaman
                    </a>
                </div>
               
                <div class="col">
                     <a class="btn btn-secondary btn-lg mb-2" href="{{ 'home/' }}">
                        Pengembalian
                    </a>
                </div>
            </div>

                <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-body">
                                    <table class="table table-hover table-bordered table-stripped" id="table-mahasiswa">
                                        <h1>List Data Barang</h1>
                                            <thead>
                                                <tr class="table-active">
                                                    <th>No.</th>
                                                    <th>Nama Barang</th>
                                                    <th>Jumlah Barang</th>
                                                    <th>Status</th>
                                                </tr>   
                                            </thead>                    
                                            <tbody>
                                            @foreach($data as $key=>$value)
                                                    <tr>
                                                        <td>{{$key+1}}</td>
                                                        <td>{{ $value->Nama_Barang }}</td>
                                                        <td>{{ $value->Jumlah_Barang }}</td>
                                                        <td>{{ $value->Status }}</td>
                                                        <!-- <td> -->
                                                        
                                                            <!-- <div class="row d-flex">                                               
                                                                <a href="{{ url('Mahasiswa/'.$value->id.'/edit') }}" class="btn btn-info mb-2 mr-1" >
                                                                    Edit
                                                                </a>  
                                                                <form action="{{ url('Mahasiswa/'.$value->id)}}" onclick="notificationBeforeDelete(event, this)" method="POST">
                                                                    @csrf
                                                                    <input type="hidden" name="_method" value="DELETE">
                                                                    <button class="btn btn-danger" type="submit" >Delete</button>
                                                                </form>                                                                                                                                                                   
                                                            </div> -->
                                                        
                                                    
                                                            <!-- </td> -->
                                                    </tr>  
                                                @endforeach
                                            </tbody>                        
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
        
        

    
@stop

@push('js')
    
    <script>
        $('#table-mahasiswa').DataTable({
            "responsive": true,
        });
    </script>
@endpush