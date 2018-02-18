@extends('admin/master')

@section('title','Tambah Tagihan')
@section('desc','Menambahkan Data Tagihan')

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
          <form class="" action="{{url("admin/tagihan")}}" method="post">
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>NIS</label>
                <select class="form-control" name="nis">
                  @foreach ($nis as $key => $v)
                    <option value="{{$v->nis}}">{{$v->nama}} ( {{$v->nis}} )</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label>Tagihan</label>
                <input type="date" class="form-control" placeholder="Tagihan" name="tagihan" value="{{Request::input("tagihan")}}">
              </div>
              <div class="form-group">
                <label>Jenis Pembayaran</label>
                <select class="form-control" name="jenis_pembayaran">
                  @foreach ($jenis_pembayaran as $key => $v)
                    <option value="{{$v->idjenis_pembayaran}}">{{$v->nama_pembayaran}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label>Tahun Pelajaran</label>
                <select class="form-control" name="tahun_pelajaran">
                  @foreach ($tahun_pelajaran as $key => $v)
                    <option value="{{$v->idtahun_pelajaran}}">{{$v->tahun_pelajaran}}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
          <button type="button" class="disabled btn btn-success btn-fill pull-right">Tambah Tagihan</button>
          <div class="clearfix"></div>
          {{ csrf_field() }}
        </form>
      </div>
    </div>
  </div>
@endsection
