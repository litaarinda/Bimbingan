@extends('mahasiswa.layout.myHome')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="konten" id="dashboard">
         <h1> Perkembangan Skripsi</h1>
        </div>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
        <div type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal" style="margin-bottom:10px;">Upload File Skripsi</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Upload File</h4>
      </div>
      <div class="modal-body">
        <form action="{{route('mahasiswa.skripsi.store')}}" method="POST">
            @include('mahasiswa.layout.form')
            {{ csrf_field() }}
        </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>

  </div>
</div>
        <table class="table table-bordered">
            <tr>
                <th with="80px">No</th>
                <th>Tanggal Bimbingan</th>
                <th>Dosen Pembimbing</th>
                <th>Progres</th>
                <th>File Skripsi</th>
            </tr>
            
            <tr>
                <td></td>
                <td></td> 
                <td></td>
                <td></td>
                <td></td>
            </tr> 
            
                   
            
        
        </table> 
        <button class="btn btn-primary">Tambah Prekembangan</button>
    </section>
@endsection

