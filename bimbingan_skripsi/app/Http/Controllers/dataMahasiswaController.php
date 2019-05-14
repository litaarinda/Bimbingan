<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;
use App\Dosen;
use Validator;

class dataMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mhs=Mahasiswa::all();
        return view('admin/datamhs',compact('mhs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dosen = Dosen::all();
        return view('admin/tbhdatamhs')->with(['dsn'=>$dosen]);
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
            'nim' => 'required|max:255',
            'name' => 'required|max:255',
            'angkatan' => 'required|max:255',
            'dosen' => 'required|max:255',
            'email' => 'required|email|max:255|unique:mahasiswas',
            'password' => 'required|min:6|confirmed',
            ]);
        // return Mahasiswa::create([
        //     'nim' => $request['nim'],
        //     'name' => $request['name'],
        //     'angkatan' => $request['angkatan'],
        //     'dosen' => $request['dosen_id'],
        //     'email' => $request['email'],
        //     'password' => bcrypt($request['password']),
        // ]);
        $mhs = new Mahasiswa();
        $mhs->nim=$request['nim'];
        $mhs->name=$request['name'];
        $mhs->angkatan=$request['angkatan'];
        $mhs->dosen_id=$request['dosen'];;
        $mhs->email=$request['email'];
        $mhs->password=bcrypt($request['password']);

        $mhs->save();
        return view('admin.dashboard');
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
        Mahasiswa::find($id)->delete();
       return redirect()->view('admin.datamhs')->with('Success','Post Delete success');
    }
    
}
