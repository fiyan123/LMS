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
								<a class="btn btn-primary" href="{{route('pelajaran.create')}}" role="button" >Tambah Data</a>
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
									<th>Nama Pelajaran</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
                                @php $no = 1; @endphp
                                @foreach ($pelajarans as $data)
								<tr>
                                    <td>{{$no++}}</td>
									<td>{{$data->nama_pelajaran}}</td>
                                    <td>
                                            <a href="{{ route('pelajaran.edit', $data->id) }}"
                                                class="btn btn-sm btn-outline-success">
                                                Edit
                                            </a> |
                                            <a href="{{ route('pelajaran.show', $data->id) }}"
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
				<!-- multiple select row Datatable End -->
			</div>
			<div class="footer-wrap pd-20 mb-20 card-box">
				DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
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
                text: "Data akan dihapus dari daftar!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus data!'
                }).then((result) => {
                if (result.isConfirmed) {
					var data_id = $('#data_id').val();
					var url = "{{ route('pelajaran.destroy', ':data_id') }}";
					url = url.replace(':data_id', data_id);
                    $.ajax({
                        url : url,
                        type: 'delete',
                        data: {
                            _token: "{{ csrf_token() }}"
                        },
                        success: function(res, status){
                            if (status = '200'){
                                setTimeout(() => {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Data Berhasil Dihapus',
                                        showConfirmButton: false,
                                        timer: 1500
                                    }).then((res) => {
										location.reload(); // Refresh halaman
									});
                                });
                            }
                        },
                        error: function(xhr){
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