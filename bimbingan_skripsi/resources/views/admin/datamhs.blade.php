@extends('admin.layout.myHome')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="konten" id="dashboard">
         <h1> Data Mahasiswa</h1>
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
                <th>Dosen Pembimbing</th>
                <th>Tindakan</th>
            </tr>
            <?php $no=1; ?>
            @foreach ($mhs as $key=>$value)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$value->nim}}</td> 
                <td>{{$value->name}}</td>
                <td>{{$value->angkatan}}</td>
                <td>{{$value->email}}</td>
                <td>{{$value->dosen->name}}</td>
                <td>
                   <button type="submit" style="display:inline;" class="btn btn-danger btn-sm" method="DELETE" action="{{url('/admin/datamhs',$value->id)}}" style="display">
                    <i class="glyphicon glyphicon-trash"></i>
            </button>
                </td>
                
            </tr>        
            @endforeach
        
        </table>

    </section>
@endsection