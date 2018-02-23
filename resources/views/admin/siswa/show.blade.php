@extends('admin/master')

@section('title','Detail Siswa')
@section('desc','Melihat Detail Data Siswa')

@section('content')
  @if ($siswa->level == 'admin')
    <div class="col-md-6 col-md-offset-3">
    @else
      <div class="col-md-6">
  @endif
  <div class="card">
    <div class="header">
      <h4 class="title">Info Siswa</h4>
    </div>
  <div class="content">
    <h5><p class="category">ID</p>{{$siswa->idusers}}</h5>
    <h5><p class="category">Nama</p>{{$siswa->nama}}</h5>
    <h5><p class="category">Email</p>{{$siswa->email}}</h5>
    <h5><p class="category">Siswaname</p>{{$siswa->siswaname}}</h5>
    <h5><p class="category">No. Telp</p>{{$siswa->no_telp}}</h5>
    <h5><p class="category">Alamat</p>{{$siswa->alamat}}</h5>
    <h5><p class="category">Bank</p>{{$siswa->idbank}}</h5>
    <h5><p class="category">No. Rekening</p>{{$siswa->no_rekening}}</h5>
    <h5><p class="category">Level</p>{{siswa_level($siswa->level)}}</h5>
    <h5><p class="category">Status</p>{{siswa_status($siswa->status)}}</h5>

    <form class="" action="{{url("admin/siswa/{$siswa->idusers}")}}" method="post">
      <a class="btn btn-fill btn-info" href="{{url("admin/siswa/{$siswa->idusers}")}}/edit">Edit</a>
      <button class="btn btn-fill btn-danger" type="submit" name="delete" onClick="return confirm('Anda yakin ingin menghapus ?')">Delete</button>
      {{ method_field('DELETE') }}
      {{ csrf_field() }}
    </form>
  </div>
  </div>
</div>
@if ($siswa->level != 'admin')
  @include('admin.siswa.info-siswa',$siswa)
  @include('admin.siswa.info-ortu',$siswa)
@endif
@endsection
