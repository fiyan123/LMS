@extends('layouts.siswa')
@section('content')

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>DASHBOARD</h4>
							</div>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
								<a class="btn btn-primary" href="#" role="button" >T</a>
						</div>
					</div>
				</div>
				<div class="page-header">
					<div class="row">
						<div class="col-md-6 col-sm-12">
							<div class="title">
								<h4>Selamat Datang, {{ Auth::user()->name }}</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.html">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">dashboard</li>
								</ol>
							</nav>
						</div>
						<div class="col-md-6 col-sm-12 text-right">
								<a class="btn btn-primary" href="#" role="button" >T</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    
@endsection