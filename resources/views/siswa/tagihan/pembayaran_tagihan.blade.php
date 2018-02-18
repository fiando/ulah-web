@extends('siswa/master')

@section('title','Pembayaran Tagihan Siswa')
@section('desc','Pilih metode pembayaran untuk melakukan pembayaran')

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="card">
        <div class="content">
          <div class="form-group">
            <h4 class="text-left">Tagihan Tanggal <b><i>{{date("d-m-Y", strtotime($tagihan->tgl_tagihan))}}</i></b></h4>
            <h4 class="text-left">Pembayaran <b>{{$tagihan->nama_pembayaran}}</b></h4>
            <h4>Nominal : <b>Rp{{number_format($tagihan->nominal,0,0,'.')}}</b></h4>
            <hr>
            <h4>Metode Pembayaran</h4>
            <div class="row">
              <div class="col-md-12">
                <div class="thumbnail">
                  <img class="img-responsive" src="{{asset('img/finpay.jpg')}}" alt="...">
                  <div class="caption">
                    <form action="{{url('siswa/pembayaran_tagihan/finpaycc')}}" method="post">
                      <input type="hidden" name="id_tagihan" value="{{$tagihan->idpembayaran}}">
                      <input type="hidden" name="nama" value="{{$tagihan->nama}}">
                      <input type="hidden" name="nis" value="{{$tagihan->nis}}">
                      <input type="hidden" name="nomor" value="{{$tagihan->no_telp}}">
                      <input type="hidden" name="nama_pembayaran" value="{{$tagihan->nama_pembayaran}}">
                      <input type="hidden" name="nominal" value="{{$tagihan->nominal}}">
                      <input type="hidden" name="tgl_tagihan" value="{{$tagihan->tgl_tagihan}}">
                      <button type="submit" name="bayar" class="btn btn-primary btn-block">Lanjutkan</button>
                      {{ csrf_field() }}
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
