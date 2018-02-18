@extends('admin/master')

@section('title','Edit Bank')
@section('desc','Mengedit Data Bank')

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
          <h4 class="title">Edit Bank
            <a href="{{url("admin/bank")}}" class="btn btn-warning btn-fill btn-sm">Kembali</a>
          </h4>
        </div>
        <div class="content">
          <form action="{{url("admin/bank/{$bank->kode}")}}" method="post">
            {{ method_field('PUT') }}
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Kode Bank</label>
                  <input type="text" class="form-control" placeholder="Kode Bank" name="kode" value="{{$bank->kode}}">
                </div>
                <div class="form-group">
                  <label>Bank</label>
                  <input type="text" class="form-control" placeholder="Bank" name="nama" value="{{$bank->nama}}">
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-info btn-fill pull-right">Update Bank</button>
            <div class="clearfix"></div>
            {{ csrf_field() }}
          </form>
          <div class="clearfix"></div>
        </form>
      </div>
    </div>
  </div>
@endsection
