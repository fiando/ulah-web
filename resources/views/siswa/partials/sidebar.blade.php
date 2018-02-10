<div class="sidebar" data-color="blue" data-image="{{asset('img/sidebar-5.jpg')}}">

<div class="sidebar-wrapper">
  <div class="logo">
    <a href="{{url("")}}" class="simple-text">
      ULah <br>
      <small><small>Pembayaran Uang Sekolah</small></small>
    </a>
  </div>
  <ul class="nav">
    <li class="{{(url("siswa/") == url()->current()) ? 'active' : '' }}">
      <a href="{{url("siswa/")}}">
        <i class="pe-7s-graph"></i>
        <p>Dashboard</p>
      </a>
    </li>
    <li class="{{(url("siswa/orang-tua") == url()->current()) ? 'active' : '' }}">
      <a href="{{url("siswa/orang-tua")}}">
        <i class="pe-7s-graph"></i>
        <p>Profil Orang Tua</p>
      </a>
    </li>
    <li class="{{(url("siswa/identitas-sekolah") == url()->current()) ? 'active' : '' }}">
      <a href="{{url("identitas-sekolah")}}">
        <i class="pe-7s-graph"></i>
        <p>Identitas Sekolah</p>
      </a>
    </li>
    <li>
      <p>Status keuangan</p>
    </li>
    <li class="{{(url("siswa/tagihan") == url()->current()) ? 'active' : '' }}">
      <a href="{{url("siswa/tagihan")}}">
        <i class="pe-7s-graph"></i>
        <p>Tagihan</p>
      </a>
    </li>
    <li class="{{(url("siswa/pembayaran") == url()->current()) ? 'active' : '' }}">
      <a href="{{url("siswa/pembayaran")}}">
        <i class="pe-7s-graph"></i>
        <p>Pembayaran</p>
      </a>
    </li>
    <li>
      <p>Akun</p>
    </li>
    <li class="{{(url("siswa/akun") == url()->current()) ? 'active' : '' }}">
      <a href="{{url("siswa/akun")}}">
        <i class="pe-7s-graph"></i>
        <p>Pengaturan Akun</p>
      </a>
    </li>
  </ul>
</div>
</div>
