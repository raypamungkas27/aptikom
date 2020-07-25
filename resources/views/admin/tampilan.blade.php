@extends('admin/master')

@section('title')
Data Tampilan
@endsection

@section('judul_laman')
Data Tampilan
@endsection

@section('content')

<div class="section-body">

    <div class="card">
        <form action="/admin/updateTampilan" method="POST" enctype="multipart/form-data" >
            @csrf
            <div class="card-header">
                <h4>JavaScript Validation (Horizontal Form)</h4>
            </div>
            <div class="card-body">

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Title Browser</label>
                    <div class="col-sm-9">
                        <input type="text" name="title_browser" class="form-control @if($errors->has('title_browser')) is-invalid  @endif "    value="{{ $data_tampilan->title_browser }}">
                        @if ($errors->has('title_browser'))
                        <span class="text-danger">{{ $errors->first('title_browser') }}</span>
                         @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Img Title Browser</label>
                    <div class="col-sm-7">
                        <input type="file" name="img_title_browser" class="form-control  @if($errors->has('img_title_browser')) is-invalid  @endif "   value="{{ $data_tampilan->img_title_browser }}">
                        @if ($errors->has('img_title_browser'))
                        <span class="text-danger">{{ $errors->first('img_title_browser') }}</span>
                         @endif
                    </div>
                    <div class="col-sm-7">
                        <a href="{{ url("assets/home/img/$data_tampilan->img_title_browser") }}" target="_blank">Lihat Gambar</a>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Logo</label>
                    <div class="col-sm-9">
                        <input type="file" name="logo" class="form-control @if($errors->has('logo')) is-invalid  @endif"  value="{{ $data_tampilan->logo }}">
                        @if ($errors->has('logo'))
                        <span class="text-danger">{{ $errors->first('logo') }}</span>
                         @endif
                    </div>
                    <div class="col-sm-7">
                        <a href="{{ url("assets/home/img/$data_tampilan->logo") }}" target="_blank">Lihat Gambar</a>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Judul</label>
                    <div class="col-sm-9">
                        <input type="text" name="judul" class="form-control @if($errors->has('judul')) is-invalid  @endif" required="" value="{{ $data_tampilan->judul }}">
                        @if ($errors->has('judul'))
                        <span class="text-danger">{{ $errors->first('judul') }}</span>
                         @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Judul Acara</label>
                    <div class="col-sm-9">
                        <input type="text" name="judul_acara" class="form-control @if($errors->has('judul_acara')) is-invalid  @endif" required="" value="{{ $data_tampilan->judul_acara }}">
                        @if ($errors->has('judul_acara'))
                        <span class="text-danger">{{ $errors->first('judul_acara') }}</span>
                         @endif
                    </div>
                </div>

                
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Deskripsi Judul Acara</label>
                    <div class="col-sm-9">
                        <input type="text" name="deskripsi_judul_acara" class="form-control @if($errors->has('deskripsi_judul_acara')) is-invalid  @endif" required="" value="{{ $data_tampilan->deskripsi_judul_acara }}">
                        @if ($errors->has('deskripsi_judul_acara'))
                        <span class="text-danger">{{ $errors->first('deskripsi_judul_acara') }}</span>
                         @endif
                    </div>
                </div>

                
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Judul Login</label>
                    <div class="col-sm-9">
                        <input type="text" name="judul_login" class="form-control @if($errors->has('judul_login')) is-invalid  @endif" required="" value="{{ $data_tampilan->judul_login }}">
                        @if ($errors->has('judul_login'))
                        <span class="text-danger">{{ $errors->first('judul_login') }}</span>
                         @endif
                    </div>
                </div>

                
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Deskripsi Judul Login</label>
                    <div class="col-sm-9">
                        <input type="text" name="deskripsi_judul_login" class="form-control @if($errors->has('deskripsi_judul_login')) is-invalid  @endif" required="" value="{{ $data_tampilan->deskripsi_judul_login }}">
                        @if ($errors->has('deskripsi_judul_login'))
                        <span class="text-danger">{{ $errors->first('deskripsi_judul_login') }}</span>
                         @endif
                    </div>
                </div>

                
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Judul Testimoni</label>
                    <div class="col-sm-9">
                        <input type="text" name="judul_testimoni" class="form-control @if($errors->has('judul_testimoni')) is-invalid  @endif" required="" value="{{ $data_tampilan->judul_testimoni }}">
                        @if ($errors->has('judul_testimoni'))
                        <span class="text-danger">{{ $errors->first('judul_testimoni') }}</span>
                         @endif
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Deskripsi Judul Testimoni</label>
                    <div class="col-sm-9">
                        <input type="text" name="deskripsi_judul_testimoni" class="form-control @if($errors->has('deskripsi_judul_testimoni')) is-invalid  @endif" required=" " value="{{ $data_tampilan->deskripsi_judul_testimoni }}">
                        @if ($errors->has('deskripsi_judul_testimoni'))
                        <span class="text-danger">{{ $errors->first('deskripsi_judul_testimoni') }}</span>
                         @endif 
                    </div>
                </div>

                

            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-warning">Update</button>
            </div>
        </form>
    </div>
</div>

@endsection
