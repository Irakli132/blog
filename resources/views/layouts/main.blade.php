<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edica</title>
    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{asset('assets/vendors/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{'assets/vendors/aos/aos.css'}}">
    <link rel="stylesheet" href="{{'assets/css/style.css'}}">
    <script src="{{'assets/vendors/jquery/jquery.min.js'}}"></script>
    <script src="{{'assets/js/loader.js'}}"></script>
</head>
<body>
<div class="edica-loader"></div>
<header class="edica-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="index.html"><img src="{{'assets/images/logo.svg'}}" alt="Edica"></a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#edicaMainNav" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="edicaMainNav">
                <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('main.index')}}">Blog</a>
                    </li>

                    <li class="nav-item">
                        @auth()
                            <a class="nav-link" href="{{route('personal.main.index')}}">Sign in</a>
                        @endauth
                        @guest()
                        <a class="nav-link" href="{{route('personal.main.index')}}">My account</a>
                        @endguest
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</header>

@yield('content')

<section class="edica-footer-banner-section">
    <div class="container">
    </div>
</section>
<footer class="edica-footer" data-aos="fade-up">
    <div class="container">

        <div class="footer-bottom-content">
            <p class="mb-0">© Edica. 2020 <a href="https://www.bootstrapdash.com" target="_blank" rel="noopener noreferrer" class="text-reset">bootstrapdash</a> . All rights reserved.</p>
        </div>
    </div>
</footer>
<script src="{{'assets/vendors/popper.js/popper.min.js'}}"></script>
<script src="{{'assets/vendors/bootstrap/dist/js/bootstrap.min.js'}}"></script>
<script src="{{'assets/vendors/aos/aos.js'}}"></script>
<script src="{{'assets/js/main.js'}}"></script>
<script>
    AOS.init({
        duration: 1000
    });
</script>
</body>

</html>
