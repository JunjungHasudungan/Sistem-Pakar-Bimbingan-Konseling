<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <script src="{{ asset('js/app.js') }}" defer></script>

        <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }
        </style>
        <!-- Custom styles for this template -->
        
          <!-- Select2 -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.min.js">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
          <!-- Select2 -->

          <!-- Font Awesome -->
{{--         <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css"> --}}
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link href="https://getbootstrap.com/docs/4.5/examples/dashboard/dashboard.css" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
                <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="javascript:;">Sistem Pakar</a>
                <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <ul class="navbar-nav px-3">

                    <li class="nav-item text-nowrap">
                        <a class="nav-link" href="{{-- {{ route('logout') }} --}}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                           {{--  {{ __('Logout') }} --}}
                        </a>

                        <form id="logout-form" action="{{-- {{ route('logout') }} --}}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </nav>
    
            <div class="container-fluid">
                <div class="row">
                    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                    <div class="sidebar-sticky pt-3">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" href="">
                                <span data-feather="home"></span>
                                Dashboard <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('permasalahan.index')}}">
                                <span data-feather="message-circle"></span>
                                    Permasalahan
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('gejala.index') }}">
                                    <span data-feather="loader"></span> Gejala
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('relasi.index')}}">
                                    <span data-feather="briefcase"></span> Relasi 
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('bimbingan.index')}}">
                                    <span data-feather="briefcase"></span> Bimbingan 
                                </a>
                            </li>
                           <li class="nav-item">
                                <a class="nav-link" href="{{route('konselling.index')}}">
                                    <span data-feather="briefcase"></span> Konselling 
                                </a>
                            </li>       
                        </ul>
                    </div>
                    </nav>
    
                    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                        <!-- Page Gejala -->                        
                        @yield('gejalaIndex')
                        @yield('gejalaCreate')
                        @yield('gejalaEdit')
                        @yield('gejalaDetail')

                        <!-- Page Permasalahan -->
                        @yield('permasalahancontent')
                        @yield('permasalahanCreate')
                        @yield('permasalahanEdit')
                        @yield('permasalahahDetail')

                        <!-- Page Relasi -->
                        @yield('relasiIndex')
                        @yield('relasiCreate')
                        @yield('relasiEdit')

                        <!-- Page Solusi -->
                        @yield('solusiIndex')
                        @yield('solusiCreate')
                        @yield('solusiEdit')

                        <!-- Page Bimbingan -->
                        @yield('bimbinganIndex')
                        @yield('bimbinganCreate')
                        @yield('bimbinganEdit')
                        @yield('bimbinganDetail')

                        <!-- Page Konselling -->
                        @yield('konsellingIndex')
                        @yield('konsellingCreate')
                        @yield('konsellingEdit')

                    </main>
                </div>
            </div>
        </div>
      
     
     <!-- Bootstrap -->   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


{{--         <script>
            feather.replace();
        </script>
          <!-- Select2 --> --}}

    </body>
</html>