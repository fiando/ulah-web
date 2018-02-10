@extends('admin/master')

@section('title','Edit Jenis Pembayaran')
@section('desc','Mengedit Data Jenis Pembayaran')

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
          <h4 class="title">Edit Jenis Pembayaran
            <a href="{{url("admin/jenis-pembayaran")}}" class="btn btn-warning btn-fill btn-sm">Kembali</a>
          </h4>
        </div>
        <div class="content">
          <form action="{{url("admin/jenis-pembayaran/{$jenis_pembayaran->idjenis_pembayaran}")}}" method="post">
            {{ method_field('PUT') }}
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Jenis Pembayaran</label>
                  <input type="text" class="form-control" placeholder="Jenis Pembayaran" name="jenis_pembayaran" value="{{$jenis_pembayaran->nama_pembayaran}}">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Nominal</label>
                  <input type="text" class="form-control" placeholder="Nominal" name="nominal" value="{{$jenis_pembayaran->nominal}}">
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-info btn-fill pull-right">Update Jenis Pembayaran</button>
            <div class="clearfix"></div>
            {{ csrf_field() }}
          </form>
          <div class="clearfix"></div>
        </form>
      </div>
    </div>
  </div>
@endsection
