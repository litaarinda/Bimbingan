<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dosen;

class dataDosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dosen=Dosen::all();
        return view('admin/dataDosen',compact('dosen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/tbhdataDosen');
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
            'nip' => 'required|max:255',
            'name' => 'required|max:255',
            'jabatan' => 'required|max:255',
            'email' => 'required|email|max:255|unique:mahasiswas',
            'password' => 'required|min:6|confirmed',
            ]);
        return Dosen::create([
            'nip' => $request['nip'],
            'name' => $request['name'],
            'jabatan' => $request['jabatan'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);
        return view('admin.dataDosen'); 
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
