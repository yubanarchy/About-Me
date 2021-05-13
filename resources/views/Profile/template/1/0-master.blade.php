<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>your profile</title>
        {{-- <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" /> --}}
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/template-profile/styles_type_1.css') }}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">{{ Auth::user()->name_en }}</span>
                <span class="d-none d-lg-block">
                    <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="{{ route('GetImage' , Auth::user()->photo_name) }}" alt="" />
                </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('profile.about' , $flag) }}">About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('profile.experience' , $flag) }}">Experience</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('profile.education' , $flag) }}">Education</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('profile.portfolio' , $flag) }}">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('profile.skills' , $flag) }}">Skills</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ route('profile.awards' , $flag) }}">Awards</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            @yield('section')
            <hr class="m-0" />
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/template-profile/scripts_type_1.js') }}"></script>

        {{-- Another script link --}}
    </body>
</html>
