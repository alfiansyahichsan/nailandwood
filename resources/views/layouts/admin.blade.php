<title>Admin - @yield('judul')</title>
@extends('layouts.app')
@section('content')

    <div id="wrapper">

        <!-- desain layout untuk Navigation admin panel -->
        <div>
            <!-- Isi dari navigasi admin panel -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="{{URL::Route('dashboard')}}" @yield("nav1")><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="{{URL::Route('slider')}}" @yield("nav2")><i class="fa fa-dashboard fa-fw"></i> Slider - Home</a>
                        </li>
                        <li>
                            <a href="{{URL::Route('lplaylist')}}" @yield("nav3")><i class="fa fa-dashboard fa-fw"></i> Playlist - Home/Page</a>
                        </li>
                        <li>
                            <a href="{{URL::Route('lmusic')}}" @yield("nav4")><i class="fa fa-dashboard fa-fw"></i> LMusic - Home</a>
                        </li>
                        <li>
                            <a href="{{URL::Route('acara')}}" @yield("nav5")><i class="fa fa-dashboard fa-fw"></i> Events - Home</a>
                        </li>
                        <li>
                            <a href="{{URL::Route('nevent')}}" @yield("nav6")><i class="fa fa-dashboard fa-fw"></i> Next Event - Home</a>
                        </li>
                        <li>
                            <a href="{{URL::Route('news')}}" @yield("nav7")><i class="fa fa-dashboard fa-fw"></i> News - Home</a>
                        </li>
                        <li>
                            <a href="{{URL::Route('quotation')}}" @yield("nav8")><i class="fa fa-dashboard fa-fw"></i> Quotation - Home</a>
                        </li> 
                        <li>
                            <a href="{{URL::Route('lvideo')}}" @yield("nav9")><i class="fa fa-dashboard fa-fw"></i> Video - Home/Page</a>
                        </li> 
                        <li>
                            <a href="{{URL::Route('lgallery')}}" @yield("nav10")><i class="fa fa-dashboard fa-fw"></i> Gallery - Page</a>
                        </li> 
                        <li>
                            <a href="{{URL::Route('lblog')}}" @yield("nav11")><i class="fa fa-dashboard fa-fw"></i> Blog - Page</a>
                        </li> 
                        <li>
                            <a href="{{URL::Route('lbiography')}}" @yield("nav12")><i class="fa fa-dashboard fa-fw"></i> Biography - Page</a>
                        </li>  
                        <li>
                            <a href="{{URL::Route('lshop')}}" @yield("nav13")><i class="fa fa-dashboard fa-fw"></i> Shop - Page</a>
                        </li>
                        <li>
                            <a href="{{URL::Route('bank')}}" @yield("nav14")><i class="fa fa-dashboard fa-fw"></i> Bank</a>
                        </li>
                        <li>
                            <a href="{{URL::Route('transaksi')}}" @yield("nav15")><i class="fa fa-dashboard fa-fw"></i> Transaksi</a>
                        </li>
                        <li>
                            <a href="{{URL::Route('labout')}}" @yield("nav16")><i class="fa fa-dashboard fa-fw"></i> About - Blog Page</a>
                        </li>                        
                        
                    </ul>
                </div>
              
            </div>

            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header"> @yield('judul')</h1>
                    </div>
                  
                </div>

                @yield("konten")

           </div>
        </div>
    </div>
    <!-- /#wrapper -->

   

    @yield("js")

</body>

</html>
@endsection