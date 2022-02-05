@extends('layouts/app')

@section('content')
    <div class="container mt-4">
        
        
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <a href="{{route('siswa.create')}}" class="btn btn-primary btn-md">Add Data</a>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Nis</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Act</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($siswa as $key)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$key->nama}}</td>
                                        <td>{{$key->nis}}</td>
                                        <td>{{$key->tgl_lahir}}</td>
                                        <td >
                                            <ul class="nav">
                                                <a href="{{route('siswa.edit',$key->id)}}" class="btn btn-warning btn-md mr-2">Edit</a>
                                                <a href="{{route('siswa.show',$key->id)}}" class="btn btn-info btn-md mx-2">Lihat</a>
                                                <form action="{{route('siswa.destroy',$key->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-md">Hapus</button>
                                                </form> 
                                            </ul>
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

    </div>
@endsection