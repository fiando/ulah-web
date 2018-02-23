@extends('siswa/master')

@section('title','Identitas Orang Tua')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        @if (session('level') == 'siswa')
          @include('siswa/partials/profil-orang-tua')
        @else
          @include('siswa/partials/profil-siswa')
        @endif
      </div>
    </div>
  </div>
@endsection
