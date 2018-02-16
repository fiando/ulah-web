<nav class="navbar navbar-default navbar-fixed">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{url("/admin")}}">Dashboard Admin</a>
    </div>
    <div class="collapse navbar-collapse">

      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="">
            {{-- <p>Akun ( Nama Akun )</p> --}}
          </a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <p>
              Menu Aplikasi
              <b class="caret"></b>
            </p>
          </a>
          <ul class="dropdown-menu">
            <li><a href="{{url("admin/")}}">Dashboard</a></li>
            <li><a href="{{url("admin/kategori")}}">Kategori</a></li>
            <li><a href="{{url("admin/tingkat")}}">Tingkat</a></li>
            <li><a href="{{url("admin/tahun-ajaran")}}">Tahun Ajaran</a></li>
            <li><a href="{{url("admin/jenis-pembayaran")}}">Jenis Pembayaran</a></li>
            <li class="divider"></li>
            <li><a href="{{url("admin/tagihan")}}">Tagihan</a></li>
            <li><a href="{{url("admin/pembayaran")}}">Pembayaran</a></li>
            <li class="divider"></li>
            <li><a href="{{url("tentang-aplikasi")}}">Tentang Aplikasi</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <p>
              Pengguna
              <b class="caret"></b>
            </p>
          </a>
          <ul class="dropdown-menu">
            <li><a href="{{url("admin/user")}}">Admin</a></li>
            <li><a href="{{url("admin/siswa")}}">Siswa</a></li>
            <li><a href="{{url("admin/orang-tua")}}">Orang Tua</a></li>
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
