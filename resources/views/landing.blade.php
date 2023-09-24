<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>HOD - Assimilation Ministry</title>
    <meta name="description"
          content="HOD Assimilation Ministry."/>

    <!--Inter UI font-->
    <link href="https://rsms.me/inter/inter-ui.css" rel="stylesheet">

    <!--vendors styles-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link rel="shortcut icon" href="{{ asset('assets/media/favicons/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/media/favicons/apple-touch-icon-180x180.png') }}">

    <!-- Bootstrap CSS / Color Scheme -->
    <link rel="stylesheet" href="{{ asset('res/css/default.css') }}" id="theme-color">
</head>
<body>

<!--navigation-->
<section class="smart-scroll">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-dark">
            <a class="navbar-brand heading-black" href="{{url('/')}}">
                <img src="{{ url('assets/images/logo.png') }}" alt="logo" width="100" height="100">
            </a>
            <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse"
                    data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span data-feather="grid"></span>
            </button>
        </nav>
    </div>
</section>

<!--hero header-->
<section class="py-7 py-md-0 bg-hero" id="home">
    <div class="container">
        <div class="row vh-md-100">
            <div class="col-md-8 col-sm-10 col-12 mx-auto my-auto text-center">
                <h1 class="heading-black text-capitalize">Assimilation Ministry</h1>
                <p class="lead py-3">Assimilation Ministry, where kings are made!!!!</p>
                <a class="btn btn-default d-inline-flex flex-row align-items-center" href="{{  url('register') }}">
                    Register
                    <em class="ml-2" data-feather="arrow-right"></em>
                </a>
                <a class="btn btn-primary d-inline-flex flex-row align-items-center" href="{{  url('login') }}">
                    Login
                    <em class="ml-2" data-feather="arrow-right"></em>
                </a>
            </div>
        </div>
    </div>
</section>

<!--footer-->
<footer class="py-6">
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 text-muted text-center small-xl">
                &copy;  <?= date('Y') ?> Household of David - All Rights Reserved
            </div>
        </div>
    </div>
</footer>

<!--scroll to top-->
<div class="scroll-top">
    <i class="fa fa-angle-up" aria-hidden="true"></i>
</div>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.7.3/feather.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="{{ asset('res/js/scripts.js') }}"></script>
</body>
</html>