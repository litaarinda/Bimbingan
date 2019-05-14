@extends('mahasiswa.layout.myHome')
@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
            <form action="{{route('skripsi.store')}}" method="POST">
               @include('layout.form')
            </form>
            
    </div>
</div>
@endsection