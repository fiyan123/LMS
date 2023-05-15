@extends('layouts.siswa')
@section('content')



	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>B.Indonesia</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">jumlah</a></li>
									<li class="breadcrumb-item" aria-current="page">100</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
								<a class="btn btn-primary" href="{{url('/siswa/tugas/detail_tugas')}}" role="button">Lihat Tugas</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection