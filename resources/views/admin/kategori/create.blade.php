@extends('admin/master')

@section('title','Tambah Kategori Siswa')
@section('desc','Menambahkan Data Kategori Siswa')

@section('content')
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      @if ($message = Session::get('success'))
           <div class="alert alert-success">
               <p>{{ $message }}</p>
           </div>
       @endif
      <div class="card">
        <div class="content">
          <form class="" action="{{url("admin/kategori")}}" method="post">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Kategori Siswa</label>
                <input type="text" class="form-control" placeholder="Kategori Siswa" name="nama_kategori" value="{{Request::input("nama_kategori")}}">
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-success btn-fill pull-right">Tambah Kategori Siswa</button>
          <div class="clearfix"></div>
          {{ csrf_field() }}
        </form>
      </div>
    </div>
  </div>
@endsection
