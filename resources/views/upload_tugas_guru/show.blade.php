@extends('layouts.guru')
@section('content')

<div class="pre-loader">
    <div class="pre-loader-box">
        <div class="loader-logo"><img src="{{ asset('assets/vendors/images/deskapp-logo.svg') }}" alt=""></div>
        <div class='loader-progress' id="progress_div">
            <div class='bar' id='bar1'></div>
        </div>
        <div class='percent' id='percent1'>0%</div>
        <div class="loading-text">
            Loading...
        </div>
    </div>
</div>

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <!-- Default Basic Forms Start -->
            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Detail Hasil Upload Tugas</h4>
                        <p class="mb-30">Data form upload tugas</p>
                    </div>
                </div>                
                <form action="#" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label>File Tugas</label>
                        <div class="row">
                            <div class="col-md-10">
                                @if ($data->files)
                                    <input type="text" disabled name="dokumen_file" value="{{ $data->file_upload }}" class="form-control">
                                @else
                                    <input type="text" disabled name="dokumen_file" value="No file available" class="form-control">
                                @endif
                            </div>
                            
                            @if ($data->dokumen_file == NULL)
                                <button class="btn btn-primary" type="button" disabled>Download</button>
                            @elseif($data->dokumen_file == 'file tidak ada')
                                <button class="btn btn-primary" type="button" disabled>Download</button>
                            @else
                                <a href="#">
                                    <button class="btn btn-primary col-12" type="button">
                                        Download
                                    </button>
                                </a>
                            @endif
                        </div>
                    </div>
                    
                    <div class="form-group mb-3">
                        <label>Tanggal Upload</label>
                        <input type="date" class="form-control" name="tanggal_upload" value="{{ $data->tanggal_upload }}" readonly>
                    </div>

                    <div class="form-group mb-3">
                        <label>Tanggal Selesai</label>
                        <input type="date" class="form-control" name="tanggal_selesai" value="{{ $data->tanggal_selesai }}" readonly>
                    </div>

                    <div class="form-group mb-3">
                        <label>Keterangan Tugas</label>
                        <input type="text" class="form-control" name="keterangan" value="{{ $data->keterangan }}" readonly>
                    </div>
                    
                    <div class="form-group mb-3">
                        <label>Status</label>
                        <input type="text" class="form-control" name="status" value="{{ $data->status }}" readonly>
                    </div>

                    <center>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <a href="{{ route('upload_tugas.index') }}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </center>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection