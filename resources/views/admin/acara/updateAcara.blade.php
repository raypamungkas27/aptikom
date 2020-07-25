@extends('admin/master')

@section('title')
    Edit Data Acara
@endsection

@section('judul_laman')
    Edit Data Acara
@endsection

@section('content')

<div class="card">
    <div class="card-header">
      <h4>Edit Data Acara</h4>
    </div>
    <div class="card-body">

        <form action="/admin/saveUpdate/{{ $data_acara->id  }}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="form-group row">
            <label for="judul_acara" class="col-sm-3 col-form-label">Judul Acara</label>
            <div class="col-sm-9">
              <input type="text" name="judul_acara" required="" class="form-control" id="judul_acara" placeholder="Masukan Judul Acara" value="{{ $data_acara->judul_acara  }}" >
            </div>
          </div>

          <div class="form-group row">
            <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
            <div class="col-sm-9">
              <input type="date" name="tanggal" class="form-control" required="" id="tanggal" placeholder="Masukan Judul Tanggal" value="{{ $data_acara->tanggal  }}">
            </div>
          </div>

          <div class="form-group row">
            <label for="kuota" class="col-sm-3 col-form-label">Kuota</label>
            <div class="col-sm-9">
              <input type="text" name="kuota" class="form-control" required="" id="kuota" placeholder="Masukan Kuota" value="{{ $data_acara->kuota  }}" >
            </div>
          </div>

          <div class="form-group row">
            <label for="harga" class="col-sm-3 col-form-label">Harga</label>
            <div class="col-sm-9">
              <input type="text" name="harga" class="form-control" required="" id="harga" placeholder="Masukan Harga" value="{{ $data_acara->harga  }}" >
            </div>
          </div>

          <div class="form-group row">
            <label for="status" class="col-sm-3 col-form-label">Status</label>
            <div class="col-sm-9">
                <select class="custom-select" id="status" name="id_status">
                    @foreach ($data_status as $item)
                    <option value="{{ $item->id }}" @if($item->id == $data_acara->id_status ) selected  @endif  >{{ $item->nama_status }}</option>        
                    @endforeach
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="img" class="col-sm-3 col-form-label">Foto</label>
            <div class="col-sm-9">
                <input type="file"class="form-control" name="img" id="img">
                <a href="{{ url("assets/home/img/courses/$data_acara->img")}}" target="_blank"><i class="fas fa-eye"></i> Lihat Gambar</a>
            </div>
            
          </div>

          

          <div class="form-group row">
            <label for="deskripsi_acara" class="col-sm-3 col-form-label">Deskripsi Acara</label>
            <div class="col-sm-9">
                <textarea id="deskripsi_acara" class="form-control" name="deskripsi_acara" rows="10" cols="50">{{ $data_acara->deskripsi_acara  }}</textarea>
            </div>
          </div>
 


    </div>
    <div class="card-footer text-right">
       <a href="/admin/acara" class="btn btn-warning">Kembali</a>
      <button class="btn btn-primary" type="submit">Update</button>
    </div>
</form>
  </div>
    

  <script src="{{url('assets/ckeditor/ckeditor.js')}}"></script>
<script>
  var konten = document.getElementById("deskripsi_acara");
    CKEDITOR.replace(konten,{
    language:'en-gb'
  });
  CKEDITOR.config.allowedContent = true;
</script>
@endsection