<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Car Insurance</title>
    <meta name="description" content="Car Insurance">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="{{asset('dash/assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('dash/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('dash/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('dash/assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('dash/assets/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('dash/assets/css/cs-skin-elastic.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('dash/assets/css/bootstrap-select.less')}}"> -->
    <link rel="stylesheet" href="{{asset('dash/assets/scss/style.css')}}">
    <link href="{{asset('dash/assets/css/lib/vector-map/jqvmap.min.css')}}" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./">CarInsure</a>
                <a class="navbar-brand hidden" href="./">CI</a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="{{url('/home')}}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">Cars</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-car"></i>Cars</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-file-word-o"></i><a href="{{url('admin/cars')}}">View all your Cars</a></li>
                            
                        </ul>
                    </li>
                    <h3 class="menu-title">Insurances</h3>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Insurances</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="{{url('admin/insurances')}}">View all insured cars</a></li>
                        </ul>
                    </li>
                    <h3 class="menu-title">Claims</h3>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Claims</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="{{url('admin/claims')}}">View all claims</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="{{url('claims/new')}}">Send new Claim</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">

                <div class="header-menu">
    
                    <div class="col-sm-7">
                        <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                        
                    </div>
    
                    <div class="col-sm-5">
                        <div class="user-area dropdown float-right">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{Auth::user()->name}}
                            </a>
    
                            <div class="user-menu dropdown-menu">
                                    <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>
    
                                    <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>
    
                                    <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>
    
                                    <a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><i class="fa fa-power -off"></i>Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                            </div>
                        </div>
                    </div>
                </div>
    
            </header><!-- /header -->
            <!-- Header-->
        @yield('content')

    </div><!-- /#right-panel -->

<!-- Right Panel -->
    <script src="{{asset('dash/assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
    {{-- <script src="{{asset('js/popper.min.js')}}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="{{asset('dash/assets/js/plugins.js')}}"></script>
    <script src="{{asset('dash/assets/js/main.js')}}"></script>


    <script src="{{asset('dash/assets/js/dashboard.js')}}"></script>
    <script src="{{asset('dash/assets/js/widgets.js')}}"></script>
    <script src="{{asset('dash/assets/js/lib/vector-map/jquery.vmap.js')}}"></script>
    <script src="{{asset('dash/assets/js/lib/vector-map/jquery.vmap.min.js')}}"></script>
    <script src="{{asset('dash/assets/js/lib/vector-map/jquery.vmap.sampledata.js')}}"></script>
    <script src="{{asset('dash/assets/js/lib/vector-map/country/jquery.vmap.world.js')}}"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>

</body>
</html>