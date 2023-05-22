@extends('layouts.guru')
@section('content')

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>LMS - System</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Upload Tugas</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <a class="btn btn-primary" href="{{ route('upload_tugas.create') }}" role="button">Tambah
                            Data</a>
                    </div>
                </div>
            </div>

            <!-- multiple select row Datatable start -->
            <div class="card-box mb-30">
            @include('sweetalert::alert')
                <div class="pd-20">
                    <h4 class="text-blue h4">Table Upload Tugas Guru</h4>
                </div>
                <div class="pb-20">
                    <table class="data-table table hover multiple-select-row nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal Upload</th>
                                <th>Tanggal Selesai</th>
                                <th>Keterangan</th>
                                <th>Status</th>
                                <th>Angkatan</th>
                                <th>Jurusan</th>
                                <th>Kelas</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($uploadTugas as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->tanggal_upload }}</td>
                                <td>{{ $data->tanggal_selesai }}</td>
                                <td>{{ $data->keterangan }}</td>
                                <td>{{ $data->angkatan_id }}</td>
                                <td>{{ $data->jurusan_id }}</td>
                                <td>{{ $data->kelas_id }}</td>
                                <td>{{ $data->status }}</td>
                                <td>
                                    <form action="{{ route('upload_tugas.destroy', $data->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('upload_tugas.edit', $data->id) }}"
                                            class="btn btn-sm btn-outline-success">
                                            Edit
                                        </a> |
                                        <a href="{{ route('upload_tugas.show', $data->id) }}"
                                            class="btn btn-sm btn-outline-warning">
                                            Show
                                        </a> |
                                        <button type="submit" class="btn btn-sm btn-outline-danger"
                                            onclick="return confirm('Apakah Anda Yakin?')">Delete
                                        </button>
                                    </form>
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
@endsection