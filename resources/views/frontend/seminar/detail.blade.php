@extends('layout.layout_frontend2')
@section('content')
    <div class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="mb-5">
                        <h2 class="mb-4" style="line-height:1.5">{{$data->judul}}
                        </h2>
<h5>
                        <?php
                            // Ambil waktu sekarang
                            $current_time = time();
                            
                            // Waktu dari $data->created_at
                            $created_at = strtotime($data->created_at);
                            
                            // Hitung selisih waktu dalam menit
                            $time_diff = floor(($current_time - $created_at) / 60);
                            
                            // Tampilkan waktu dalam format yang diinginkan
                            if ($time_diff < 60) {
                                echo "<small class='text-muted'>$time_diff minutes ago</small>";
                            } elseif ($time_diff < 1440) {
                                $hours = floor($time_diff / 60);
                                echo "<small class='text-muted'>$hours hours ago</small>";
                            } else {
                                $days = floor($time_diff / 1440);
                                echo "<small class='text-muted'>$days days ago</small>";
                            }
                            ?></h5>
                        
                        
                    </div>
                    <div class="mb-5 text-center">
                        <div class="post-slider rounded overflow-hidden">
                            <img src="{{ asset('storage/seminar/' . $data->foto) }}"
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
