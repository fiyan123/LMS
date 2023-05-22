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
            <div class="pd-20 card-box mb-30">
                <div class="wizard-content">
                        <div class="row mb-3">
                            <div class="col-md-6 col-sm-12">
                                <div class="title mb-3">
                                    <h5>Detail Data Upload Tugas</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-10 mb-3">
                            <label class="control-label" for="first-name">File Tugas</label>
                            <input type="text" name="dokumen_file" value="{{ $data->dokumen_file }}" class="form-control" readonly>
                        </div>
                        <div class="col-md-2 mb-3">
                            <label id="lihat-dokumen-kkpr" for="dokumen_kkpr" class="form-label">Lihat</label>
                            <a href="#" id="show-dokumen-kkpr" target="_blank" class="btn btn-primary col-12" type="button">
                                    Download
                            </a>
                        </div>
                    </div>
                
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label" for="first-name">Angkatan Kelas</label>
                                <input type="text" name="angkatan_id" value="{{ $data->tahun_angkatan }}" class="form-control" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label" for="first-name">Jurusan</label>
                                <input type="text" name="jurusan_id" value="{{ $data->nama_jurusan }}" class="form-control" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label" for="first-name">Kelas</label>
                                <input type="text" name="kelas_id" value="{{ $data->kelas_id }}" class="form-control" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label" for="first-name">Keterangan</label>
                                <textarea name="keterangan" class="form-control" placeholder="Keterangan Tugas" readonly>{{ $data->keterangan }}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label" for="first-name">Tanggal Upload</label>
                                <input type="datetime-local" name="tanggal_upload" value="{{ $data->tanggal_upload }}" class="form-control" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label" for="first-name">Tanggal Berakhir</label>
                                <input type="datetime" name="tanggal_selesai" value="{{ $data->tanggal_selesai }}" class="form-control" readonly>
                            </div>
                        </div>
                    </div>                
                <center>
                    <a href="{{route('upload_tugas.index')}}" class="btn btn-danger" style="margin-top: 2px" type="submit">Kembali</a>
                </center>
            </div>
        </div>
    </div>
</div>
@endsection