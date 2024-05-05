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
                        <h3 class="card-title">Tambah Anggota</h3>
                        <div class="pb-3">
                            <a href="{{route('pendidikan.index')}}" class="btn btn-secondary"><<< Kembali </a>
                        </div>
                        <div class="basic-form">
                            <form action="{{route('pendidikan.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="row mb-2">

                                    <div class="col">
                                        <label for="nama">Nama</label>
                                        <input type="text" name="nama" id="nama" class="form-control input-flat" value="{{$data->nama}}" >
                                    </div>
                                    <div class="col">
                                      <label for="angkatan">Angkatan</label>
                                      <input type="text" name="angkatan" id="angkatan" class="form-control input-flat" value="{{$data->angkatan}}">
                                    </div>
                                </div>
                                <div class="row mt-4">

                                    <div class="form-group col">
                                        <label for="jabatan">Jabatan</label>
                                        <select name="jabatan" id="jabatan" class="form-control">
                                            <option value="ketua" {{ $data->jabatan == 'ketua' ? 'selected' : '' }}>Ketua</option>
                                            <option value="wakil ketua" {{ $data->jabatan == 'wakil ketua' ? 'selected' : '' }}>Wakil Ketua</option>
                                            <option value="anggota" {{ $data->jabatan == 'anggota' ? 'selected' : '' }}>Anggota</option>
                                        </select>
                                      </div>
                                   
                                    <div class="col">
                                        @if ($data->foto)
                                        <img src="{{asset('storage/divisi-pendidikan/' . $data->foto)}}" alt="Foto" style="max-width: 100px;" class="mb-2">
                                        @endif
                                        <input type="file" name="foto" id="foto" class="form-control-file" value="{{$data->foto}}">
                                       
                                    </div>
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


