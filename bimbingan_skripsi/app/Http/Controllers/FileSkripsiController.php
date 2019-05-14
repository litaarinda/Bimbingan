<?php
use App\Skripsi;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class FileSkripsiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skripsi=Skripsi::all();
        return view('mahasiswa.perkembangan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $skripsi=Skripsi::all();
        return view('mahasiswa.skripsi.uploadfile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'judul_skripsi'=>'required',
            'file_skripsi'=>'required|mimes:pdf'
 
         ]);
 
         $book = $request->file('file_skripsi');
         $book_ext = $request->file('file_skripsi')->getClientOriginalExtension();
         $book_name = $request['judul_skripsi'].'.'.$book_ext;
 
         $skripsi = new Skripsi();
         $skripsi->judul_skripsi=$request['judul_skripsi'];
         $skripsi->file_skripsi=$book_name;
 
         $skripsi->save();
         Storage::disk('skripsi')->put($book_name, file($book));
 
         return redirect()->back();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
