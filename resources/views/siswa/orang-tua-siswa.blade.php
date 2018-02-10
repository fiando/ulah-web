@extends('siswa/master')

@section('title','Identitas Orang Tua')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card">
          <div class="header text-center">
            <h4 class="title">Profil Orang Tua</h4>
            <p class="category">Identitas Orang Tua</p>
            <br>
          </div>
          <div class="content">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <dl class="dl-horizontal">
                  <dt>Email :</dt>
                  <dd>{{$orang_tua->email}}</dd>
                  <dt>Username ( KTP ) :</dt>
                  <dd>{{$orang_tua->username}}</dd>
                  <dt>Nama :</dt>
                  <dd>{{$orang_tua->nama}}</dd>
                  <dt>No. Telepon :</dt>
                  <dd>{{$orang_tua->no_telp}}</dd>
                  <dt>Alamat :</dt>
                  <dd>{{$orang_tua->alamat}}</dd>
                  <dt>Nama Bank :</dt>
                  <dd>{{$orang_tua->nama_bank}}</dd>
                  <dt>No. Rekening :</dt>
                  <dd>{{$orang_tua->no_rekening}}</dd>
                </dl>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
