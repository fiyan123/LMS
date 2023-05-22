@extends('layouts.admin')
@section('content')
    
	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<!-- Default Basic Forms Start -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Default Basic Forms</h4>
							<p class="mb-30">All bootstrap element classies</p>
						</div>
					</div>
					<form action="{{route('data_siswa.store')}}" method="post">
						@csrf
						<div class="form-group">
							<label class="col-sm-12 col-md-3" style="font-size: 19px">Nama siswa</label>
							<div class="col-sm-12 col-md-10">
								<input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Masukan Nama Guru" value="{{ old('name') }}">
								@error('name')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>
                        <div class="form-group">
                            <label class="control-label col-sm-12 col-md-3" style="font-siz 19px" for="first-name">Mata Pelajaran</label>
                            <div class="col-sm-12 col-md-10">
                                <select name="pelajaran_id" class="form-control @error('pelajaran_id') is-invalid @enderror">
                                    <option value="" selected>Pilih Mata Pelajaran</option>
                                    @foreach ($pelajarans as $data)
                                    <option value="{{$data->id}}" {{ old('pelajaran_id') == $data->id ? 'selected' : '' }}>{{$data->nama_pelajaran}}</option>
                                    @endforeach
                                </select>
                                @error('pelajaran_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>    
                        </div>
						<div class="form-group">
							<label class="control-label col-sm-12 col-md-3" style="font-siz 19px" for="first-name">Kelas</label>
                            <div class="col-sm-12 col-md-10">
                                <select name="kelas_id" class="form-control @error('kelas_id') is-invalid @enderror">
                                    <option value="" selected>Pilih Kelas</option>
                                    @foreach ($kelas as $data)
                                    <option value="{{$data->id}}" {{ old('kelas_id') == $data->id ? 'selected' : '' }}>{{$data->angkatan . " ". $data->jurusan->nama . " " . $data->nama_kelas}}</option>
                                    @endforeach
                                </select>
                                @error('kelas_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>    
						</div>
						
						<div class="form-group">
							<label class="col-sm-12 col-md-3" style="font-size: 19px">Nomor Telepon</label>
							<div class="col-sm-12 col-md-10">
								<input type="number"  name="nomor_telpon" class="form-control @error('nomor_telpon') is-invalid @enderror" placeholder="Masukan Nomor Telepon" value="{{ old('nomor_telpon') }}">
								@error('nomor_telpon')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-12 col-md-3" style="font-size: 19px">Email</label>
							<div class="col-sm-12 col-md-10">
								<input aria-describedby="emailHelp" placeholder="example@gmail.com" type="email"  name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
								@error('email')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>
                        <div class="form-group">
							<label class="col-sm-12 col-md-3" style="font-size: 19px">Password</label>
							<div class="col-sm-12 col-md-10">
								<input type="password" name="password" class="form-control @error('password') is-invalid @enderror" Pelajaran" value="{{ old('password') }}">
								@error('password')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>
						<button class="btn btn-primary" type="submit">Next</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection