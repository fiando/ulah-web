@extends('admin/master')

@section('title','Edit Kategori Siswa')
@section('desc','Mengedit Data Kategori Siswa')

@section('content')
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      @if ($message = Session::get('success'))
           <div class="alert alert-success">
               <p>{{ $message }}</p>
           </div>
       @endif
      <div class="card">
        <div class="header">
          <h4 class="title">Edit Kategori Siswa
            <a href="{{url("admin/kategori")}}" class="btn btn-warning btn-fill btn-sm">Kembali</a>
          </h4>
        </div>
        <div class="content">
          <form action="{{url("admin/kategori/{$kategori->idkategori}")}}" method="post">
            {{ method_field('PUT') }}
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Kategori Siswa</label>
                  <input type="text" class="form-control" placeholder="Kategori Siswa" name="nama_kategori" value="{{$kategori->nama_kategori}}">
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-info btn-fill pull-right">Update Kategori Siswa</button>
            <div class="clearfix"></div>
            {{ csrf_field() }}
          </form>
          <div class="clearfix"></div>
        </form>
      </div>
    </div>
  </div>
@endsection
