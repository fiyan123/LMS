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
					<form action="{{route('data_guru.update', $data->id)}}" method="post">
						@csrf
                        @method('put')
						<div class="form-group">
							<label class="col-sm-12 col-md-3" style="font-size: 19px">Nama Guru</label>
							<div class="col-sm-12 col-md-10">
								<input type="text" readonly name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Masukan Nama Guru" value="{{ old('name', $data->name) }}">
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
                                <select disabled name="pelajaran_id" class="form-control @error('pelajaran_id') is-invalid @enderror">
                                    <option value="" selected>Pilih Mata Pelajaran</option>
                                    @foreach ($pelajarans as $value)
                                    <option disabled value="{{$value->id}}" {{ $data->pelajaran_id == $value->id ? 'selected' : '' }}>{{$value->nama_pelajaran}}</option>
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
                                <select disabled name="kelas_id" class="form-control @error('kelas_id') is-invalid @enderror">
                                    <option value="" selected>Pilih Kelas</option>
                                    @foreach ($kelas as $value)
                                    <option disabled value="{{$value->id}}" {{ $data->kelas_id == $value->id ? 'selected' : '' }}>{{$value->angkatan . " ". $value->jurusan->nama . " " . $value->nama_kelas}}</option>
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
								<input type="number"  readonly name="nomor_telpon" class="form-control @error('nomor_telpon', $data->nomor_telpon) is-invalid @enderror" placeholder="Masukan Nomor Telepon" value="{{ old('nomor_telpon', $data->nomor_telpon) }}">
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
								<input aria-describedby="emailHelp" placeholder="example@gmail.com" type="email" readonly name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $data->email) }}">
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
								<input type="password" readonly name="password" class="form-control @error('password') is-invalid @enderror" Pelajaran" value="{!! old('password', $data->password) !!}">
								@error('password')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection