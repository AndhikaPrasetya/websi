{{-- @extends('layout.layout')
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
                        <h3 class="card-title">Tambah Project</h3>
                        
                        <div class="pb-3">
                            <a href="{{route('project.index')}}" class="btn btn-secondary"><<< Kembali </a>
                        </div>
                        <div class="basic-form">
                            <form action="{{route('project.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-2">

                                    <div class="col">
                                        <label for="judul">judul</label>
                                        <input type="text" name="judul" id="judul" class="form-control input-flat">
                                    </div>
                                    <div class="col">
                                        <label for="tanggal_kegiatan">Tanggal Kegiatan</label>
                                        <input type="date" name="tanggal_kegiatan" id="tanggal_kegiatan" class="form-control input-flat">
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                        <label for="divisi_type">Divisi type</label>
                                        <select class="form-control" id="divisi_type" name="divisi_type" required>
                                            <option value="">Pilih Divisi ID</option>
                                            <option value="DivisiOlahraga">Divisi Olahraga</option>
                                            <option value="divisi_agama">Divisi Agama</option>
                                            <option value="divisi_pendidikan">Divisi Pendidikan</option>
                                            <!-- Add more options for other divisions if needed -->
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col">
                                        <label for="deskripsi">Deskripsi</label>
                                        <textarea class="form-control h-100px summernote" name="deskripsi" id="deskripsi" required  ></textarea>
                                      </div>
                                   
                                      <div class="form-group col w-25">
                                        <label for="status">status</label>
                                        <select name="status" id="status" class="form-control">
                                          <option value="belum berjalan">Belum Berjalan</option>
                                          <option value="sedang berjalan">Sedang Berjalan</option>
                                          <option value="selesai">Selesai</option>
                                        </select>
                                      </div>
                                    
                                </div>
                                <div class="form-group mt-4">
                                    <label for="foto">Gambar</label>
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

 --}}
 @extends('layout.layout')
 @section('content')
 
 <div class="content-body">
     <div class="row page-titles mx-0">
         <div class="col p-md-0">
             <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                 <li class="breadcrumb-item active"><a href="javascript:void(0)">Tambah Project</a></li>
             </ol>
         </div>
     </div>
 
     <div class="container-fluid">
         <div class="row">
             <div class="col-lg-12">
                 <div class="card">
                     <div class="card-body">
                         <h3 class="card-title">Tambah Project</h3>
                         
                         <div class="pb-3">
                             <a href="{{ route('project.index') }}" class="btn btn-secondary"><<< Kembali</a>
                         </div>
 
                         <div class="basic-form">
                             <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
                                 @csrf
                                 <div class="form-group">
                                     <label for="judul">Judul</label>
                                     <input type="text" name="judul" id="judul" class="form-control input-flat" required>
                                 </div>
                                 <div class="form-group">
                                     <label for="deskripsi">Deskripsi</label>
                                     <textarea class="form-control summernote" name="deskripsi" id="deskripsi" required></textarea>
                                 </div>
                                 <div class="form-group">
                                    <label for="divisi">divisi</label>
                                    <select name="divisi" id="divisi" class="form-control" required>
                                        <option value="">Pilih Status</option>
                                        <option value="agama">agama</option>
                                        <option value="dana usaha">dana usaha</option>
                                        <option value="humas">humas</option>
                                        <option value="kesenian">kesenian</option>
                                        <option value="olahraga">olahraga</option>
                                        <option value="organisasi">organisasi</option>
                                        <option value="pendidikan">pendidikan</option>
                                        <option value="sarpras">sarpras</option>
                                        <option value="sosial">sosial</option>
                                    </select>
                                </div>
                                 <div class="form-group">
                                     <label for="tanggal_kegiatan">Tanggal Kegiatan</label>
                                     <input type="date" name="tanggal_kegiatan" id="tanggal_kegiatan" class="form-control input-flat" required>
                                 </div>
                                 <div class="form-group">
                                     <label for="status">Status</label>
                                     <select name="status" id="status" class="form-control" required>
                                         <option value="">Pilih Status</option>
                                         <option value="belum berjalan">Belum Berjalan</option>
                                         <option value="sedang berjalan">Sedang Berjalan</option>
                                         <option value="selesai">Selesai</option>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <label for="foto">Gambar</label>
                                     <input type="file" name="foto" id="foto" class="form-control-file" required>
                                 </div>
                                 <button class="btn btn-primary" type="submit">Simpan</button>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 
 @endsection
 