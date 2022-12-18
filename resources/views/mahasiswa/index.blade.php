@extends('adminlte::page')

@section('title', 'List Mahasiswa')

@section('content_header')
    <h1 class="m-0 text-dark">Data Mahasiswa</h1>
@stop

@section('content')
<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-body">
                        <table class="table table-hover table-bordered table-stripped" id="table-mahasiswa">
                        <a class="btn btn-primary mb-2" href="{{ 'Mahasiswa/create' }}">Tambah data</a>
                            <thead>
                                <tr class="table-active">
                                    
                                    <th>Nim</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Opsi</th>
                                </tr>   
                            </thead>
                            
                            <tbody>
                            @foreach($data as $key=>$value)
                                <tr>
                                    <!-- <td>{{$key+1}}</td> -->
                                    <td>{{ $value->Nim }}</td>
                                    <td>{{ $value->Nama }}</td>
                                    <td>{{ $value->Kelas }}</td>
                                    <td>
                                    
                                        <div class="row d-flex">                                               
                                            <a href="{{ url('Mahasiswa/'.$value->id.'/edit') }}" class="btn btn-info mb-2 mr-1" >
                                                Edit
                                             </a>  

                                             <a href="{{route('Mahasiswa.destroy',$value->id)}}" onclick="notificationBeforeDelete(event, this)" class="btn btn-danger mb-2 mr-1" >
                                                Hapus
                                             </a>  

                                            <!-- <form action="{{ url('Mahasiswa/'.$value->id)}}" onclick="notificationBeforeDelete(event, this)" method="POST">
                                                 @csrf
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button class="btn btn-danger" type="submit" >Delete</button>
                                            </form>                                                                                                                                                                    -->
                                        </div>
                                    
                                   
                                </td>
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
    <form action="" id="delete-form" method="post">
        @method('delete')
        @csrf
    </form>
    <script>
        $('#table-mahasiswa').DataTable({
            "responsive": true,
        });

        function notificationBeforeDelete(event, el) {
            event.preventDefault();
            if (confirm('Apakah anda yakin akan menghapus data ? ')) {
                $("#delete-form").attr('action', $(el).attr('href'));
                $("#delete-form").submit();
            }
        }
    </script>
@endpush