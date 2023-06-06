@extends('layouts.siswa')
@section('content')

<div class="main-container">
	<div class="pd-ltr-20 xs-pd-20-10">
		<div class="min-height-200px">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>Daftar Tugas Siswa</h4>
						</div>
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="/">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Table Tugas</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>

			<div class="card">
				<div class="card-header"></div>
				<div class="card-body">
					<table class="data-table table hover nowrap">
						<thead>
							<tr>
								<th>No</th>
								<th>Tanggal Upload</th>
								<th>Tanggal Selesai</th>
								<th>Tahun Angkatan</th>
								<th>Jurusan</th>
								<th>Kelas</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($tugass as $data)
							<tr>
								<td>{{ $loop->iteration }}</td>
								<td>{{ $data->tanggal_upload }}</td>
								<td>{{ $data->tanggal_selesai }}</td>
								<td>{{ $data->tahun_angkatan }}</td>
								<td>{{ $data->nama_jurusan }}</td>
								<td>{{ $data->kelas_id }}</td>
								<td>
									<a href="{{ route('tugas.show', $data->id) }}" class="btn btn-sm btn-warning">
										Detail
									</a>
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