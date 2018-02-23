@if (session('level') == 'siswa')
  <div class="sidebar" data-color="blue" data-image="{{asset('img/sidebar-5.jpg')}}">
@else
  <div class="sidebar" data-color="green" data-image="{{asset('img/sidebar-5.jpg')}}">
  @endif
<div class="sidebar-wrapper">
  <div class="logo">
    <a href="{{url("dashboard")}}" class="simple-text">
      ULah <br>
      <small><small>Pembayaran Uang Sekolah</small></small>
    </a>
  </div>
  <ul class="nav">
    <li class="{{(url("dashboard") == url()->current()) ? 'active' : '' }}">
      <a href="{{url("dashboard")}}">
        <i class="pe-7s-graph"></i>
        <p>Dashboard</p>
      </a>
    </li>
    @if (session('level') == 'siswa')
      <li class="{{(url("orang-tua") == url()->current()) ? 'active' : '' }}">
        <a href="{{url("orang-tua")}}">
          <i class="pe-7s-user"></i>
          <p>Profil Orang Tua</p>
        </a>
      </li>
      @else
        <li class="{{(url("siswa") == url()->current()) ? 'active' : '' }}">
          <a href="{{url("siswa")}}">
            <i class="pe-7s-user"></i>
            <p>Profil Siswa</p>
          </a>
        </li>
    @endif
    <li class="{{(url("identitas-sekolah") == url()->current()) ? 'active' : '' }}">
      <a href="{{url("identitas-sekolah")}}">
        <i class="pe-7s-id"></i>
        <p>Identitas Sekolah</p>
      </a>
    </li>
    <li>
      <p>Status keuangan</p>
    </li>
    <li class="{{(url("tagihan") == url()->current()) ? 'active' : '' }}">
      <a href="{{url("tagihan")}}">
        <i class="pe-7s-note2"></i>
        <p>Tagihan</p>
      </a>
    </li>
    <li class="{{(url("pembayaran") == url()->current()) ? 'active' : '' }}">
      <a href="{{url("pembayaran")}}">
        <i class="pe-7s-cash"></i>
        <p>Pembayaran</p>
      </a>
    </li>
    <li>
      <p>Akun</p>
    </li>
    <li class="{{(url("akun") == url()->current()) ? 'active' : '' }}">
      <a href="{{url("akun")}}">
        <i class="pe-7s-config"></i>
        <p>Pengaturan Akun</p>
      </a>
    </li>
  </ul>
</div>
</div>
