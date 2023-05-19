@extends('layouts.guru')
@section('content')

{{-- <div class="pre-loader">
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
</div> --}}

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <!-- Default Basic Forms Start -->
            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Form Upload Tugas</h4>
                        <p class="mb-30">Masukkan data form upload tugas</p>
                    </div>
                </div>            
                    
                <form action="{{ route('upload_tugas.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
        
                    <div class="form-group mb-3">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">File Tugas<span class="required">*</span></label>
                        <div class="input-group control-group increment  col-md-6 col-sm-6 col-xs-12">
                            <input type="file" name="dokumen_file[]" class="form-control col-md-7 col-xs-12">
                            <div class="input-group-btn"> 
                                <a class="btn btn-success" id="add"><i class="glyphicon glyphicon-plus"></i>Add</a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="clone hide" >
                            <div class="control-group input-group col-md-6 col-sm-6 col-xs-12"  style="margin-top:10px;">
                                <input type="file" name="dokumen_file[]" class="form-control col-md-7 col-xs-12">
                                <div class="input-group-btn"> 
                                <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group mb-3">
                        <label>Tanggal Upload</label>
                        <input type="date" class="form-control @error('tanggal_upload') is-invalid @enderror" name="tanggal_upload" placeholder="tentukan tanggal" value="{{ old('tanggal_upload') }}">

                        @error('tanggal_upload')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label>Tanggal Selesai</label>
                        <input type="date" class="form-control @error('tanggal_selesai') is-invalid @enderror" name="tanggal_selesai" placeholder="tentukan tanggal" value="{{ old('tanggal_selesai') }}">

                        @error('tanggal_selesai')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label>Keterangan Tugas</label>
                        <textarea class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" placeholder="masukkan keterangan" value="{{ old('keterangan') }}"></textarea>

                        @error('keterangan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <label class="form-group">Status</label>
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input @error('status') is-invalid @enderror" type="radio" name="status" id="inlineRadio1" value="Selesai">
                            <label class="form-check-label">Selesai</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input @error('status') is-invalid @enderror" type="radio" name="status" id="inlineRadio2" value="Tidak Selesai">
                            <label class="form-check-label">Tidak Selesai</label>
                        </div>
                        @error('status')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <center>
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{ route('upload_tugas.index') }}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </center>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<script type="text/javascript">
    $(document).ready(function() {
        $("#add").click(function(){ 
            var html = $(".clone").html();
            $(".increment").after(html);
        });
        $("body").on("click",".btn-danger",function(){ 
            $(this).parents(".control-group").remove();
        });
    });
</script>
@endsection