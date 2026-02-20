<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Log In Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc." />
    <meta name="author" content="Zoyothemes" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href=" {{ asset('backend/assets/images/favicon.svg') }}">

    {{-- {{ asset('backend/') }} --}}
    <!-- *************
   ************ CSS Files *************
  ************* -->
    <link rel="stylesheet" href="{{ asset('backend/assets/fonts/bootstrap/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/main.min.css') }}">

    <!-- *************
   ************ Vendor Css Files *************
  ************ -->

    <!-- Scrollbar CSS -->
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/overlay-scroll/OverlayScrollbars.min.css') }}">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">

</head>

<body class="bg-white">
    <!-- Container start -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-5 col-sm-6 col-12">
                <form method="POST" action="{{ route('login') }}" class="my-5">
                    @csrf
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="border border-light rounded-2 p-4 mt-5">
                        <div class="login-form">
                            <a href="index-2.html" class="mb-4 d-flex">
                                <img src="{{ asset('backend/assets/images/logo-dark.svg') }}"
                                    class="img-fluid login-logo" alt="Key Analytics Admin Dashboard Template">
                            </a>
                            <h4 class="fw-semibold mb-4">Login</h4>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input class="form-control" name="email" type="email" id="email" required=""
                                    placeholder="Enter your email">
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <div class="input-group">
                                    <input class="form-control" name="password" type="password" required=""
                                        id="password" placeholder="Enter your password">
                                    @error('password')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                    <a href="#" class="input-group-text">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="form-check m-0">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="rememberPassword">
                                    <label class="form-check-label" for="rememberPassword">Remember</label>
                                </div>
                                <a href="forgot-password.html" class="text-blue text-decoration-underline">Lost
                                    password?</a>
                            </div>
                            <div class="d-grid py-3 mt-2">
                                <button type="submit" class="btn btn-lg btn-primary">
                                    Login
                                </button>
                            </div>
                            <div class="text-center py-3">or Login with</div>
                         
                            {{-- <div class="text-center pt-4">
                                <span>Not registered?</span>
                                <a href="{{ route('register') }}" class="text-blue text-decoration-underline ms-2">
                                    SignUp</a>
                            </div> --}}
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Container end -->


    <!-- Required jQuery first, then Bootstrap Bundle JS -->
    <script src="{{ asset('backend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- *************
   ************ Vendor Js Files *************
  ************* -->

    <!-- Overlay Scroll JS -->
    <script src="{{ asset('backend/assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/overlay-scroll/custom-scrollbar.js') }}"></script>

    <!-- Apex Charts -->
    <script src="{{ asset('backend/assets/vendor/apex/apexcharts.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/apex/custom/common/sparkline.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/apex/custom/dash1/sales-report.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/apex/custom/dash1/visitors.js') }}"></script>
    <script src="{{ asset('backend/assets/vendor/apex/custom/dash1/sparkline.js') }}"></script>

    <!-- Custom JS files -->
    <script src="{{ asset('backend/assets/js/custom.js') }}"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':
                    toastr.info(" {{ Session::get('message') }} ");
                    break;

                case 'success':
                    toastr.success(" {{ Session::get('message') }} ");
                    break;

                case 'warning':
                    toastr.warning(" {{ Session::get('message') }} ");
                    break;

                case 'error':
                    toastr.error(" {{ Session::get('message') }} ");
                    break;
            }
        @endif
    </script>
</body>


</html>
