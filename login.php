<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <meta name="theme-color" content="#FF096D ">
    <title> Dashboard</title>

    <!-- manifest meta -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="manifest" href="manifest.json" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/favicon180.png" sizes="180x180">
    <link rel="icon" href="assets/img/favicon32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="assets/img/favicon16.png" sizes="16x16" type="image/png">

    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="cdn.jsdelivr.net/npm/bootstrap-icons%401.8.1/font/bootstrap-icons.css">

    <!-- chosen css -->
    <link rel="stylesheet" href="assets/vendor/chosen_v1.8.7/chosen.min.css">

    <!-- date range picker -->
    <link rel="stylesheet" href="assets/vendor/daterangepicker/daterangepicker.css">

    <!-- swiper carousel css -->
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">

    <!-- style css for this template -->
    <link href="assets/scss/style.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100 sidebar-pushcontent theme-pink" data-theme="theme-pink">

    <!-- page loader -->
    <div class="container-fluid h-100 position-fixed loader-wrap bg-blur">
        <div class="row justify-content-center h-100">
            <div class="col-auto align-self-center text-center px-5 leaf">

                <div class="logo-square animated bg-gradient-theme-light mb-4">
                    <div class="icon-logo">
                        <img src="assets/img/logo-icon.png" alt="" />
                    </div>
                </div>
                <h4 class="mb-1">GoMobile<b class="fw-bold">UX</b> <sup>PRO</sup></h4>
                <h6 class="mb-3 text-secondary">eCommerce Admin UI UX</h6>
                <div class="dotslaoder">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <br>
            </div>
        </div>
    </div>
    <!-- page loader ends -->

    <main class="main vh-100">
        <!-- Begin page content -->
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 col-md-6 col-lg-6 bg-light-white">
                    <div class="row h-100 flex-column">
                        <div class="col-12 mb-0 header-ht">
                            <!-- header -->
                            <header class="header row align-items-center">
                                <div class="col-auto">
                                    <a class="btn btn-link btn-44 btn-square text-theme back-btn">
                                    </a>
                                </div>

                                <div class="col-auto">
                                    <!-- <a href="home.html" class="btn btn-link btn-44 btn-square text-theme" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Dashboard">
                                        <i class="bi bi-speedometer"></i>
                                    </a>
                                    <a href="index.html" class="btn btn-link btn-44 btn-square text-theme" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Shopping Portal">
                                        <i class="bi bi-shop"></i>
                                    </a> -->
                                </div>
                            </header>
                            <!-- header ends -->
                        </div>

                        <div class="col-12 position-relative page-content">
                            <div class="row justify-content-center h-100">
                                <div class="col-12 col-md-9 col-lg-8 col-xxl-6 align-self-center">
                                    <h2 class="text-center">Sign in</h2>
                                    <p class="text-center text-secondary mb-4">Enter your credentials</p>
                                    <!-- alert messages -->
                                    <div class="alert alert-danger fade show d-none mb-2 global-alert" role="alert">
                                        <div class="row">
                                            <div class="col"><strong>Requierd!</strong> Please enter valid data.</div>
                                        </div>
                                    </div>
                                    <div class="alert alert-success fade show d-none mb-2 global-success" role="alert">
                                        <div class="row gx-2">
                                            <div class="col-auto align-self-center">
                                                <div class="spinner-border spinner-border-sm text-success me-2" role="status">
                                                    <span class="visually-hidden">Loading...</span>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <strong>Awesome!</strong> Taking you to the dashboard.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card border-0 mb-4">
                                        <div class="card-body">
                                            <!-- form elements -->
                                            <form class="mb-3">

                                                <div class="mb-3">
                                                    <div class="form-group mb-2 position-relative check-valid is-valid">
                                                        <div class="input-group input-group-lg">
                                                            <span class="input-group-text text-theme border-end-0"><i class="bi bi-envelope"></i></span>
                                                            <div class="form-floating">
                                                                <input type="email" placeholder="Email Address" value="guest@maxartkiller.com" required class="form-control border-start-0">
                                                                <label>Email Address</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="invalid-feedback mb-3">Add .com at last to insert valid data </div>
                                                </div>

                                                <div class="mb-3">
                                                    <div class="form-group mb-2 position-relative check-valid">
                                                        <div class="input-group input-group-lg">
                                                            <span class="input-group-text text-theme border-end-0"><i class="bi bi-key"></i></span>
                                                            <div class="form-floating">
                                                                <input type="password" placeholder="Confirm Password" value="" required class="form-control border-start-0" id="password2">
                                                                <label for="password2">Confirm Password</label>
                                                            </div>
                                                            <span class="input-group-text text-secondary  border-end-0" id="viewpassword2"><i class="bi bi-eye"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="invalid-feedback">Please enter valid input</div>
                                                    <div class="valid-feedback">Woooh! Entered password matched </div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" id="rememberme" checked>
                                                        <label class="form-check-label" for="rememberme">Remember me</label>
                                                    </div>
                                                </div>

                                                <button class="btn btn-lg btn-rounded btn-theme w-100 signin-btn">Sign in</button>
                                            </form>
                                            <p class="text-center"><a href="forgot-password.php" class="">Forgot Password?</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 footer-ht mt-0">
                            <!-- footer -->
                            <footer class="footer row">
                                <div class="col-12 col-md-12 col-lg py-2">
                                    <span class="text-secondary small">Copyright @2023, <a href="">Admin</a> </span>
                                </div>

                            </footer>
                            <!-- footer ends -->
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 h-100 px-0">

                    <!-- swiper -->
                    <div class="swiper introswiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide bg-gradient-theme-light pb-5">
                                <div class="row justify-content-center h-100">
                                    <div class="col-12 col-md-10 col-xl-8 align-self-center">
                                        <img src="assets/img/orange.png" alt="" class="image">
                                        <div class="px-3 text-start text-md-center">
                                            <h6 class="text-uppercase text-orange">Fruits</h6>
                                            <h3>Best and Fresh fruits<br>delivering direct from farms</h3>
                                            <p class="text-secondary">Backed with 1.6 acre cold storage</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="swiper-pagination pagination-smallline text-start text-md-center px-3"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- page content ends -->
    </main>


    <!-- Required jquery and libraries -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/vendor/bootstrap-5/dist/js/bootstrap.bundle.js"></script>

    <!-- Customized jquery file  -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/color-scheme.js"></script>
    <script src="cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script src="assets/vendor/daterangepicker/daterangepicker.js"></script>
    <script src="assets/vendor/chosen_v1.8.7/chosen.jquery.min.js"></script>
    <script src="assets/vendor/nouislider/nouislider.min.js"></script>
    <script src="assets/vendor/fooTable/js/footable.min.js"></script>
    <script src="assets/js/header-title.js"></script>

    <!-- page level script here -->
    <script>
        'use strict'
        $(window).on('load', function() {
            /* sign in button click */
            $('.signin-btn').on('click', function() {
                $('.global-success').removeClass('d-none')
                setTimeout(function() {
                    window.location.href = "index.php";
                }, 1000);
            })


        });
    </script>
</body>


</html>