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
                    <form action="{{url('siswa/pembayaran_tagihan')}}" method="post">
                      <input type="hidden" name="id_tagihan" value="{{$tagihan->idpembayaran}}">
                      <button type="submit" name="bayar" class="btn btn-primary btn-block">Lanjutkan</button>
                      {{ csrf_field() }}
                    </form>``
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
