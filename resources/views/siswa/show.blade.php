@extends('layouts/app')

@section('content')
    <div class="row justify-content-center mt-3">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body text-center">
                    <h3 class="text-center">Profil Siswa</h3>
                    <hr>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Nama : {{$siswa->nama}}</li>
                        <li class="list-group-item">Nis : {{$siswa->nis}}</li>
                        <li class="list-group-item">Tanggal Lahir : {{$siswa->tgl_lahir}}</li>
                    </ul>                   
                    <a href="/siswa" class="btn btn-info btn-md mt-4">Kembali</a> 
                </div>
            </div>
        </div>
    </div>
@endsection