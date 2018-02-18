<div class="sidebar" data-color="azure" data-image="{{asset('img/sidebar-5.jpg')}}">

<div class="sidebar-wrapper">
  <div class="logo">
    <a href="{{url("")}}" class="simple-text">
      ULah <br>
      <small><small>Pembayaran Uang Sekolah</small></small>
    </a>
  </div>
  <ul class="nav">
    <li class="{{(url("admin/") == url()->current()) ? 'active' : '' }}">
      <a href="{{url("admin/")}}">
        <i class="pe-7s-graph"></i>
        <p>Dashboard</p>
      </a>
    </li>
    <li>
      <p>DATA MASTER</p>
    </li>
    <li class="{{(url("admin/kategori") == url()->current()) ? 'active' : '' }}">
      <a href="{{url("admin/kategori")}}">
        <i class="pe-7s-filter"></i>
        <p>Kategori</p>
      </a>
    </li>
    <li class="{{(url("admin/tingkat") == url()->current()) ? 'active' : '' }}">
      <a href="{{url("admin/tingkat")}}">
        <i class="pe-7s-flag"></i>
        <p>Tingkat</p>
      </a>
    </li>
    <li class="{{(url("admin/tahun-ajaran") == url()->current()) ? 'active' : '' }}">
      <a href="{{url("admin/tahun-ajaran")}}">
        <i class="pe-7s-clock"></i>
        <p>Tahun Ajaran</p>
      </a>
    </li>
    <li class="{{(url("admin/jenis-pembayaran") == url()->current()) ? 'active' : '' }}">
      <a href="{{url("admin/jenis-pembayaran")}}">
        <i class="pe-7s-credit"></i>
        <p>Jenis Pembayaran</p>
      </a>
    </li>
    <li class="{{(url("admin/bank") == url()->current()) ? 'active' : '' }}">
      <a href="{{url("admin/bank")}}">
        <i class="pe-7s-culture"></i>
        <p>Bank</p>
      </a>
    </li>
    <li>
      <p>Pengguna</p>
    </li>
    <li class="{{(url("admin/user") == url()->current()) ? 'active' : '' }}">
      <a href="{{url("admin/user")}}">
        <i class="pe-7s-user"></i>
        <p>Admin</p>
      </a>
    </li>
    <li class="{{(url("admin/siswa") == url()->current()) ? 'active' : '' }}">
      <a href="{{url("admin/siswa")}}">
        <i class="pe-7s-user"></i>
        <p>Siswa</p>
      </a>
    </li>
    <li class="{{(url("admin/orang-tua") == url()->current()) ? 'active' : '' }}">
      <a href="{{url("admin/orang-tua")}}">
        <i class="pe-7s-user"></i>
        <p>Orang Tua</p>
      </a>
    </li>
    <li>
      <p>Transaksi</p>
    </li>
    <li class="{{(url("admin/tagihan") == url()->current()) ? 'active' : '' }}">
      <a href="{{url("admin/tagihan")}}">
        <i class="pe-7s-note2"></i>
        <p>Tagihan</p>
      </a>
    </li>
    <li class="{{(url("admin/pembayaran") == url()->current()) ? 'active' : '' }}">
      <a href="{{url("admin/pembayaran")}}">
        <i class="pe-7s-cash"></i>
        <p>Pembayaran</p>
      </a>
    </li>
    <li>
      <p>Akun</p>
    </li>
    <li class="disabled {{(url("admin/akun") == url()->current()) ? 'active' : '' }}">
      <a href="#">
        <i class="pe-7s-config"></i>
        <p>Pengaturan Akun</p>
      </a>
    </li>
    <li class="{{(url("/identitas-sekolah") == url()->current()) ? 'active' : '' }}">
      <a href="{{url("/identitas-sekolah")}}">
        <i class="pe-7s-id"></i>
        <p>Identitas Sekolah</p>
      </a>
    </li>
  </ul>
</div>
</div>
