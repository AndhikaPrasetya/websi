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
                        <h3 class="card-title">Tambah Visi Misi</h3>
                        <div class="pb-3">
                            <a href="{{route('visi-misi.index')}}" class="btn btn-secondary"><<< Kembali </a>
                        </div>
                        <div class="basic-form">
                            <form action="{{route('visi-misi.store')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="visi">Visi</label>
                                    <textarea class="form-control h-100px summernote" name="visi" id="visi" required  ></textarea>
                                </div>
                                <div class="form-group">
                                  <label for="misi">Misi</label>
                                    <textarea class="form-control h-100px summernote"  name="misi" id="misi" required ></textarea>
                                </div>
                                <button class="btn btn-primary" name="simpan" type="submit">Simpan</button>
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


