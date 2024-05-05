<?php

namespace App\Http\Controllers;

use App\Models\DivisiAgama;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DivisiAgamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = 'Data Divisi Agama';
        $breadcrumb = 'agama';
    
        $query = DivisiAgama::query();
    
        // Lakukan pencarian jika query pencarian diberikan
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('nama', 'like', '%' . $search . '%');
        }

       
    
    
        $data_agama = $query->paginate(10);
        return view('dashboard.master.divisi.agama.list',compact('data_agama','title','breadcrumb'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.master.divisi.agama.create');
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
            'nama' => 'required',
            'angkatan' => 'required',
            'jabatan' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif' // Validasi untuk foto
        ]);

        // Menyimpan foto
        $foto = $request->file('foto');
        $extension = $foto->getClientOriginalExtension();
        $file_name = date('Y-m-d') . '_' . $request->nama . '.' . $extension;
        $path ='divisi-agama/'.$file_name;

        Storage::disk('public')->put($path,file_get_contents($foto));

        $data = [
            'nama' => $request->nama,
            'angkatan' => $request->angkatan,
            'jabatan' => $request->jabatan,
            'foto' => $file_name// Menyimpan path foto dalam database
        ];

      DivisiAgama::create($data);

        return redirect()->route('agama.index')->with('success', 'Data Berhasil ditambahkan');
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
            'title'=>'Edit Data Divisi Agama',
            'data' =>DivisiAgama::where('id',$id)->first()
        ];
        return view('dashboard.master.divisi.agama.edit', $data)->with('data berhasil diubah');
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
        'nama' => 'required',
        'angkatan' => 'required',
        'jabatan' => 'required',
        'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Validasi untuk foto
    ]);

    // Menyimpan foto jika ada perubahan
    if ($request->hasFile('foto')) {
        $foto = $request->file('foto');
        $extension = $foto->getClientOriginalExtension();
        $file_name = date('Y-m-d') . '_' . $request->nama . '.' . $extension;
        $path ='divisi-agama/'.$file_name;

        Storage::disk('public')->put($path,file_get_contents($foto));

        $data = [
            'nama' => $request->nama,
            'angkatan' => $request->angkatan,
            'jabatan' => $request->jabatan,
            'foto' => $file_name // Menyimpan path foto dalam database
        ];
    } else {
        // Jika tidak ada perubahan pada foto, tetapkan foto yang ada
        $data = [
            'nama' => $request->nama,
            'angkatan' => $request->angkatan,
            'jabatan' => $request->jabatan,
        ];
    }

    DivisiAgama::where('id', $id)->update($data);

    return redirect()->route('agama.index')->with('success','Data Berhasil diupdate');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $data = DivisiAgama::findOrFail($id);
    
        // Hapus foto dari penyimpanan jika ada
        if ($data->foto) {
            Storage::disk('public')->delete('divisi-agama/' . $data->foto);
        }
    
        // Hapus data dari database
        $data->delete();
    
        return redirect()->route('agama.index')->with('success','Berhasil menghapus data');

    }
  

}
