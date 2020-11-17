<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.css"/>
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body>
    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="p-2 pt-5">
                <div class="ResidenceName">
                    <i class="fas fa-building fa-3x ml-2"></i>
                    <span class="ml-2" style="font-size: 200%; color: #ffffff;"><b>P Residence</b></span>
                    <p class="ml-2">Residence Management System.</p><br>
                </div>

                <ul class="list-unstyled components mb-5">
                    <li>
                        <a href="{{ URL::to('home') }}">
                        <i class="fas fa-home btn-lg ma-0"></i>
                        <span style="font-size: 100%;">HOME</span></a>
                    </li>

                    @if (Auth::user()->role_type_id === 'A')
                    <li>
                        <a href="{{ URL::to('residence') }}">
                        <i class="fas fa-edit btn-lg ma-0"></i>
                        <span style="font-size: 100%; margin: 0px;">MANAGE RESIDENCE</span></a>
                    </li>
                    @endif

                    @if (Auth::user()->role_type_id === 'A')
                    <li>
                        <a href="{{ URL::to('bill') }}">
                        <i class="fas fa-file-invoice-dollar btn-lg ma-0"></i>
                        <span class="ml-2" style="font-size: 100%; margin: 0px;">MANAGE BILL</span></a>
                    </li>
                    @endif

                    @if (Auth::user()->role_type_id === 'U')
                    <li>
                        <a href="{{ URL::to('payment') }}">
                        <i class="fas fa-money-check-alt btn-lg ma-0"></i>
                        <span class="ml-0" style="font-size: 100%; margin: 0px;">PAYMENT BILL</span></a>
                    </li>
                    @endif

                    <li>
                        <a href="{{ URL::to('profile') }}">
                        <i class="fas fa-user-alt btn-lg ma-0"></i>
                        <span class="ml-1" style="font-size: 100%; margin: 0px;">MANAGE PROFILE</span></a>
                    </li>

                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt btn-lg ma-0"></i>
                        <span class="ml-1" style="font-size: 100%; margin: 0px;">{{ __('LOGOUT') }}</span></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">
            <nav class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 0 4px 8px 0 #a7a7a733, 0 6px 20px 0 #a7a7a733;">
                <div class="container-fluid px-1">
                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Toggle Menu</span>
                    </button>
                    <div>
                        <span class="mr-2" style="font-size: 100%; color: #51606d;">Name</span>
                        <img src="{{ asset('images/user.png') }}" width="35">
                    </div>
                </div>
            </nav>

            <div>
                @yield('content')
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/menu.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#dataTable').DataTable();
    });
    </script>
  </body>
</html>