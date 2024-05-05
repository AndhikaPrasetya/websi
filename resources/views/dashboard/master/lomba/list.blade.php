@extends('layout.layout')
@section('content')
    <div class="content-body">

        <div class="row page-titles mx-0">
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item">Divisi</li>
                    <li class="breadcrumb-item active"><a href="{{route('lomba.index')}}">{{ $breadcrumb }}</a></li>
                </ol>
            </div>
        </div>
        <!-- row -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{ $title }}</h4>
                            <div class="pb-3 d-flex justify-content-between">
                                <a href="{{ route('lomba.create') }}" class="btn mb-4 mt-2 btn-info">+ Tambah Data</a>
                                <div class="search">
                                    <form action="{{ route('lomba.index') }}" method="GET" class="d-flex">
                                        <input type="search" class="form-control mr-1" style="max-width:200px" name="search" placeholder="Search Data" aria-label="Search Data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </form>
                                </div>                                
                            </div>
                           
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                        <tr>
                                            <th class="col-1">No</th>
                                            <th>Judul</th>
                                            <th class="col-3">Deskripsi</th>
                                            <th class="col-1">Gambar</th>
                                            <th>Tanggal Upload</th>
                                            <th>Status</th>
                                            <th class=" col-2">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        @foreach ($data_lomba as $key => $item)
                                            <tr>
                                                <td>{{ $data_lomba->firstItem() + $key }}</td>
                                                <td>{!! $item->judul !!}</td>
                                                <td>{!!Substr($item['deskripsi'], 0,500)!!}...</td>
                                                <td><img src="{{ asset('storage/lomba/' . $item->foto) }}"
                                                    alt="Foto" style="max-width: 100px;">
                                                </td>
                                               
                                                <td>{{ $item->created_at->format('Y-m-d') }}</td>

                                                <td>{!! $item->status !!}</td>
                                                    <td>
                                                    <a href="{{ route('lomba.edit', $item->id) }}"
                                                        class="btn btn-sm btn-warning">Edit</a>
                                                        <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modalHapus{{$item->id}}">Hapus</button>
                                                </td>
                                            </tr>
                                            
                                            <div class="modal fade" id="modalHapus{{$item->id}}">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Hapus Data</h5>
                                                            <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">Apakah kamu yakin menghapus data  {{$item->nama}}? </div>
                                                        <div class="modal-footer">
                                                            <form action="{{ route('lomba.destroy', $item->id) }}"
                                                                class="d-inline" method="POST">
                                                                @csrf
                                                                @method('delete')
                                                                
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                                <button type="submit" class="btn btn-primary">Hapus</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        @endforeach
                                    </tbody>
                                </table>
                                <div>
                                    Showing 
                                    {{$data_lomba->firstItem()}}
                                    to
                                    {{$data_lomba->lastItem()}}
                                    of
                                    {{$data_lomba->total()}}
                                </div>

                                   <div class="pull-right">
                                    {{ $data_lomba->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>
@endsection
@section('script')
    @if (session('success'))
        <script>
            swal({
                title: "Sukses!",
                text: "{{ session('success') }}",
                icon: "success",
                button: "OK",
            });
        </script>
    @endif

@endsection
