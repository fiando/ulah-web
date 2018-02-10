@extends('admin/master')

@section('title','Tambah Tingkat Siswa')
@section('desc','Menambahkan Data Tingkat Siswa')

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
          <form class="" action="{{url("admin/tingkat")}}" method="post">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Tingkat Siswa</label>
                <input type="text" class="form-control" placeholder="Tingkat Siswa" name="nama_tingkat" value="{{Request::input("nama_tingkat")}}">
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-success btn-fill pull-right">Tambah Tingkat Siswa</button>
          <div class="clearfix"></div>
          {{ csrf_field() }}
        </form>
      </div>
    </div>
  </div>
@endsection
