@extends('layout.layout_frontend2')
@section('content')
<style>
	.card {
    height: 570px; /* Tetapkan tinggi tetap untuk card */
    overflow: hidden; /* Potong konten yang melebihi tinggi card */
}
.card-img {
    max-width: 100%; /* Maksimum lebar gambar adalah lebar card */
    max-height: 400px; /* Maksimum tinggi gambar adalah 200px */
    object-fit:cover; /* Menyesuaikan gambar tanpa merubah aspek rasio */
}


</style>

   <!--================Hero Banner SM Area Start =================-->
  <section class="hero-banner-sm ">
    <div class="container">
      <div class="hero-banner-sm-content">
        <h1>Informasi Lomba</h1>
        <p>Kumpulan Informasi Terkait Lomba</p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
	<div class="container">

	  <div class="row">
		  @foreach ($data_lomba as $item)
		  @if ($item->status == 'publish')
		<div class="col-md-4">
		  <div class="card mb-4 shadow-sm">
			  <img class="card-img" loading="lazy" decoding="async" src="storage/lomba/{{ $item['foto'] }}" alt="Post Thumbnail">
			<div class="card-body">
			  <div class="card-title">
				  <strong><p>{{$item->judul}}</p></strong>
				  <p>{!!Substr($item['deskripsi'], 0,500)!!}...</p>
			  </div>
			  
			  <div class="d-flex justify-content-between align-items-center">
				<div class="btn-group">
				  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="{{route('readmoreLomba', $item->slug)  }}">Read more</a></button>
				  
				</div>
				<small class="text-muted">{{$item->created_at->format('d-m-y')}}</small>
			  </div>
			</div>
		  </div>
		</div>
		@endif
		@endforeach
		<div class="pagination justify-content-center mt-4">
		  {{ $data_lomba->links() }}
	  </div>
	  </div>
	</div>
  </div>
@endsection