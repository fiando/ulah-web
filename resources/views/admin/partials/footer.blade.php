<footer class="footer">
  <div class="container-fluid">
    <nav class="pull-left">
      <ul>
        <li>
          <a href="{{url("tentang-aplikasi")}}">
            Tentang Aplikasi
          </a>
        </li>
        <li>
          <form action="{{url("toggle_otp")}}" method="post">
            <div class="form-group otp-btn">
              {{ csrf_field() }}
              @if (session('otp_valid'))
                <button type="submit" class="btn btn-xs btn-warning btn-block btn-fill">Matikan OTP</button>
              @else
                <button type="submit" class="btn btn-xs btn-primary btn-block btn-fill">Aktifkan OTP</button>
              @endif
            </div>
          </form>
        </li>
      </ul>
    </nav>
    <p class="copyright pull-right">
      &copy; <script>document.write(new Date().getFullYear())</script> ULah & Template by <a href="https://www.creative-tim.com/product/light-bootstrap-dashboard">Creative Tim</a>
    </p>
  </div>
</footer>
