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
                            <a href="{{route('divisi.index')}}" class="btn btn-secondary"><<< Kembali </a>
                        </div>
                        <div class="basic-form">
                            <form action="{{route('divisi.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-2">

                                    <div class="col">
                                        <label for="nama">Nama Divisi</label>
                                        <input type="text" name="nama" id="nama" class="form-control input-flat">
                                    </div>
                                    <div class="col">
                                      <label for="angkatan">deskripsi</label>
                                      <input type="text" name="angkatan" id="angkatan" class="form-control input-flat">
                                    </div>
                                </div>
                                {{-- <div class="row mt-4">

                                    <div class="form-group col w-25">
                                        <label for="jabatan">Jabatan</label>
                                        <select name="jabatan" id="jabatan" class="form-control">
                                          <option value="ketua">Ketua</option>
                                          <option value="wakil ketua">Wakil Ketua</option>
                                          <option value="anggota">Anggota</option>
                                        </select>
                                      </div>
                                   
                                    <div class="form-group col">
                                       <label for="foto">Foto</label>
                                        <input type="file" name="foto" id="foto" class="form-control-file">
                                       
                                    </div>
                                </div> --}}
                                
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


