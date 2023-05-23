@extends('layouts.siswa')
@section('content')

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>LMS - System</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Table Teman Kelas</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <!-- multiple select row Datatable start -->
            <div class="card-box mb-30">
            @include('sweetalert::alert')
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">
                            <h5 align="center">Pengajar</h5>
                        </div>
                    </div>
                    <div class="card-body" align="center">
                        <p>Nama Pengajar</p>
                    </div>
                </div>

            </div>
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h5 align="center">Teman Sekelas</h5>
                    </div>
                </div>
                <div class="card-body" align="center">
                    @foreach ($data as $item)
                        <p>{{ $item->name }}</p><hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection