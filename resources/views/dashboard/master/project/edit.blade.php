@extends('layout.layout')
@section('content')

<div class="content-body">

    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)"></a></li>
            </ol>
        </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Edit Project</h3>
                        <div class="pb-3">
                            <a href="{{route('project.index')}}" class="btn btn-secondary"><<< Kembali </a>
                        </div>
                        <div class="basic-form">
                            <form action="{{route('project.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="row mb-2">

                                    <div class="col">
                                        <label for="judul">judul</label>
                                        <input type="text" name="judul" id="judul" class="form-control input-flat" value="{{$data->judul}}" >
                                    </div>
                                    <div class="form-group">
                                        <label for="divisi">divisi</label>
                                        <select name="divisi" id="divisi" class="form-control" required>
                                            <option value="">Pilih Status</option>
                                            <option value="agama" {{ $data->divisi == 'agama' ? 'selected' : '' }}>agama</option>
                                            <option value="dana usaha"{{ $data->divisi == 'dana usaha' ? 'selected' : '' }}>dana usaha</option>
                                            <option value="humas" {{ $data->divisi == 'humas' ? 'selected' : '' }}>humas</option>
                                            <option value="kesenian" {{ $data->divisi == 'kesenian' ? 'selected' : '' }}>kesenian</option>
                                            <option value="olahraga"{{ $data->divisi == 'olahraga' ? 'selected' : '' }}>olahraga</option>
                                            <option value="organisasi"{{ $data->divisi == 'organisasi' ? 'selected' : '' }}>organisasi</option>
                                            <option value="pendidikan"{{ $data->divisi == 'pendidikan' ? 'selected' : '' }}>pendidikan</option>
                                            <option value="sarpras"{{ $data->divisi == 'sarpras' ? 'selected' : '' }}>sarpras</option>
                                            <option value="sosial"{{ $data->divisi == 'sosial' ? 'selected' : '' }}>sosial</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="tanggal_kegiatan">Tanggal Kegiatan</label>
                                        <input type="date" name="tanggal_kegiatan" id="tanggal_kegiatan" class="form-control input-flat" value="{{$data->tanggal_kegiatan}}">
                                    </div>
                                  
                                </div>
                                <div class="row mt-4">
                                    <div class="col">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea class="form-control h-100px summernote" name="deskripsi" id="deskripsi" required  >{{$data->deskripsi}}</textarea>
                                      </div>
                                    <div class="form-group col">
                                        <label for="status">Status</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value="belum berjalan" {{ $data->status == 'belum berjalan' ? 'selected' : '' }}>belum berjalan</option>
                                            <option value="sedang berjalan" {{ $data->status == 'sedang berjalan' ? 'selected' : '' }}>sedang berjalan</option>
                                            <option value="selesai" {{ $data->status == 'selesai' ? 'selected' : '' }}>selesai</option>
                                        </select>
                                      </div>
                                   
                                    </div>
                                    <div class="mt-4 mb-3">
                                        @if ($data->foto)
                                        <img src="{{asset('storage/project/' . $data->foto)}}" alt="Foto" style="max-width: 100px;" class="mb-2">
                                        @endif
                                        <input type="file" name="foto" id="foto" class="form-control-file" value="{{$data->foto}}">
                                       
                                    </div>
                                
                                <button class="btn btn-primary mt-2" name="simpan" type="submit">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>

@endsection


