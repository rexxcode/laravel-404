@extends('layouts/app')

@section('content')
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card px-5">
                    <div class="card-body">
                        <h3 class="text-center">Edit Siswa</h3> 
                        <form action="{{route('siswa.update',$siswa->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <label for="">Nama</label>
                            <input type="text" name="nama" id="" value="{{$siswa->nama}}" class="form-control mb-3">
                            <label for="">Nis</label>
                            <input type="number" name="nis" id="" value="{{$siswa->nis}}" class="form-control mb-3">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tgl_lahir" value="{{$siswa->tgl_lahir}}">
                            <button class="btn btn-primary mt-3">Simpan</button>
                            <a href="/siswa" class="btn btn-dark mt-3">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection