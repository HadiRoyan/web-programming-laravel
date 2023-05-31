@extends('layouts.master')

@section('title', 'Mahasiswa')

@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h4 class="fw-bold text-center">Data Mahasiswa</h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($mahasiswas as $mahasiswa)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $mahasiswa }}</td>
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
