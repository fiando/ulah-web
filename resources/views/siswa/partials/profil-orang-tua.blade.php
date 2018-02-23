<div class="card">
  <div class="header">
    <h4 class="title">Profil Orang Tua</h4>
  </div>
  <div class="content">
    <dl class="dl-horizontal">
      <dt>Nama :</dt>
      <dd>{{$orang_tua->nama}}</dd>
      <dt>Alamat :</dt>
      <dd>{{$orang_tua->alamat}}</dd>
      <dt>No. Telp :</dt>
      <dd>{{$orang_tua->no_telp}}</dd>
      <dt>Email :</dt>
      <dd>{{$orang_tua->email}}</dd>
      <dt>Username :</dt>
      <dd>{{$orang_tua->username}}</dd>
      <dt>Nama Bank :</dt>
      <dd>{{$orang_tua->nama_bank}}</dd>
      <dt>No. Rekening :</dt>
      <dd>{{$orang_tua->no_rekening}}</dd>
    </dl>
    @if (session('level') == 'orang_tua')
      <a href="{{url("akun")}}" class="btn btn-primary btn-block">Update Profil</a>
    @endif
  </div>
</div>
