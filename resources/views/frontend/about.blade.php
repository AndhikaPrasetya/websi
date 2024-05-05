@extends('layout.layout_frontend2')
@section('content')
<style>
<style>
    .swiper-slide {
        width: 300px; /* Atur lebar kartu */
    }

    .card {
        height: 100%; /* Kartu akan mengisi tinggi swiper-slide */
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .card-img {
        height: 200px; /* Atur tinggi gambar */
    }

    .card-body {
        padding: 10px; /* Atur jarak antara isi kartu */
    }

    /* Sesuaikan ukuran font jika diperlukan */
    .card-body h3 {
        font-size: 18px;
    }

    .card-body p {
        font-size: 14px;
    }

	.logo img{
		height: 100%;
	}
</style>




</style>
<section class="hero-banner-sm ">
    <div class="container">
      <div class="hero-banner-sm-content">
        <h1>About Us</h1>
        <p>Kumpulan Informasi Terkait Seminar</p>
      </div>
    </div>
  </section>

	
	<section id="about" class="about">
		<div class="container">
  
		  <div class="row">
			<div class="col-lg-6 logo">
			  <img src="/foto/himsisfo.png" class="img-fluid" alt="">
			</div>
			<div class="col-lg-6 pt-4 pt-lg-0 content">
			  <h3>Our Vision</h3>
			  <p class="fst-italic">
				{!! $data_visi_misi[0]->visi !!}
			  </p>
			  <h3>Our Mission</h3>
			  <p>
				{!! $data_visi_misi[0]->misi !!}
			  </p>
			</div>
		  </div>
  
		</div>
	  </section>





<section class="section teams bg-tertiary">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12">
				<div class="section-title text-center">
					<p class="text-primary text-uppercase fw-bold mb-3">List of</p>
					<h1>Our Team</h1>
					<p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing . egestas
						<br>cursus pellentesque dignissim dui, congue. Vel etiam ut</p>
						<h1 class="mt-5">Badan Pengurus Harian</h1>
				</div>
			</div>
		</div>
		
		
	
		<div class="swiper mySwiper ">
			<div class="swiper-wrapper">
				@foreach ($data_bph as $person)
					<div class="swiper-slide">
								<div class="card bg-transparent border-0 text-center">
									<div class="card-img">
										<img loading="lazy" decoding="async" src="storage/bph/{{ $person['foto'] }}" alt="{{ $person['nama'] }}">
										<ul class="card-social list-inline">
											<li class="list-inline-item"><a class="facebook" href="#"><i class="fab fa-facebook"></i></a></li>
											<li class="list-inline-item"><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
											<li class="list-inline-item"><a class="instagram" href="#"><i class="fab fa-instagram"></i></a></li>
										</ul>
									</div>
									<div class="card-body">
										<h3>{{ $person['nama'] }}</h3>
										<p>{{ $person['jabatan'] }}</p>
									</div>

						</div>
					</div>
				@endforeach
			</div>
			
		</div>
		
	</div>
</section>
    
<div class="container">
	<div class="row justify-content-center">
		<div class="icon-box-item  text-center col-lg-6 col-md-6 mb-4  py-5 px-4" style=" position: relative; ">
			<div class="img-div" style="width: 100%; position: relative;  height: 100%;">
				<img src="/foto/div_agama.png" alt="">
			</div>
			<div class="name-div" style="position: absolute; top:82%;bottom:0; right:0; left:0;">
				<h1>Divisi Agama</h1>
				<a class="btn btn-sm btn-outline-primary" href="{{route('divisi_agama')}}">View Details <i
						class="las la-arrow-right ms-1"></i></a>
			</div>

		</div>
		<div class="icon-box-item  text-center col-lg-6 col-md-6 mb-4  py-5 px-4" style=" position: relative; ">
			<div class="img-div" style="width: 100%; position: relative;  height: 100%;">
				<img src="/foto/div_agama.png" alt="">
			</div>
			<div class="name-div" style="position: absolute; top:82%;bottom:0; right:0; left:0;">
				<h1>Divisi Dana Usaha</h1>
				<a class="btn btn-sm btn-outline-primary" href="service-details.html">View Details <i
						class="las la-arrow-right ms-1"></i></a>
			</div>

		</div>
		<div class="icon-box-item  text-center col-lg-6 col-md-6 mb-4  py-5 px-4" style=" position: relative; ">
			<div class="img-div" style="width: 100%; position: relative;  height: 100%;">
				<img src="/foto/div_agama.png" alt="">
			</div>
			<div class="name-div" style="position: absolute; top:82%;bottom:0; right:0; left:0;">
				<h1>Divisi Humas</h1>
				<a class="btn btn-sm btn-outline-primary" href="service-details.html">View Details <i
						class="las la-arrow-right ms-1"></i></a>
			</div>

		</div>
		<div class="icon-box-item  text-center col-lg-6 col-md-6 mb-4  py-5 px-4" style=" position: relative; ">
			<div class="img-div" style="width: 100%; position: relative;  height: 100%;">
				<img src="/foto/div_agama.png" alt="">
			</div>
			<div class="name-div" style="position: absolute; top:82%;bottom:0; right:0; left:0;">
				<h1>Divisi Kesenian</h1>
				<a class="btn btn-sm btn-outline-primary" href="service-details.html">View Details <i
						class="las la-arrow-right ms-1"></i></a>
			</div>

		</div>
		<div class="icon-box-item  text-center col-lg-6 col-md-6 mb-4  py-5 px-4" style=" position: relative; ">
			<div class="img-div" style="width: 100%; position: relative;  height: 100%;">
				<img src="/foto/div_agama.png" alt="">
			</div>
			<div class="name-div" style="position: absolute; top:82%;bottom:0; right:0; left:0;">
				<h1>Divisi Olahraga</h1>
				<a class="btn btn-sm btn-outline-primary" href="service-details.html">View Details <i
						class="las la-arrow-right ms-1"></i></a>
			</div>

		</div>
		<div class="icon-box-item  text-center col-lg-6 col-md-6 mb-4  py-5 px-4" style=" position: relative; ">
			<div class="img-div" style="width: 100%; position: relative;  height: 100%;">
				<img src="/foto/div_agama.png" alt="">
			</div>
			<div class="name-div" style="position: absolute; top:82%;bottom:0; right:0; left:0;">
				<h1>Divisi Organisasi</h1>
				<a class="btn btn-sm btn-outline-primary" href="service-details.html">View Details <i
						class="las la-arrow-right ms-1"></i></a>
			</div>

		</div>
		<div class="icon-box-item  text-center col-lg-6 col-md-6 mb-4  py-5 px-4" style=" position: relative; ">
			<div class="img-div" style="width: 100%; position: relative;  height: 100%;">
				<img src="/foto/div_agama.png" alt="">
			</div>
			<div class="name-div" style="position: absolute; top:82%;bottom:0; right:0; left:0;">
				<h1>Divisi Pendidikan</h1>
				<a class="btn btn-sm btn-outline-primary" href="service-details.html">View Details <i
						class="las la-arrow-right ms-1"></i></a>
			</div>

		</div>
		<div class="icon-box-item  text-center col-lg-6 col-md-6 mb-4  py-5 px-4" style=" position: relative; ">
			<div class="img-div" style="width: 100%; position: relative;  height: 100%;">
				<img src="/foto/div_agama.png" alt="">
			</div>
			<div class="name-div" style="position: absolute; top:82%;bottom:0; right:0; left:0;">
				<h1>Divisi Sarana & Prasarana</h1>
				<a class="btn btn-sm btn-outline-primary" href="service-details.html">View Details <i
						class="las la-arrow-right ms-1"></i></a>
			</div>

		</div>
		<div class="icon-box-item  text-center col-lg-6 col-md-6 mb-4  py-5 px-4" style=" position: relative; ">
			<div class="img-div" style="width: 100%; position: relative;  height: 100%;">
				<img src="/foto/div_agama.png" alt="">
			</div>
			<div class="name-div" style="position: absolute; top:82%;bottom:0; right:0; left:0;">
				<h1>Divisi Sosial</h1>
				<a class="btn btn-sm btn-outline-primary" href="service-details.html">View Details <i
						class="las la-arrow-right ms-1"></i></a>
			</div>

		</div>



	</div>
</div>
@endsection

@section('script')
<script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 3,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script>
@endsection