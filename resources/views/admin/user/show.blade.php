@extends('admin/master')

@section('title','Detail User')
@section('desc','Melihat Detail Data User')

@section('content')
  @if ($user->level == 'admin')
    <div class="col-md-6 col-md-offset-3">
    @else
      <div class="col-md-6">
  @endif
  <div class="card">
    <div class="header">
      <h4 class="title">Info User</h4>
    </div>
  <div class="content">
    <h5><p class="category">ID</p>{{$user->idusers}}</h5>
    <h5><p class="category">Nama</p>{{$user->nama}}</h5>
    <h5><p class="category">Email</p>{{$user->email}}</h5>
    <h5><p class="category">Username</p>{{$user->username}}</h5>
    <h5><p class="category">No. Telp</p>{{$user->no_telp}}</h5>
    <h5><p class="category">Alamat</p>{{$user->alamat}}</h5>
    <h5><p class="category">Bank</p>{{$user->idbank}}</h5>
    <h5><p class="category">No. Rekening</p>{{$user->no_rekening}}</h5>
    <h5><p class="category">Level</p>{{user_level($user->level)}}</h5>
    <h5><p class="category">Status</p>{{user_status($user->status)}}</h5>

    <form class="" action="{{url("admin/user/{$user->idusers}")}}" method="post">
      <a class="btn btn-fill btn-info" href="{{url("admin/user/{$user->idusers}")}}/edit">Edit</a>
      <button class="btn btn-fill btn-danger" type="submit" name="delete" onClick="return confirm('Anda yakin ingin menghapus ?')">Delete</button>
      {{ method_field('DELETE') }}
      {{ csrf_field() }}
    </form>
  </div>
  </div>
</div>
@if ($user->level != 'admin')
  @include('admin.user.info-siswa',$user)
  @include('admin.user.info-ortu',$user)
@endif
@endsection
