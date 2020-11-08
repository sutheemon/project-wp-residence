<!doctype html>
<html lang="en">
  <head>
  	<title>@yield('title')</title>

        @include('layout.head')
        
  </head>
  <body>
    <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="p-4 pt-5">
                <div class="ResidenceName">
                    <H2 style="color: #ffc107;">RESIDENCE</H2>
                    <p>Residence Management System</p><br>
                </div>

                <ul class="list-unstyled components mb-5">
                    <li>
                        <a href="home">HOME</a>
                    </li>
                    <li>
                        <a href="residence">MANAGE RESIDENCE</a>

                    </li>
                    <li>
                        <a href="bill">MANAGE BILL</a>
                    </li>
                    <li>
                    <a href="profile">MANAGE PROFILE</a>
                    </li>
                    <li>
                    <a href="logout">LOGOUT</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Toggle Menu</span>
                    </button>
                </div>
            </nav>
            <div>
                @yield('content')
            </div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>