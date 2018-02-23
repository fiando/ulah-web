@extends('siswa/master')

@section('title','Dashboard')
@section('desc','Cek Tagihan & Pembayaran Online')

@section('content')

  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="header">
          <h4 class="title">Tagihan</h4>
        </div>
        <div class="content">
          <p><b>Total : </b>Rp{{number_format($total_tagihan,0,0,'.')}} ( {{$tagihan_count}} Tagihan )</p>
          <ul class="list-group">
            @foreach ($tagihan as $key => $v)
              <li class="list-group-item">
                <div class="text-header">
                  <b class="text-left">{{$v->nama_pembayaran}}</b>
                  <b class="text-right pull-right">{{date("d-m-Y", strtotime($v->tgl_tagihan))}}</b>
                </div>
                Nominal : Rp{{number_format($v->nominal,0,0,'.')}}
              </li>
            @endforeach
          </ul>
          <a href="{{url("tagihan")}}" class="btn btn-primary btn-block">Periksa Semua Tagihan</a>
        </div>
      </div>
      <div class="card">
        <div class="header">
          <h4 class="title">Pembayaran</h4>
        </div>
        <div class="content">
          <h5><b>Total Transaksi</b></h5>
          <p>Rp{{number_format($total_transaksi,0,'','.')}}</p>
          <h5><b>Banyaknya Transaksi</b></h5>
          <p>{{$pembayaran_count}} Kali</p>
          <a href="{{url("pembayaran")}}" class="btn btn-primary btn-block">Lihat Semua Pembayaran</a>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      @if (session('level') == 'siswa')
        @include('siswa/partials/profil-siswa')
      @else
        @include('siswa/partials/profil-orang-tua')
      @endif
    </div>
  </div>
@endsection
