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
					<form action="{{route('jurusan.store')}}" method="post">
						@csrf
						<div class="form-group">
							<label class="col-sm-12 col-md-2" style="font-size: 19px">Nama Jurusan</label>
							<div class="col-sm-12 col-md-10">
								<input  type="text"  name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukan Nama Jurusan" value="{{ old('nama') }}">
								@error('nama')
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