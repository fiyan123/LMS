@extends('layouts.guru')
@section('content')

<br><br>
<div class="mt-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">{{ __('Dashboard') }}</div>
	
					<div class="card-body">
						@if (session('status'))
							<div class="alert alert-success" role="alert">
								{{ session('status') }}
							</div>
						@endif
	
						<p>Selamat Datang, {{ Auth::user()->name }}</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
