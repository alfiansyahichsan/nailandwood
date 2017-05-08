<!-- layout untuk admin panel -->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/png" href="{{asset('images/medusa/logo3.png')}}"/>

    
    <title>Admin - @yield('judul')</title><!-- akan diisi judul dari tiap halaman admin panel (tergantung halaman admin yang dibukanya apa) -->

    <link href="{{ asset('sbadmin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('sbadmin/vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('sbadmin/dist/css/sb-admin-2.css') }}" rel="stylesheet">
    <link href="{{ asset('sbadmin/vendor/morrisjs/morris.css') }}" rel="stylesheet">
    <link href="{{ asset('sbadmin/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrapper">

        <!-- desain layout untuk Navigation admin panel -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Paku dan Kayu</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li> <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i> 
                                   Logout
                                   

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li></a>
                        </li>
                    </ul>
        
                </li>
        
            </ul>
            
            <!-- Isi dari navigasi admin panel -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="{{URL::Route('dashboard')}}" @yield("nav1")><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="{{URL::Route('slider')}}" @yield("nav2")><i class="fa fa-dashboard fa-fw"></i> Slider</a>
                        </li>
                        <li>
                            <a href="{{URL::Route('socmed')}}" @yield("nav3")><i class="fa fa-dashboard fa-fw"></i> Socmed</a>
                        </li>
                        <li>
                            <a href="{{URL::Route('musicalbum')}}" @yield("nav4")><i class="fa fa-dashboard fa-fw"></i> Music Album</a>
                        </li>
                        <li>
                            <a href="{{URL::Route('event')}}" @yield("nav5")><i class="fa fa-dashboard fa-fw"></i> Events</a>
                        </li>
                        <li>
                            <a href="{{URL::Route('news')}}" @yield("nav6")><i class="fa fa-dashboard fa-fw"></i> News</a>
                        </li>
                        <li>
                            <a href="{{URL::Route('videos')}}" @yield("nav7")><i class="fa fa-dashboard fa-fw"></i> Video</a>
                        </li>
                        <li>
                            <a href="{{URL::Route('playlist')}}" @yield("nav8")><i class="fa fa-dashboard fa-fw"></i> Playlist</a>
                        </li>
                        <li>
                            <a href="{{URL::Route('home')}}" @yield("nav9")><i class="fa fa-dashboard fa-fw"></i> Home</a>
                        </li>

                        
                        
                    </ul>
                </div>
              
            </div>
          
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> @yield('judul')</h1>
                </div>
              
            </div>


    @yield("konten")

       </div>

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('sbadmin/vendor/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('sbadmin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('sbadmin/vendor/metisMenu/metisMenu.min.js') }}"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{ asset('sbadmin/vendor/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('sbadmin/vendor/morrisjs/morris.min.js') }}"></script>
    <script src="{{ asset('sbadmin/data/morris-data.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="sbadmin/dist/js/sb-admin-2.js') }}"></script>

    @yield("js")

</body>

</html>
