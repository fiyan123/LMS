@extends('layouts.guru')
@section('content')



	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">


				{{-- @foreach($jurusans as $jurusan) --}}
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								{{-- <h4>{{$jurusan->nama}}</h4> --}}
							</div>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
							<a class="btn btn-primary" href="#" role="button" >Lihat</a>
						</div>
					</div>
				</div>
				{{-- @endforeach --}}
			</div>
		</div>
	</div>
    
@endsection