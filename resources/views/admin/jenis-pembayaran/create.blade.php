@extends('admin/master')

@section('title','Tambah Jenis Pembayaran')
@section('desc','Menambahkan Data Jenis Pembayaran')

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
          <form class="" action="{{url("admin/jenis-pembayaran")}}" method="post">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Jenis Pembayaran</label>
                <input type="text" class="form-control" placeholder="Jenis Pembayaran" name="jenis_pembayaran" value="{{Request::input("jenis_pembayaran")}}">
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <label>Nominal</label>
                <input type="text" class="form-control" placeholder="Nominal" name="nominal" value="{{Request::input("nominal")}}">
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-success btn-fill pull-right">Tambah Jenis Pembayaran</button>
          <div class="clearfix"></div>
          {{ csrf_field() }}
        </form>
      </div>
    </div>
  </div>
@endsection
