<?php

namespace App\Http\Controllers;

use App\Models\Bph;
use App\Models\DivisiAgama;
use App\Models\galeriKegiatan;
use App\Models\lomba;
use App\Models\Magang;
use App\Models\Seminar;
use App\Models\Visi_Misi;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function about()
    {
        $data = [
            'data_visi_misi'=>Visi_Misi::all(),
            'data_bph' => Bph::all()
        ];
        return view('frontend.about', $data);
    }

   
    public function blog_seminar()
    {
        $data_seminar = Seminar::paginate(2);
        return view('frontend.seminar.index',compact('data_seminar') );
    }
    public function blog_magang()
    {
        $data = Magang::paginate(1);
        return view('frontend.magang.index',compact('data') );
    }
    public function readmoreSeminar($slug)
    {
        $data = Seminar::where('slug', $slug)->firstOrFail(); // Ambil artikel berdasarkan slug
        return view('frontend.seminar.detail', compact('data')); // Tampilkan halaman detail artikel
    }
    public function readmoreMagang($slug)
    {
        $data = Magang::where('slug', $slug)->firstOrFail(); // Ambil artikel berdasarkan slug
        return view('frontend.magang.detail', compact('data')); // Tampilkan halaman detail artikel
    }

    public function blog_lomba(){
        $data_lomba = lomba::paginate(2);
        return view('frontend.lomba.index',compact('data_lomba') );
    }

    public function readmoreLomba($slug)
    {
        $data = lomba::where('slug', $slug)->firstOrFail(); // Ambil artikel berdasarkan slug
        return view('frontend.lomba.detail', compact('data')); // Tampilkan halaman detail artikel
    }
    public function blog_galeri(){
        $data_galeri = galeriKegiatan::paginate(2);
        return view('frontend.galeri.index',compact('data_galeri') );
    }

    public function readmoreGaleri($slug)
    {
        $data = galeriKegiatan::where('slug', $slug)->firstOrFail(); // Ambil artikel berdasarkan slug
        return view('frontend.galeri.detail', compact('data')); // Tampilkan halaman detail artikel
    }

    public function divisiagama()
    {
        $divisi = DivisiAgama::all(); // Ganti dengan model Divisi yang sesuai
        return view('frontend.divisi.agama.index', compact('divisi'));
    }

    
}
