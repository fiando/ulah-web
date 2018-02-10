@extends('siswa/master')

@section('title','Tagihan Siswa')
@section('desc','Informasi Tagihan Siswa')

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-1">
        <div class="card">
          <div class="content">

        <ul class="list-group">
          @foreach ($tagihan as $key => $v)
            <li class="list-group-item">
              <b class="text-left">{{$v->nama_pembayaran}}</b>
              <b class="text-left">[ <i>{{date("d-m-Y", strtotime($v->tgl_tagihan))}}</i> ]</b>
              <br>
              Nominal : Rp{{number_format($v->nominal,0,0,'.')}}
              <form action="{{url('siswa/pembayaran_tagihan')}}" method="post">
                <button type="submit" name="bayar" class="btn btn-primary btn-fill btn-sm">Bayar</button>
                <input type="hidden" name="id_tagihan" value="{{$v->idpembayaran}}">
                {{ csrf_field() }}
              </form>
            </li>
          @endforeach
        </ul>
        <div class="form-group">
          <h4>Total Tagihan : <small>Rp{{number_format($total_transaksi,0,0,'.')}} ( {{$tagihan_count}} Tagihan )</small></h4>
          <button type="button" disabled class="btn btn-primary btn-block btn-fill disabled">BAYAR SEMUA</button>
        </div>
      </div>
    </div>
</div>
<div class="col-md-4">
  <div class="well">
    <div class="header">
      <h4 class="title">Filter</h4>
    </div>
    <div class="content">
      <form class="form-horizontal">
        <div class="form-group">
          <label class="col-sm-4 control-label">Tahun Ajaran</label>
          <div class="col-sm-8">
            <select class="form-control" name="tahun_ajaran">
              <option value="">Semua</option>
              <option value="">2017/2018</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-4 control-label">Jenis Pembayaran</label>
          <div class="col-sm-8">
            <select class="form-control" name="jenis_pembayaran">
              <option value="">Semua</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-4 col-sm-8">
            <button type="button" class="disabled btn btn-info btn-block btn-fill">Filter</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
@endsection
