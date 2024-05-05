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
                        <h3 class="card-title">Tambah Data Informasi Magang</h3>
                        <div class="pb-3">
                            <a href="{{route('magang.index')}}" class="btn btn-secondary"><<< Kembali </a>
                        </div>
                        <div class="basic-form">
                            <form action="{{route('magang.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-2">

                                    <div class="col">
                                        <label for="judul">Judul</label>
                                        <input type="text" name="judul" id="judul" class="form-control input-flat">
                                    </div>
                                    <div class="form-group col w-25">
                                        <label for="status">Status</label>
                                        <select name="status" id="status" class="form-control">
                                          <option value="publish">publish</option>
                                          <option value="unpublish">Unpublish</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea class="form-control h-100px summernote" name="deskripsi" id="deskripsi" required  ></textarea>
                                    </div>
                                   
                                    <div class="form-group col">
                                       <label for="foto">Foto</label>
                                        <input type="file" name="foto" id="foto" class="form-control-file">
                                       
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


