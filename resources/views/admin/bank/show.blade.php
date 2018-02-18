@extends('admin/master')

@section('title','Detail Bank')
@section('desc','Melihat Detail Data Bank')

@section('content')


  <div class="card">
  <div class="content">
    <h5><p class="category">ID</p>{{$bank->kode}}</h5>
    <h5><p class="category">Nama</p>{{$bank->nama}}</h5>

    <form class="" action="{{url("admin/bank/{$bank->kode}")}}" method="post">
      <a class="btn btn-fill btn-info" href="{{url("admin/bank/{$bank->kode}")}}/edit">Edit</a>
      <button class="btn btn-fill btn-danger" type="submit" name="delete" onClick="return confirm('Anda yakin ingin menghapus ?')">Delete</button>
      {{ method_field('DELETE') }}
      {{ csrf_field() }}
    </form>
  </div>
  </div>
  </div>
@endsection
