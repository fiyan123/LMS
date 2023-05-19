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
							<p class="mb-30">Masukkan data baru</p>
						</div>
					</div>
					<form action="{{ route('upload_tugas.update',$data->id )}}" method="POST">
						@csrf
                        @method('PUT')
						<div class="form-group mb-3">
							<label class="col-sm-12 col-md-2" style="font-size: 19px">Tanggal Upload</label>
							<div class="col-sm-12">
								<input  type="date" value="{{ $data->tanggal_upload }}" name="tanggal_upload" class="form-control @error('tanggal_upload') is-invalid @enderror" placeholder="Masukan tanggal upload ">
								@error('tanggal_upload')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>

						<div class="form-group mb-3">
							<label class="col-sm-12 col-md-2" style="font-size: 19px">Tanggal Selesai</label>
							<div class="col-sm-12">
								<input  type="date" value="{{ $data->tanggal_selesai }}" name="tanggal_selesai" class="form-control @error('tanggal_selesai') is-invalid @enderror" placeholder="Masukan tanggal selesai ">
								@error('tanggal_selesai')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>

						<div class="form-group mb-3">
							<label class="col-sm-12 col-md-2" style="font-size: 19px">Keterangan Tugas</label>
							<div class="col-sm-12">
								<input  type="text" value="{{ $data->keterangan }}" name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" placeholder="Masukan keterangan ">
								@error('keterangan')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>

                        <label class="form-group">Status</label>
                        <div class="form-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input @error('status') is-invalid @enderror" type="radio" name="status" value="Selesai"
                                    @if ($data->status == 'Selesai') checked @endif>
                                <label class="form-check-label">
                                    Selesai
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input @error('status') is-invalid @enderror" type="radio" name="status" value="Tidak Selesai"
                                     @if ($data->status == 'Tidak Selesai') checked @endif>
                                <label class="form-check-label">
                                    Tidak Selesai
                                </label>
                            </div>
                            @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <center>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="{{ route('upload_tugas.index') }}" class="btn btn-secondary">Kembali</a>
                            </div>
                        </center>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection