@extends('layouts.master')

@section('title', 'Mata Kuliah')

@section('content')

    <div class="container mt-5 mb-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h4 class="fw-bold text-center">Data Mata Kuliah</h4>
                <table class="table table-bordered table-striped mt-5">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($matkuls as $matkul)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $matkul }}</td>
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
