@extends('layouts.master')

@section('title', 'Mahasiswa')

@section('content')

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h4 class="fw-bold text-center mb-5">Data Mahasiswa</h4>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NPM</th>
                            <th scope="col">Kelas</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($mahasiswas as $mahasiswa)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $mahasiswa['nama'] }}</td>
                                <td>{{ $mahasiswa['npm'] }}</td>
                                <td>{{$mahasiswa['kelas'] }}</td>
                            </tr>
                        @empty
                            <td colspan="2">Data Tidak Ditemukan</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
