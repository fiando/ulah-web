@extends('siswa/master')

@section('title','Periksa Tagihan Siswa')
@section('desc','Informasi Tagihan Siswa')

@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="card">
        <div class="content">
          <div class="form-group">
            <h4 class="text-left">Tagihan Tanggal <b><i>{{date("d-m-Y", strtotime($tagihan->tgl_tagihan))}}</i></b></h4>
            <h4 class="text-left">Pembayaran <b>{{$tagihan->nama_pembayaran}}</b></h4>
            <h4>Nominal : <b>Rp{{number_format($tagihan->nominal,0,0,'.')}}</b></h4>
            <h4>Metode Pembayaran : <b>{{($tagihan->method == 'trf') ? 'Transfer' : 'Credit Card'}}</b></h4>
            <h4>Status : <b>{{$status->text}}</b></h4>
            <a href="{{url('tagihan')}}" class="btn btn-primary btn-fill btn-block">Kembali</a>
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
