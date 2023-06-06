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
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
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
                    <table class="data-table table hover nowrap">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal Upload</th>
                                <th>Tanggal Selesai</th>
                                <th>Angkatan</th>
                                <th>Jurusan</th>
                                <th>Kelas</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($uploadTugas as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->tanggal_upload }}</td>
                                <td>{{ $data->tanggal_selesai }}</td>
                                <td>{{ $data->tahun_angkatan }}</td>
                                <td>{{ $data->nama_jurusan }}</td>
                                <td>{{ $data->kelas_id }}</td>
                                <td><span class="badge badge-primary">{{ $data->status }}</span></td>
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
                                        <input type="text" value="{{ $data->id }}" hidden id="data_id">
                                        <button class="hapus btn btn-sm btn-outline-danger">Delete
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

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });
		// hapus
		$(document).on('click', '.hapus', function () {
            Swal.fire({
                title: 'Apakah anda yakin?',
                text: 'Data akan dihapus dari daftar!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus data!'
        }).then((result) => {
            if (result.isConfirmed) {
            var data_id = $('#data_id').val();
            var url = "{{ route('upload_tugas.destroy', ':data_id') }}";
            url = url.replace(':data_id', data_id);
                $.ajax({
                    url: url,
                    type: 'DELETE',
                    data: {
                        _token: "{{ csrf_token() }}"
                    },
                    success: function (res, status) {
                        if (status === 'success') { // Perubahan di sini, gunakan === untuk membandingkan nilai
                        Swal.fire({
                            icon: 'success',
                            title: 'Data Berhasil Dihapus',
                            showConfirmButton: false,
                            timer: 1500
                        }).then(() => {
                        location.reload(); // Refresh halaman
                        });
                        }
                    },
                    error: function (xhr) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Gagal Menghapus',
                    });
                    }
                });
            }
        });
    });
</script>
@endsection