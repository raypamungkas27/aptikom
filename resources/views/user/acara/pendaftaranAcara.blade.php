@extends('admin/master')

@section('title')
    Pendaftaran Acara
@endsection

@section('judul_laman')
    Pendaftaran Acara {{ $data_acara->judul_acara }}
@endsection

@section('content')

<div class="row">



      <div class="col-12 col-md-4 col-lg-4">
        <div class="pricing pricing-highlight">
          <div class="pricing-title">
            Youtube Streaming
          </div>
          <div class="pricing-padding">
            <div class="row justify-content-center">
                <div class="col-4">
                    <div class="gallery gallery-md">
                        <div class="gallery-item align-self-center"  data-image="{{ asset('assets/admin/') }}/img/news/youtube.png" data-title="Image 1"></div>
                      </div>
                </div>
              </div>

            <div class="pricing-price">
                
              <div>GRATIS</div>
              <div>per orang</div>
            </div>
            <div class="pricing-details">
              <div class="pricing-item">
                <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                <div class="pricing-item-label">Link Youtube Streaming</div>
              </div>
              <div class="pricing-item">
                <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                <div class="pricing-item-label">Download Materi Acara</div>
              </div>

            </div>
            <form action="/admin/saveDaftarAcaraYoutube/{{ $data_acara->id }}" method="POST">
                @csrf
            <label class="custom-switch mt-2 mr-5">
                <input type="checkbox" name="sertifikat" class="custom-switch-input">
                <span class="custom-switch-indicator"></span>
                <span class="custom-switch-description"> + Sertifikat ({{ $data_acara->harga }})</span>
              </label>
          </div>
          <div class="pricing-cta">
              @if ($status_daftar_youtube > 0)
              <p class="btn btn-secondary mb-4">Terdaftar</p>
              @else
              <button type="submit" class="btn btn-primary mb-4">Daftar <i class="fas fa-arrow-right"></i></button>
              @endif
            
            </form>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-4 col-lg-4">
        <div class="pricing pricing-highlight">
          <div class="pricing-title">
            Zoom dan Sertifikat
          </div>
          <div class="pricing-padding">
            <div class="row justify-content-center">
                <div class="col-8 ml-4">
                    <div class="gallery gallery-md">
                        <div class="gallery-item align-self-center" data-image="{{ asset('assets/admin/') }}/img/news/zoom.png" data-title="Image 1"></div>
                        <div class="gallery-item align-self-center" data-image="{{ asset('assets/admin/') }}/img/news/sertifikat.png" data-title="Image 1"></div>
                      </div>
                </div>
              </div>
            <div class="pricing-price">
              <div>
                  @if (auth()->user()->kategori == 1)
                  {{ $data_acara->harga_zoom_umum }}
                  @else
                  {{ $data_acara->harga_zoom_aptikom }}    
                  @endif
              </div>
              <div>per orang</div>
            </div>
            <div class="pricing-details">
              <div class="pricing-item">
                <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                <div class="pricing-item-label">Link Zoom</div>
              </div>
              <div class="pricing-item">
                <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                <div class="pricing-item-label">Download Materi Acara</div>
              </div>
              <div class="pricing-item">
                <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
                <div class="pricing-item-label">Dapat Sertifikat</div>
              </div>
            </div>
          </div>
          @if ($status_daftar_zoom > 0)
          <p class="btn btn-secondary mb-4">Terdaftar</p>
          @else
          <a class="btn btn-primary mb-4" href="/admin/saveDaftarAcaraZoom/{{ $data_acara->id }}">Daftar <i class="fas fa-arrow-right"></i></a>
          @endif
        
            

        </div>
      </div>

</div>
    
@endsection