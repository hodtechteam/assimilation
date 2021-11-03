<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Register | Assimilation Ministry</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body class="bg-pattern">
        <div class="bg-overlay"></div>
        <div class="account-pages my-5 pt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-6 col-md-8">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <a href="index.html" class="">
                                        {{-- <img src="assets/images/logo-dark.png" alt="" height="24" class="auth-logo logo-dark mx-auto"> --}}
                                        {{-- <img src="assets/images/logo-light.png" alt="" height="24" class="auth-logo logo-light mx-auto"> --}}
                                    </a>
                                </div>
                                
                                <h4 class="font-size-18 text-muted text-center mt-2">Register</h4>
                                <p class="text-muted text-center mb-4">Assimilation Ministry.</p>
                                <form class="form-horizontal" action="{{ route('register') }}" method="POST">
                                    @csrf

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="mb-4">
                                                <label class="form-label" for="username">Full Name</label>
                                                {{-- <input type="text" name="name" class="form-control" id="username" placeholder="Enter username"> --}}
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="mb-4">
                                                <label class="form-label" for="useremail">Email</label>
                                                {{-- <input type="email" name="email" class="form-control" id="useremail" placeholder="Enter email">  --}}
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="name" autofocus>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror       
                                            </div>
                                            <div class="mb-4">
                                                <label class="form-label" for="userpassword">Password</label>
                                                {{-- <input type="password" class="form-control" id="userpassword" placeholder="Enter password"> --}}
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="mb-4">
                                                <label class="form-label" for="userpassword">Confirm Password</label>
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                {{-- <input type="password" name="confirm-password" class="form-control" id="userpassword" placeholder="Enter password"> --}}
                                            </div>
                                            
                                            <div class="d-grid mt-4">
                                                <button class="btn btn-primary waves-effect waves-light" type="submit">Register</button>
                                                {{-- <a href="{{ url('auth/google') }}" class="btn btn-primary waves-effect waves-light" type="submit">Register</a> --}}
                                            
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            <p class="text-white-50">Already have an account ?<a href="{{ url('login') }}" class="fw-medium text-primary"> Login </a> </p>
                            <p class="text-white-50">© <script>document.write(new Date().getFullYear())</script> </p>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- end Account pages -->

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <script src="assets/js/app.js"></script>

    </body>
</html>

