@extends('admin/master')

@section('title')
    Data Acara
@endsection

@section('judul_laman')
    Data Acara
@endsection

@section('content')

<div class="card">
    <div class="card-header">
      <h4>Tambah Data Acara</h4> 
      <div class="card-header-action" id="headingTwo">
        <a data-collapse="#mycard-collapse" class="btn btn-icon btn-info" href="#"><i class="fas fa-plus"></i></a>
      </div>
    </div>
    <div class="collapse" id="mycard-collapse">
      <div class="card-body">
          <form action="/admin/tambahAcara" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="form-group row">
            <label for="judul_acara" class="col-sm-3 col-form-label">Judul Acara</label>
            <div class="col-sm-9">
              <input type="text" name="judul_acara" required="" class="form-control" id="judul_acara" placeholder="Masukan Judul Acara">
            </div>
          </div>

          <div class="form-group row">
            <label for="tanggal" class="col-sm-3 col-form-label">Tanggal</label>
            <div class="col-sm-9">
              <input type="date" name="tanggal" class="form-control" required="" id="tanggal" placeholder="Masukan Judul Tanggal">
            </div>
          </div>

          <div class="form-group row">
            <label for="kuota" class="col-sm-3 col-form-label">Kuota</label>
            <div class="col-sm-9">
              <input type="text" name="kuota" class="form-control" required="" id="kuota" placeholder="Masukan Kuota">
            </div>
          </div>

          <div class="form-group row">
            <label for="harga" class="col-sm-3 col-form-label">Harga</label>
            <div class="col-sm-9">
              <input type="text" name="harga" class="form-control" required="" id="harga" placeholder="Masukan Harga">
            </div>
          </div>

          <div class="form-group row">
            <label for="status" class="col-sm-3 col-form-label">Status</label>
            <div class="col-sm-9">
                <select class="custom-select" id="status" name="id_status">
                    @foreach ($data_status as $item)
                    <option value="{{ $item->id }}">{{ $item->nama_status }}</option>        
                    @endforeach
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="img" class="col-sm-3 col-form-label">Foto</label>
            <div class="col-sm-9">
                <input type="file"class="form-control" required="" name="img" id="img">
           
            </div>
          </div>

          

          <div class="form-group row">
            <label for="deskripsi_acara" class="col-sm-3 col-form-label">Deskripsi Acara</label>
            <div class="col-sm-9">
                <textarea id="deskripsi_acara" class="form-control" name="deskripsi_acara" rows="10" cols="50"></textarea>
            </div>
          </div>

          


      </div>
      <div class="card-footer text-right">
        <button class="btn btn-primary" type="submit" >Tambah</button>
      </div>
    </form>
    </div>
  </div>
  
  <div class="section-body">

    <div class="card">
            <div class="card-header">
                <h4>Data Acara</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col" width='10'>No</th>
                            <th scope="col">Foto</th>
                            <th scope="col">harga</th>
                            <th scope="col">judul_acara</th>
                            <th scope="col">deskripsi_acara</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">kuota</th>
                            <th scope="col">jumlah_daftar</th>
                            <th scope="col">status</th>
                            <th scope="col">aksi</th>

                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_acara as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <td><a href="{{ url("assets/home/img/courses/$item->img")}}" target="_blank" ><img src="{{ url("assets/home/img/courses/$item->img")}}" style="width:100px !important;margin-top:7px" alt=""></a> </td>
                                <td>{{ $item->harga }}</td>
                                <td>{{ $item->judul_acara }}</td>
                                <td>{{substr($item->deskripsi_acara,0,20) }} .... </td>
                                <td>{{ $item->tanggal }}</td>
                                <td>{{ $item->kuota }}</td>
                                <td>{{ $item->jumlah_daftar }}</td>
                                <td>
                                    
                                    <span class="badge badge-{{ $item->Ms_status_acara->class }}">{{ $item->Ms_status_acara->nama_status }}</span>
                                
                                </td>
                                <td>
                                    <a href="/admin/updateAcara/{{ $item->id }}" style="margin-top: 1000px !important"><button class="btn btn-warning btn-sm" ><i class="fas fa-edit"></i> Edit</button></a>
                                    <button class="mt-3 delete-confirm btn btn-danger btn-sm"  onclick=" confirmDelete({{ $item->id }})" ><i class="fas fa-trash-alt"></i> Hapus</button>
                                </td>


                              </tr>
                            @endforeach

                          
                        </tbody>
                      </table>
                    </div>
            </div>
            <div class="card-footer text-right">
                
            </div>
        </form>
    </div>
</div>

<div class="modal fade" id="modalSeach" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true" >

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h3> Conformation </h3>
            </div>                
            <div class="modal-body">
                <p>
                    Do you want to ?
                </p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger btn-xs" type="button" data-dismiss="modal">Close</button>
                <button class="btn btn-primary btn-xs" type="submit" name="permissions_submit" id="proceed" 
                autofocus="autofocus" >Proceed</button>
                <!--id="permissions_submit"-->
            </div>
        </div>
    </div>
</div>



<script src="{{url('assets/ckeditor/ckeditor.js')}}"></script>
<script>
  var konten = document.getElementById("deskripsi_acara");
    CKEDITOR.replace(konten,{
    language:'en-gb'
  });
  CKEDITOR.config.allowedContent = true;
</script>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

<script>
 function confirmDelete(item_id) {
            swal({
                title: "Apakah Anda Yakin?",
                text: "anda akan menghapus data acara ini!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location.href = ("/admin/hapusAcara/"+item_id);
                    } else {
                        swal("Hapus Dibatalkan");
                    }
                });
        }
</script>
@endsection