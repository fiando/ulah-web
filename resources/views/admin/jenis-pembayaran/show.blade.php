@extends('admin/master')

@section('title','Detail Jenis Pembayaran')
@section('desc','Melihat Detail Data Jenis Pembayaran')

@section('content')


  <div class="card">
  <div class="content">
    <h5><p class="category">ID</p>{{$jenis_pembayaran->idjenis_pembayaran}}</h5>
    <h5><p class="category">Jenis Pembayaran</p>{{$jenis_pembayaran->nama_pembayaran}}</h5>
    <h5><p class="category">Nominal</p>{{$jenis_pembayaran->nominal}}</h5>

    <form class="" action="{{url("admin/jenis-pembayaran/{$jenis_pembayaran->idjenis_pembayaran}")}}" method="post">
      <a class="btn btn-fill btn-info" href="{{url("admin/jenis-pembayaran/{$jenis_pembayaran->idjenis_pembayaran}")}}/edit">Edit</a>
      <button class="btn btn-fill btn-danger" type="submit" name="delete" onClick="return confirm('Anda yakin ingin menghapus ?')">Delete</button>
      {{ method_field('DELETE') }}
      {{ csrf_field() }}
    </form>
  </div>
  </div>
  </div>
@endsection
