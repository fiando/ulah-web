@extends('admin/master')

@section('title','Detail Tahun Ajaran')
@section('desc','Melihat Detail Data Tahun Ajaran')

@section('content')


  <div class="card">
  <div class="content">
    <h5><p class="category">ID</p>{{$tahun_ajaran->idtahun_pelajaran}}</h5>
    <h5><p class="category">Tahun Ajaran</p>{{$tahun_ajaran->tahun_pelajaran}}</h5>

    <form class="" action="{{url("admin/tahun-ajaran/{$tahun_ajaran->idtahun_pelajaran}")}}" method="post">
      <a class="btn btn-fill btn-info" href="{{url("admin/tahun-ajaran/{$tahun_ajaran->idtahun_pelajaran}")}}/edit">Edit</a>
      <button class="btn btn-fill btn-danger" type="submit" name="delete" onClick="return confirm('Anda yakin ingin menghapus ?')">Delete</button>
      {{ method_field('DELETE') }}
      {{ csrf_field() }}
    </form>
  </div>
  </div>
  </div>
@endsection
