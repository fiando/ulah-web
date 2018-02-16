<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="icon" type="image/png" href="{{url("img/logo.png")}}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>ULah - @yield('title')</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />


  <!-- Bootstrap core CSS     -->
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />

  <!-- Animation library for notifications   -->
  <link href="{{asset('css/animate.min.css')}}" rel="stylesheet"/>

  <!--  Light Bootstrap Table core CSS    -->
  <link href="{{asset('css/light-bootstrap-dashboard.css?v=1.4.0')}}" rel="stylesheet"/>
  <link href="{{asset('lib/DataTables/datatables.min.css')}}" rel="stylesheet"/>
  <link href="{{asset('css/style.css')}}" rel="stylesheet"/>

  <!--     Fonts and icons     -->
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  <link href="{{asset('css/pe-icon-7-stroke.css')}}" rel="stylesheet" />

</head>
<body>

  <div class="wrapper">
    @include('admin.partials.sidebar', [])

    <div class="main-panel">
      @include('admin.partials.header')

      <div class="content">
        <div class="container-fluid">
          @if (isset($_SESSION['msg_info']))
            <div class="alert alert-info">
              <span>{{$msg_info}}</span>
            </div>
          @endif
          @hasSection('title')
            @hasSection('desc')
              <div class="card">
                <div class="header">
                  <h4 class="title">@yield('title')</h4>
                  <p class="category">@yield('desc')</p>
                  <br>
                </div>
              </div>
            @endif
          @endif
          @section('content')
            content
          @show
        </div>
      </div>
      @include('admin.partials.footer')
    </div>
  </div>
</body>

@section('script')
  <!--   Core JS Files   -->
  <script src="{{asset('js/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>

  <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
  <script src="{{asset('js/light-bootstrap-dashboard.js?v=1.4.0')}}"></script>
  <script src="{{asset('lib/DataTables/datatables.min.js')}}"></script>
@show

</html>
