@extends('admin/master')

@section('title','Tambah Bank')
@section('desc','Menambahkan Data Bank')

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
          <form class="" action="{{url("admin/bank")}}" method="post">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Kode Bank</label>
                <input type="text" class="form-control" placeholder="Kode Bank" name="kode" value="{{Request::input("kode")}}">
              </div>
              <div class="form-group">
                <label>Bank</label>
                <input type="text" class="form-control" placeholder="Bank" name="nama" value="{{Request::input("nama")}}">
              </div>
            </div>
          </div>
          <button type="submit" class="btn btn-success btn-fill pull-right">Tambah Bank</button>
          <div class="clearfix"></div>
          {{ csrf_field() }}
        </form>
      </div>
    </div>
  </div>
@endsection
