<?php

namespace App\Http\Controllers;

use App\Models\Seminar;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class SeminarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $title = 'Data Informasi Seminar';
        $breadcrumb = 'Seminar';
    
        $query = Seminar::query();
    
        // Lakukan pencarian jika query pencarian diberikan
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('judul', 'like', '%' . $search . '%');
        }
    
        $data_seminar = $query->paginate(10);
        
        return view('dashboard.master.seminar.list',compact('data_seminar','title','breadcrumb'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.master.seminar.create');
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
            'judul' => 'required',
            'deskripsi' => 'required',
            'status' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif' // Validasi untuk foto
        ]);

        // Menyimpan foto
        $foto = $request->file('foto');
        $extension = $foto->getClientOriginalExtension();
        $file_name = date('Y-m-d') . '_' . $request->judul . '.' . $extension;
        $path ='seminar/'.$file_name;

        Storage::disk('public')->put($path,file_get_contents($foto));

        $data = [
            'slug' =>Str::slug($request->judul),
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'status' => $request->status,
            'foto' => $file_name// Menyimpan path foto dalam database
        ];

      Seminar::create($data);

        return redirect()->route('seminar.index')->with('success', 'Data Berhasil ditambahkan');
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
            'title'=>'Edit Data Informasi seminar',
            'data' =>Seminar::where('id',$id)->first()
        ];
        return view('dashboard.master.seminar.edit', $data)->with('data berhasil diubah');
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
        'judul' => 'required',
        'deskripsi' => 'required',
        'status' => 'required',
        'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Validasi untuk foto
    ]);

    // Menyimpan foto jika ada perubahan
    if ($request->hasFile('foto')) {
        $foto = $request->file('foto');
        $extension = $foto->getClientOriginalExtension();
        $file_name = date('Y-m-d') . '-' . $request->judul . '.' . $extension;
        $path ='seminar/'.$file_name;

        Storage::disk('public')->put($path,file_get_contents($foto));

        $data = [
            'slug' =>Str::slug($request->judul),
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'status' => $request->status,
            'foto' => $file_name // Menyimpan path foto dalam database
        ];
    } else {
        // Jika tidak ada perubahan pada foto, tetapkan foto yang ada
        $data = [
            'slug' =>Str::slug($request->judul),
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'status' => $request->status,
        ];
    }

    Seminar::where('id', $id)->update($data);

    return redirect()->route('seminar.index')->with('success','Data Berhasil diupdate');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $data = seminar::findOrFail($id);
    
        // Hapus foto dari penyimpanan jika ada
        if ($data->foto) {
            Storage::disk('public')->delete('seminar/' . $data->foto);
        }
    
        // Hapus data dari database
        $data->delete();
    
        return redirect()->route('seminar.index')->with('success','Berhasil menghapus data');

    }
    

}
