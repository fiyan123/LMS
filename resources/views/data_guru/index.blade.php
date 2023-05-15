@extends('layouts.admin')
@section('content')



	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>DataTable</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">DataTable</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
								{{-- <a class="btn btn-primary" href="{{route('data_guru.create')}}" role="button" >Tambah Data</a> --}}
						</div>
					</div>
				</div>

				<!-- multiple select row Datatable start -->
				<div class="card-box mb-30">
					<div class="pd-20">
						<h4 class="text-blue h4">Data Table with multiple select row</h4>
					</div>
					<div class="pb-20">
						<table class="data-table table hover multiple-select-row nowrap">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Mapel</th>
									<th>Kelas</th>
									<th>No Telpon</th>
									<th>Email</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
                                @php $no = 1; @endphp
                                @foreach ($data_gurus as $data)
								<tr>
                                    <td>{{$no++}}</td>
									<td>{{$data->name}}</td>
									<td>{{$data->pelajaran}}</td>
									<td>{{$data->kelas_id}}</td>
									<td>{{$data->nomor_telpon}}</td>
									<td>{{$data->email}}</td>
                                    <td>
                                        <form action="{{ route('data_guru.destroy', $data->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="{{ route('data_guru.edit', $data->id) }}"
                                                class="btn btn-sm btn-outline-success">
                                                Edit
                                            </a> |
                                            <a href="{{ route('data_guru.show', $data->id) }}"
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
				<!-- multiple select row Datatable End -->
			</div>
			<div class="footer-wrap pd-20 mb-20 card-box">
				DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
			</div>
		</div>
	</div>
    
@endsection