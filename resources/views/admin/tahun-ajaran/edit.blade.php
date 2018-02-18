@extends('admin/master')

@section('title','Edit Tahun Ajaran')
@section('desc','Mengedit Data Tahun Ajaran')

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
          <h4 class="title">Edit Tahun Ajaran
            <a href="{{url("admin/tahun-ajaran")}}" class="btn btn-warning btn-fill btn-sm">Kembali</a>
          </h4>
        </div>
        <div class="content">
          <form action="{{url("admin/tahun-ajaran/{$tahun_ajaran->idtahun_pelajaran}")}}" method="post">
            {{ method_field('PUT') }}
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Tahun Ajaran</label>
                  <input type="text" class="form-control" placeholder="Tahun Ajaran" name="tahun_pelajaran" value="{{$tahun_ajaran->tahun_pelajaran}}">
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-info btn-fill pull-right">Update Tahun Ajaran</button>
            <div class="clearfix"></div>
            {{ csrf_field() }}
          </form>
          <div class="clearfix"></div>
        </form>
      </div>
    </div>
  </div>
@endsection
