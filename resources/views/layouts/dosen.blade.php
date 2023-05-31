@extends('layouts.master')

@section('title', 'Dosen')

@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h4 class="fw-bold text-center">Data Dosen</h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($dosens as $dosen)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $dosen }}</td>
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
