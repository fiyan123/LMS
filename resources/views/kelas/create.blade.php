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
					<form action="{{route('kelas.store')}}" method="post">
						@csrf
						<div class="form-group">
							<label class="col-sm-12 col-md-2" style="font-size: 19px">Angkatan</label>
							<div class="col-sm-12 col-md-10">
                                <select class="form-control @error('angkatan') is-invalid @enderror" name="angkatan" id="">
                                    {{-- <option>Ankgatan</option> --}}
                                    <option value="X">X</option>
                                    <option value="XI">XI</option>
                                    <option value="XII">XII</option>
                                </select>
								@error('angkatan')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-12 col-md-2" style="font-size: 19px">Jurusan</label>
							<div class="col-sm-12 col-md-10">
                                <select class="form-control @error('jurusan_id') is-invalid @enderror" name="jurusan_id" id="">
                                    @foreach ($jurusans as $data)
                                    <option value="{{$data->id}}">{{$data->nama}}</option>
                                    @endforeach
                                </select>
								@error('jurusan_id')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-12 col-md-2" style="font-size: 19px">Kelas</label>
							<div class="col-sm-12 col-md-10">
                                <input type="text" name="nama_kelas" class="form-control @error('nama_kelas') is-invalid @enderror" placeholder="Masukan Nama Kelas" value="{{ old('nama_kelas') }}">
								@error('nama_kelas')
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