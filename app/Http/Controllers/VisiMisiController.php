<?php

namespace App\Http\Controllers;

use App\Models\Visi_Misi;
use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = 'Data Visi-Misi';
        $breadcrumb = 'Visi-Misi';

        $query = Visi_Misi::query();

        // Lakukan pencarian jika query pencarian diberikan
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('visi', 'like', '%' . $search . '%')
            ->orWhere('misi', 'like', '%' . $search . '%');
        }

        $data_visimisi = $query->paginate(10);
        return view('dashboard.master.visi-misi.list', compact('data_visimisi', 'title', 'breadcrumb'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.master.visi-misi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'visi' => 'required',
            'misi' => 'required'
        ]);

        $data = [
            'visi' => $request->visi,
            'misi' => $request->misi
        ];

        Visi_Misi::create($data);

        return redirect()->route('visi-misi.index')->with('success', 'Data Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'title' => 'Edit Data',
            'data' => Visi_Misi::where('id', $id)->first()
        ];
        return view('dashboard.master.visi-misi.edit', $data)->with('data berhasil diubah');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'visi' => 'required',
            'misi' => 'required'
        ]);

        $data = [
            'visi' => $request->visi,
            'misi' => $request->misi
        ];

        Visi_Misi::where('id', $id)->update($data);

        return redirect()->route('visi-misi.index')->with('success', 'Data Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        //cari data berdasarkan id dan hapus
        Visi_Misi::where('id', $id)->delete();
        return redirect()->route('visi-misi.index')->with('success', 'Berhasil menghapus data');
    }
}
