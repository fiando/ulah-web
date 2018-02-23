<div class="card">
  <div class="header">
    <h4 class="title">Profil Siswa
      @if (session('level') == 'orang_tua')
        <a href="{{url("pilih_siswa")}}" class="btn btn-primary btn-sm">Pilh Siswa</a>
      @endif
    </h4>
  </div>
  <div class="content">
    <dl class="dl-horizontal">
      <dt>Nama :</dt>
      <dd>{{$siswa->nama}}</dd>
      <dt>Alamat :</dt>
      <dd>{{$siswa->alamat}}</dd>
      <dt>No. Telp :</dt>
      <dd>{{$siswa->no_telp}}</dd>
      <dt>Email :</dt>
      <dd>{{$siswa->email}}</dd>
      <dt>Username :</dt>
      <dd>{{$siswa->username}}</dd>
      <dt>Nama Bank :</dt>
      <dd>{{$siswa->nama_bank}}</dd>
      <dt>No. Rekening :</dt>
      <dd>{{$siswa->no_rekening}}</dd>
    </dl>
    <form action="{{url("akses_pembayaran")}}" method="post">
      <div class="form-group">
        <input type="hidden" name="nis" value="{{session('nis')}}">
        {{ csrf_field() }}
        @if (isset($siswa->akses_pembayaran))
          @if ($siswa->akses_pembayaran)
            <input type="hidden" name="akses_bayar" value="0">
            <button type="submit" class="btn btn-warning btn-block btn-fill">Batalkan akses pembayaran</button>
          @else
            <input type="hidden" name="akses_bayar" value="1">
            <button type="submit" class="btn btn-primary btn-block btn-fill">Izinkan akses pembayaran</button>
          @endif
        @endif
      </div>
    </form>
    @if (session('level') == 'siswa')
      <a href="{{url("akun")}}" class="btn btn-primary btn-block">Update Profil</a>
    @endif
  </div>
</div>
