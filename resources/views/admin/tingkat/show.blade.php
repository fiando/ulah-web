@extends('admin/master')

@section('title','Detail Tingkat Siswa')
@section('desc','Melihat Detail Data Tingkat Siswa')

@section('content')


  <div class="card">
  <div class="content">
    <h5><p class="category">ID</p>{{$tingkat->idtingkat}}</h5>
    <h5><p class="category">Nama</p>{{$tingkat->nama_tingkat}}</h5>

    <form class="" action="{{url("admin/tingkat/{$tingkat->idtingkat}")}}" method="post">
      <a class="btn btn-fill btn-info" href="{{url("admin/tingkat/{$tingkat->idtingkat}")}}/edit">Edit</a>
      <button class="btn btn-fill btn-danger" type="submit" name="delete" onClick="return confirm('Anda yakin ingin menghapus ?')">Delete</button>
      {{ method_field('DELETE') }}
      {{ csrf_field() }}
    </form>
  </div>
  </div>
  </div>
@endsection
