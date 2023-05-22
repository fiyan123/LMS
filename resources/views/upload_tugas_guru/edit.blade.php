@extends('layouts.guru')
@section('content')
    
	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Form Edit Data</h4>
							<p class="mb-30">Masukkan data tugas baru</p>
						</div>
					</div>
					<form action="{{ route('upload_tugas.update',$data->id )}}" method="POST">
						@csrf
                        @method('PUT')

						@if (isset($data) && $data->dokumen_file)
						<div class="form-group mb-3">
							<div class="col-sm-12">
								<label class="form-label">File Tugas Upload</label>
								<div class="row mb-2">
									<div class="col-md-10">
										<input type="text" class="form-control" disabled value="File Sudah Disimpan">
									</div>
									<div class="col-md-2">
										<a href="#">
											<button class="btn btn-primary col-12" type="button">
												Download
											</button>
										</a>
									</div>
								</div>
	
								<input type="file" accept="application/pdf" class="form-control mb-3"
									name="dokumen_file[]">
							</div>
						</div>
						@else
							<label class="form-label">File Tugas Upload</label>
								<input required type="file" accept="application/pdf"
									class="form-control mb-3  @error('dokumen_file') is-invalid @enderror" name="dokumen_file[]">
								@error('dokumen_file')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
						@endif

						<div class="form-group mb-3">
							<label class="col-sm-12 col-md-2">Pilih Data Angkatan</label>
							<div class="col-sm-12">
								<select name="angkatan_id" class="form-control @error('angkatan_id') is-invalid @enderror">
									@foreach ($angkatans as $item)
										<option value="{{ $item->id }}"
											{{ $item->id == $data->angkatan_id ? 'selected' : '' }}>
											{{ $item->angkatan }}
										</option>
									@endforeach
								</select>
								@error('id_kelas')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>

						<div class="form-group mb-3">
							<label class="col-sm-12 col-md-2">Pilih Data Jurusan</label>
							<div class="col-sm-12">
								<select name="jurusan_id" class="form-control @error('jurusan_id') is-invalid @enderror">
									@foreach ($jurusans as $item)
										<option value="{{ $item->id }}"
											{{ $item->id == $data->jurusan_id ? 'selected' : '' }}>
											{{ $item->nama }}
										</option>
									@endforeach
								</select>
								@error('id_kelas')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>

						<div class="form-group mb-3">
							<label class="col-sm-12 col-md-2">Pilih Data Kelas</label>
							<div class="col-sm-12">
								<select name="kelas_id" class="form-control @error('kelas_id') is-invalid @enderror">
									@foreach ($kelass as $item)
										<option value="{{ $item->id }}"
											{{ $item->id == $data->kelas_id ? 'selected' : '' }}>
											{{ $item->nama_kelas }}
										</option>
									@endforeach
								</select>
								@error('id_kelas')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>
						</div>
						
						<div class="form-group mb-3">
							<label class="col-sm-12 col-md-2">Tanggal Upload</label>
							<div class="col-sm-12">
								<input  type="datetime" value="{{ $data->tanggal_upload }}" name="tanggal_upload" class="form-control @error('tanggal_upload') is-invalid @enderror" placeholder="Masukan tanggal upload ">
								@error('tanggal_upload')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>

						<div class="form-group mb-3">
							<label class="col-sm-12 col-md-2">Tanggal Selesai</label>
							<div class="col-sm-12">
								<input  type="datetime" value="{{ $data->tanggal_selesai }}" name="tanggal_selesai" class="form-control @error('tanggal_selesai') is-invalid @enderror" placeholder="Masukan tanggal selesai ">
								@error('tanggal_selesai')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>

						<div class="form-group mb-3">
							<label class="col-sm-12 col-md-2">Keterangan Tugas</label>
							<div class="col-sm-12">
								<input  type="text" value="{{ $data->keterangan }}" name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" placeholder="Masukan keterangan ">
								@error('keterangan')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>

                        <center>
							<button type="submit" class="btn btn-primary">Simpan</button>
							<a href="{{ route('upload_tugas.index') }}" class="btn btn-danger">Kembali</a>
                        </center>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection