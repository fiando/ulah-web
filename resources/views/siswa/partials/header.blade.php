<nav class="navbar navbar-default navbar-fixed">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{url("/siswa")}}">Dashboard Siswa</a>
    </div>
    <div class="collapse navbar-collapse">

      <ul class="nav navbar-nav navbar-right">
        {{-- <li>
          <a href="">
            <p>Akun ( Nama Akun )</p>
          </a>
        </li> --}}
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <p>
              Menu Aplikasi
              <b class="caret"></b>
            </p>
          </a>
          <ul class="dropdown-menu">
            <li><a href="{{url("siswa/")}}">Menu Utama</a></li>
            <li><a href="{{url("siswa/tagihan")}}">Tagihan</a></li>
            <li><a href="{{url("siswa/pembayaran")}}">Pembayaran</a></li>
            <li><a href="{{url("siswa/orang-tua")}}">Profil Orang Tua</a></li>
            <li class="divider"></li>
            <li><a href="{{url("tentang-aplikasi")}}">Tentang Aplikasi</a></li>
          </ul>
        </li>
        <li>
          <a href="{{url("keluar")}}">
            <p>Log out</p>
          </a>
        </li>
        <li class="separator hidden-lg"></li>
      </ul>
    </div>
  </div>
</nav>
