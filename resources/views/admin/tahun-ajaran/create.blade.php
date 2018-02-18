@extends('admin/master')

@section('title','Tambah Tahun Ajaran')
@section('desc','Menambahkan Data Tahun Ajaran')

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
          <form class="" action="{{url("admin/tahun-ajaran")}}" method="post">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Tahun Ajaran</label>
                <input type="text" class="form-control" placeholder="Tahun Ajaran" name="tahun_pelajaran" value="{{Request::input("tahun_pelajaran")}}">
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-success btn-fill pull-right">Tambah Tahun Ajaran</button>
          <div class="clearfix"></div>
          {{ csrf_field() }}
        </form>
      </div>
    </div>
  </div>
@endsection
