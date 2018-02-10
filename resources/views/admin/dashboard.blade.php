@extends('admin/master')

@section('title','Dashboard')
@section('desc','Manajemen Tagihan & Pembayaran Online')

@section('content')

  <div class="row">
    <div class="col-md-6">
      <div class="card">
        <div class="content">
          <h4 class="title">Tahun Ajaran : <small>{{$tahun_pelajaran->tahun_pelajaran}}</small></h4>
        </div>
      </div>
      <div class="card">
        <div class="header">
          <h4 class="title">Tagihan</h4>
        </div>
        <div class="content">
          @if ($tagihan_count > 0)
            <div class="alert alert-info">
              <span>Ada {{$tagihan_count}} Tagihan Siswa Belum Terbayar</span>
            </div>
          @endif
          <ul class="list-unstyled">
            @foreach ($tagihan as $key => $v)
              <li><b>{{$v->tgl_bayar}}</b> - NIS {{$v->nis}} - <i>{{$v->nama_pembayaran}}</i> - Rp{{number_format($v->nominal,0,'','.')}}<li>
            @endforeach
          </ul>
          <a href="{{url("admin/tagihan")}}" class="btn btn-primary btn-block">Periksa Semua Tagihan</a>
        </div>
      </div>
      <div class="card">
        <div class="header">
          <h4 class="title">Transaksi Pembayaran Terbaru</h4>
        </div>
        <div class="content">
          <ul class="list-unstyled">
            @foreach ($pembayaran as $key => $v)
              <li><b>{{$v->tgl_bayar}}</b> - NIS {{$v->nis}} - <i>{{$v->nama_pembayaran}}</i> - Rp{{number_format($v->nominal,0,'','.')}}<li>
            @endforeach
          </ul>
          <a href="{{url("admin/pembayaran")}}" class="btn btn-info btn-block">Periksa Semua Pembayaran</a>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card">
        <div class="header">
          <h4 class="title">Profil Sekolah</h4>
        </div>
        <div class="content">
          <dl class="dl-horizontal">
            <dt>ID Sekolah :</dt>
            <dd>{{$sekolah->ididentitas_sekolah}}</dd>
            <dt>Nama Sekolah :</dt>
            <dd>{{$sekolah->nama}}</dd>
            <dt>Status Sekolah :</dt>
            <dd>{{$sekolah->status}}</dd>
            <dt>Bentuk Pendidikan :</dt>
            <dd>{{$sekolah->bentuk_pendidikan}}</dd>
            <dt>Akreditasi :</dt>
            <dd>{{$sekolah->akreditasi}}</dd>
            <dt>Kurikulum :</dt>
            <dd>{{$sekolah->kurikulum}}</dd>
            <dt>Kepala Sekolah : </dt>
            <dd>{{$sekolah->kepala_sekolah}}</dd>
            <dt>Alamat :</dt>
            <dd>{{$sekolah->alamat}}</dd>
            <dt>Email :</dt>
            <dd>{{$sekolah->email}}</dd>
            <dt>No. Telepon : </dt>
            <dd>{{$sekolah->no_telp}}</dd>
            <dt>Rekening : </dt>
            <dd>{{$sekolah->rekening}} ( {{$sekolah->nama_bank}} )</dd>
            <dt>Website : </dt>
            <dd>{{$sekolah->website}}</dd>
          </dl>
          <a href="{{url("identitas-sekolah")}}" class="btn btn-default btn-block">Update Profil Sekolah</a>
        </div>
      </div>
    </div>
  </div>
@endsection
