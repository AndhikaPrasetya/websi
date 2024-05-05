@extends('layout.layout_frontend2')
@section('content')

<div class="row position-relative">
    @foreach ($divisi as $item)
   
    
        <div class="col-xl-3 col-lg-4 col-md-6 mt-4">
            <div class="card bg-transparent border-0 text-center">
                <div class="card-img">
                    <img loading="lazy" decoding="async" src="storage/divisi-agama/{{ $item['foto'] }}" alt="{{ $item['nama'] }}" class="rounded w-100" width="300" height="332">
                    <ul class="card-social list-inline">
                        <li class="list-inline-item"><a class="facebook" href="#"><i class="fab fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a class="instagram" href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="card-body">
                    <h3>{{ $item['nama'] }}</h3>
                    <p>{{ $item['jabatan'] }}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
    {{-- <div class="swiper-wrapper">
      <div class="swiper-slide">Slide 1</div>
    </div>
    <div class="swiper-pagination"></div> --}}

  
@endsection
   