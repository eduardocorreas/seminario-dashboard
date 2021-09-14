<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/apple-icon.png')}}">
        <link rel="icon" type="image/png" href="{{asset('img/favicon.png')}}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>
            Seminário São Pio X
        </title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <!-- CSS Files -->
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
        <link href="{{asset('css/now-ui-dashboard.css?v=1.5.0')}}" rel="stylesheet" />
        <link href="{{asset('demo/demo.css')}}" rel="stylesheet" />
    </head>

    <body class="">
        <div class="wrapper ">
            <div class="sidebar" data-color="orange">
            <!--
                Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
            -->
            <div class="logo">
                <a href="{{route("panel-admin")}}" class="simple-text logo-mini">
                Olá,
                </a>
                <a href="{{route("panel-admin")}}" class="simple-text logo-normal">
                {{Auth::user()->name}}
                </a>
            </div>
            <div class="sidebar-wrapper" id="sidebar-wrapper">
                <ul class="nav">
                <li>
                    <a href="{{route('panel-admin')}}">
                    <i class="now-ui-icons design_app"></i>
                    <p>Início</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('seminarians')}}">
                    <i class="now-ui-icons users_single-02"></i>
                    <p>Seminaristas</p>
                    </a>
                </li>

                <li>
                    <a href="{{route("seminarian-services")}}">
                    <i class="now-ui-icons design_bullet-list-67"></i>
                    <p>Funções da casa</p>
                    </a>
                </li>
                <li>
                    <a href="{{route('complaints')}}">
                    <i class="now-ui-icons ui-1_bell-53"></i>
                    <p>Denúncias</p>
                    </a>
                </li>

                <li>
                    <a href="{{route("logout")}}">
                        <i class="now-ui-icons arrows-1_minimal-left"></i>
                        <p>Sair</p>
                    </a>
                </li>

                </ul>
            </div>
            </div>
            <div class="main-panel" id="main-panel">
                <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
                <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                    <button type="button" class="navbar-toggler">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </button>
                    </div>
                    <a class="navbar-brand" href="#pablo"></a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                </div>
            </nav>
            @yield('content', 'Default content')


            </div>
        </div>
        <!--   Core JS Files   -->
        <script src="{{asset('js/core/jquery.min.js')}}"></script>
        <script src="{{asset('js/core/popper.min.js')}}"></script>
        <script src="{{asset('js/core/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/plugins/chartjs.min.js')}}"></script>
        <script src="{{asset('js/plugins/bootstrap-notify.js')}}"></script>
        <script src="{{asset('js/now-ui-dashboard.js?v=1.5.0')}}"></script>
        <!--  Google Maps Plugin    -->
        <script src="{{asset('demo/demo.js')}}"></script>
        <script src="//cdn.ckeditor.com/4.16.1/basic/ckeditor.js"></script>
        <script>
            CKEDITOR.replace("attendance-ckeditor");
        </script>
    </body>

</html>
