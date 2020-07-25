@extends('admin/master')

@section('title')
    Daftar Acara
@endsection

@section('judul_laman')
    Daftar Acara
@endsection

@section('content')

<div class="row">


    @foreach ($data_acara as $item)
        
    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
        <article class="article">
          <div class="article-header">
            <div class="article-image" data-background="{{ url("assets/home/img/courses/$item->img")}}">
            </div>
            <div class="article-title">
              <h2><a href="#">{{ $item->judul_acara }}</a></h2>
            </div>
          </div>
          <div class="article-details">
          <div class="article-category"><span class="badge badge-{{ $item->Ms_status_acara->class }} ">{{ $item->Ms_status_acara->nama_status }}</span>  <span class="badge badge-info" style="font-size:10px !important"> Tanggal : {{ $item->tanggal }}</span></div>
          {!! substr($item->deskripsi_acara,0,200) !!}....
            <div class="article-cta">
              <a href="/admin/pendaftaranAcara/{{ $item->id }}" class="btn btn-success">Daftar</a>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </article>
      </div>
      
    @endforeach

   
  </div>
    
@endsection