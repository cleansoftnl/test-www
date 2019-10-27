<!DOCTYPE html>
<html lang="en">

<head>
  <base href="./admin">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <meta name="description" content="CoreUI - Laravel">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>CoreUI Integration with Laravel</title>





  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css">
  <!-- Theme style -->

  <style>
    @media (min-width: 768px) {
      .modal-xl {
        width: 90%;
        height: 90%;
        max-width: 1200px;
      }

      .modal-xxl {
        width: 98%;
        max-width: 2400px;
      }
    }
  </style>

  @stack('css')
  @stack('stylesheet')
  @stack('head_end')









</head>

<body
  class="app header-fixed sidebar-fixed aside-menu-fixed footer-fixed sidebar-minimized sidebar-lg-show brand-minimized">



  <div id="app">
    @include('common.header')
    <div class="app-body">
      @include('partials.sidebar')
      <main class="main">
        <div class="container-fluid">
          @yield('content')
        </div>
      </main>
      @include('partials.aside')
    </div>
    @include('common.footer')
  </div>

  <!-- Scripts -->
  {{-- <script src="{{ asset('js/app.js') }}"></script> --}}

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js">
  </script>
  <script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>


  @stack('scripts')



</body>

</html>