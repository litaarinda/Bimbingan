@extends('admin.layout.myHome')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="konten" id="dashboard">
         <h1>Tambah Data Dosen</h1>
        </div>
    </section>

    <!-- Main content -->
    <section class="content container-fluid"style="background-color:#DDDDDD;margin:15px;width:600px;">

            <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/tbhdataDosen') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('nip') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">NIP</label>
    
                    <div class="col-md-6">
                        <input id="nip" type="text" class="form-control" name="nip" value="{{ old('nip') }}" autofocus>
    
                        @if ($errors->has('nip'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nip') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Name</label>

                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('jabatan') ? ' has-error' : '' }}">
                    <label for="name" class="col-md-4 control-label">Jabatan</label>
    
                    <div class="col-md-6">
                        <input id="jabatan" type="text" class="form-control" name="jabatan" value="{{ old('jabatan') }}" autofocus>
    
                        @if ($errors->has('jabatan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('jabatan') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
    

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-4 control-label">Password</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password">

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            Register
                        </button>
                    </div>
                </div>
            </form>


    </section>
@endsection