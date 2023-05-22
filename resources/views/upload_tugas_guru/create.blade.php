@extends('layouts.guru')
@section('content')

<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
				<div class="pd-20 card-box mb-30">
					<div class="wizard-content">
                        <form class="tab-wizard wizard-circle wizard" action="{{route('upload_tugas.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
							<section>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" style="font-size: 19px" for="first-name">File Tugas</label>
                                        <div class="input-group control-group increment ">
                                            <input type="file" name="dokumen_file[]" class="form-control  @error('dokumen_file') is-invalid @enderror">
                                            <div class="input-group-btn"> 
                                                <a class="btn btn-success" id="add"><i class="glyphicon glyphicon-plus"></i>Add</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="clone hide">
                                        <div class="control-group input-group"  style="margin-top:2px;">
                                            <input type="file" name="dokumen_file[]" class="form-control">
                                            <div class="input-group-btn"> 
                                            <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" style="font-size: 19px" for="first-name">Angkatan</label>
                                    <select name="angkatan_id" class="form-control @error('angkatan_id') is-invalid @enderror" id="angkatan_id">
                                        @foreach ($angkatans as $data)
                                            <option value="" hidden>pilih angkatan</option>
                                            <option value="{{$data->id}}">{{$data->angkatan}}</option>
                                        @endforeach
                                    </select>

                                    @error('angkatan_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" style="font-size: 19px" for="first-name">Jurasan</label>
                                    <select name="jurusan_id" class="form-control  @error('jurusan_id') is-invalid @enderror" id="jurusan_id">
                                        @foreach ($jurusans as $data)
                                            <option value="" hidden>pilih jurusan</option>
                                            <option value="{{$data->id}}">{{$data->nama}}</option>
                                        @endforeach
                                    </select>

                                    @error('jurusan_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
                                            <label class="control-label" style="font-size: 19px" for="first-name">Kelas</label>
                                            <select name="kelas_id" class="form-control @error('kelas_id') is-invalid @enderror" id="kelas_id">
                                                @foreach ($kelass as $data)
                                                    <option value="" hidden>pilih kelas</option>
                                                    <option value="{{$data->id}}">{{$data->nama_kelas}}</option>
                                                @endforeach
                                            </select>

                                            @error('kelas_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
                                            <label class="control-label" style="font-size: 19px" for="first-name">Keterangan</label>
                                            <textarea name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" placeholder="Keterangan Tugas"  cols="30" rows="4"></textarea>

                                            @error('keterangan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
                                            <label class="control-label" style="font-size: 19px" for="first-name">Tanggal Upload</label>
                                            <input type="datetime-local" name="tanggal_upload" id="" value="{{ old('tanggal_upload') }}" class="form-control  @error('tanggal_upload') is-invalid @enderror">

                                            @error('tanggal_upload')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
                                            <label class="control-label" style="font-size: 19px" for="first-name">Tanggal Berakhir</label>
                                            <input type="datetime-local" name="tanggal_selesai" id="" value="{{ old('tanggal_selesai') }}" class="form-control  @error('tanggal_selesai') is-invalid @enderror">

                                            @error('tanggal_selesai')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
										</div>
									</div>
								</div>
							</section>
                            <center><br>
                                <button class="btn btn-primary" type="submit">Simpan</button>
                                <a href="{{ route('upload_tugas.index') }}" class="btn btn-danger">Kembali</a>
                            </center>
						</form>
					</div>
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