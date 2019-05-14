@extends('dosen.layout.myHome')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="konten" id="dashboard">
         <h1>Daftar Mahasiswa</h1>
        </div>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
    	<table class="table table-bordered">
            <tr>
                <th with="80px">No</th>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Angkatan</th>
                <th>Email</th>
                <th>Perkembangan</th>
            </tr>
            <?php $no=1; ?>
            @foreach ($mhs as $key=>$value)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$value->nim}}</td> 
                <td>{{$value->name}}</td>
                <td>{{$value->angkatan}}</td>
                <td>{{$value->email}}</td>
                <td></td>
                
            </tr>        
            @endforeach
        
        </table>
    </section>
@endsection 