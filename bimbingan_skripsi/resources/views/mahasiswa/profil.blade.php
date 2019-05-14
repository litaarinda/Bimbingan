@extends('mahasiswa.layout.myHome')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="konten" id="dashboard">
         <h1> Profil</h1>
        </div>
    </section>

    <!-- Main content -->
    <section class="content container-fluid" style="background-color:#F2F2F2;margin:15px;width:auto;">
        
        <form class="form-horizontal">
            <div class="form-group">
                    <label for="nama" class="col-md-2 control-label">Nama Lengkap</label>

                    <div class="col-md-6">
                        <input id="nama" type="text" class="form-control" name="nama" value="{{Auth::user()->name}}" autofocus readonly="readonly"style="background-color:#ffffff;"></div>
                    
            </div>
            <div class="form-group">
                    <label for="nim" class="col-md-2 control-label">Nim</label>

                    <div class="col-md-6">
                        <input id="nim" type="text" class="form-control" name="nim" value="{{Auth::user()->nim}}" autofocus readonly="readonly"style="background-color:#ffffff;"></div>
                    
        </div>
        <div class="form-group">
            <label for="angkatan" class="col-md-2 control-label">Angkatan</label>

            <div class="col-md-6">
                <input id="kp" type="text" class="form-control" name="angkatan" value="{{Auth::user()->angkatan}}" autofocus readonly="readonly"style="background-color:#ffffff;"></div>
            
    </div>
        <div class="form-group">
            <label for="email" class="col-md-2 control-label">Email</label>

                <div class="col-md-6">
                    <input id="kp" type="email" class="form-control" name="email" value="{{Auth::user()->email}}" autofocus readonly="readonly"style="background-color:#ffffff;"></div>
        
        </div>
       <!--  <div class="form-group">
            <label for="ps" class="col-md-2 control-label">Password</label>

            <div class="col-md-6">
                <input id="ps" type="password" class="form-control" name="password" value="{{Auth::user()->password}}" autofocus readonly="readonly"style="background-color:#ffffff;"></div>
            
        </div> -->
        <button class="btn btn-primary">Edit Profil</button>
    
        </form>
     

    </section>
@endsection

