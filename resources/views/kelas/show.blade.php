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
						<div class="form-group">
							<label class="col-sm-12 col-md-2" style="font-size: 19px">Angkatan</label>
							<div class="col-sm-12 col-md-10">
                                <input type="text" name="angkatan" value="{{$kelass->angkatan}}" class="form-control" readonly >
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-12 col-md-2" style="font-size: 19px">Jurusan</label>
							<div class="col-sm-12 col-md-10">
                                <input type="text" name="jurusan_id" value="{{$kelass->jurusan->nama}}" class="form-control" readonly >
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-12 col-md-2" style="font-size: 19px">Angkatan</label>
							<div class="col-sm-12 col-md-10">
                                <input type="text" name="nama_kelas" value="{{$kelass->nama_kelas}}" class="form-control" readonly >
							</div>
						</div>
						<a class="btn btn-primary" href="{{route('kelas.index')}}">Kembali</a>
				</div>
			</div>
		</div>
	</div>


@endsection