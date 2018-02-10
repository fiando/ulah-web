@extends('admin/master')

@section('title','Detail Kategori Siswa')
@section('desc','Melihat Detail Data Kategori Siswa')

@section('content')


  <div class="card">
  <div class="content">
    <h5><p class="category">ID</p>{{$kategori->idkategori}}</h5>
    <h5><p class="category">Nama</p>{{$kategori->nama_kategori}}</h5>

    <form class="" action="{{url("admin/kategori/{$kategori->idkategori}")}}" method="post">
      <a class="btn btn-fill btn-info" href="{{url("admin/kategori/{$kategori->idkategori}")}}/edit">Edit</a>
      <button class="btn btn-fill btn-danger" type="submit" name="delete" onClick="return confirm('Anda yakin ingin menghapus ?')">Delete</button>
      {{ method_field('DELETE') }}
      {{ csrf_field() }}
    </form>
  </div>
  </div>
  </div>
@endsection
