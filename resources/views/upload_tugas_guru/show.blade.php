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
				<div class="pd-20 card-box mb-30">
					<div class="wizard-content">
							<section>
                                    <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label" style="font-size: 19px" for="first-name">File Tugas</label>
                                            {{-- <input type="text" name="dokumen_file[]" class="form-control" value="{{$uploadTugas->dokumen_file}}" readonly> --}}
                                            @foreach ($uploadTugas as $data)
                                            <img src="{{$data->dokumen_file}}"  >
                                            @endforeach
                                            

                                            {{-- @foreach ($uploadTugas as $data)
                                            {{ $data->dokumen_file}}
                                            @endforeach --}}
                                            {{-- @foreach ($files as $file)
                                            <a href="{{ asset('/file/' . $file->filename) }}">{{ $file->filename }}</a>
                                            @endforeach --}}
                                            {{-- <div class="input-group control-group increment ">
                                                <input type="file" name="dokumen_file[]" class="form-control">
                                                <div class="input-group-btn"> 
                                                <a class="btn btn-success" id="add"><i class="glyphicon glyphicon-plus"></i>Add</a>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" style="font-size: 19px" for="first-name">Angkatan</label>
                                    <input type="text" name="angkatan_id" class="form-control" value="{{$uploadTugas->angkatan_id}}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label" style="font-size: 19px" for="first-name">Jurasan</label>
                                    <input type="text" name="jurusan_id" class="form-control" value="{{$uploadTugas->jurusan_id}}" readonly>

                                </div>
                            </div>
                        </div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
                                            <label class="control-label" style="font-size: 19px" for="first-name">Kelas</label>
                                    <input type="text" name="kelas_id" class="form-control" value="{{$uploadTugas->kelas_id}}" readonly>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
                                            <label class="control-label" style="font-size: 19px" for="first-name">Keterangan</label>
                                            <textarea name="keterangan" class="form-control" placeholder="Keterangan Tugas"  cols="30" rows="4" readonly>{{$uploadTugas->keterangan}}</textarea>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
                                            <label class="control-label" style="font-size: 19px" for="first-name">Tanggal Upload</label>
                                            <input type="datetime-local" name="tanggal_upload" value="{{$uploadTugas->tanggal_upload}}" id="" class="form-control" readonly>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
                                            <label class="control-label" style="font-size: 19px" for="first-name">Tanggal Berakhir</label>
                                            <input type="datetime-local" name="tanggal_selesai" value="{{$uploadTugas->tanggal_selesai}}" id="" class="form-control" readonly>
										</div>
									</div>
								</div>
							</section>
                            <a href="{{route('upload_tugas.index')}}" class="btn btn-primary" style="margin-top: 2px" type="submit">Kembali</a>
						</form>
					</div>
				</div>
        </div>
    </div>
</div>


{{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
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
</script> --}}
@endsection