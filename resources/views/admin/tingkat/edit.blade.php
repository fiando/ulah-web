@extends('admin/master')

@section('title','Edit Tingkat Siswa')
@section('desc','Mengedit Data Tingkat Siswa')

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
          <h4 class="title">Edit Tingkat Siswa
            <a href="{{url("admin/tingkat")}}" class="btn btn-warning btn-fill btn-sm">Kembali</a>
          </h4>
        </div>
        <div class="content">
          <form action="{{url("admin/tingkat/{$tingkat->idtingkat}")}}" method="post">
            {{ method_field('PUT') }}
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Tingkat Siswa</label>
                  <input type="text" class="form-control" placeholder="Tingkat Siswa" name="nama_tingkat" value="{{$tingkat->nama_tingkat}}">
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-info btn-fill pull-right">Update Tingkat Siswa</button>
            <div class="clearfix"></div>
            {{ csrf_field() }}
          </form>
          <div class="clearfix"></div>
        </form>
      </div>
    </div>
  </div>
@endsection
