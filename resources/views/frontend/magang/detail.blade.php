@extends('layout.layout_frontend2')
@section('content')
    <div class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="mb-5">
                        <h2 class="mb-4" style="line-height:1.5">{{$data->judul}}
                        </h2>
                        <span>{{$data->created_at->format('Y-m-d')}}<span class="mx-2">/</span> </span>
                        <p class="list-inline-item">Category : <a href="#!" class="ml-1">Photography </a>
                        </p>
                        <p class="list-inline-item">Tags : <a href="#!" class="ml-1">Photo </a> ,<a href="#!"
                                class="ml-1">Image </a>
                        </p>
                    </div>
                    <div class="mb-5 text-center">
                        <div class="post-slider rounded overflow-hidden">
                            <img src="{{ asset('storage/magang/' . $data->foto) }}"
                            alt="Foto">
                        </div>
                    </div>
                    <div class="content">
                        
                        <p>{!!$data->deskripsi!!}</p>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
