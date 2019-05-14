@extends('admin.layout.myHome')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="konten" id="dashboard">
         <h1> Data Dosen</h1>
        </div>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <table class="table table-bordered">
            <tr>
                <th with="80px">No</th>
                <th>NIP</th>
                <th>Nama Dosen</th>
                <th>Jabatan</th>
                <th>Email</th>
            </tr>
            <?php $no=1; ?>
            @foreach ($dosen as $key=>$value)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$value->nip}}</td> 
                <td>{{$value->name}}</td>
                <td>{{$value->jabatan}}</td>
                <td>{{$value->email}}</td>
                
            </tr>        
            @endforeach
        
        </table>

    </section>
@endsection