<!doctype html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <meta name="theme-color" content="#FF096D ">
    <title>Dashboard</title>


    <!-- manifest meta -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="manifest" href="manifest.json" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/favicon180.png" sizes="180x180">
    <link rel="icon" href="assets/img/favicon180.png" sizes="32x32" type="image/png">
    <link rel="icon" href="assets/img/favicon180.png" sizes="16x16" type="image/png">

    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

    <!-- bootstrap icons -->
    <link rel="stylesheet" href="./cdn.jsdelivr.net/npm/bootstrap-icons%401.8.1/font/bootstrap-icons.css">

    <!-- chosen css -->
    <link rel="stylesheet" href="assets/vendor/chosen_v1.8.7/chosen.min.css">

    <!-- date range picker -->
    <link rel="stylesheet" href="assets/vendor/daterangepicker/daterangepicker.css">

    <!-- no ui slider -->
    <link rel="stylesheet" href="assets/vendor/nouislider/nouislider.min.css">

    <!-- footable css -->
    <link rel="stylesheet" href="assets/vendor/fooTable/css/footable.bootstrap.min.css">

    <!-- swiper carousel css -->
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">

    <!-- style css for this template -->
    <link href="assets/scss/style.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100 sidebar-pushcontent theme-pink" data-theme="theme-pink">

    <img src="assets/img/orange.png" alt="" class="background-img">

    <!-- page loader -->
    <div class="container-fluid h-100 position-fixed loader-wrap bg-blur">
        <div class="row justify-content-center h-100">
            <div class="col-auto align-self-center text-center px-5 leaf">

                <div class="logo-square animated bg-gradient-theme-light mb-4">
                    <div class="icon-logo">
                        <img src="assets/img/favicon180.png" alt="" />
                    </div>
                </div>
                <h4 class="mb-1">Loading<b class="fw-bold">.</b> <sup>..</sup></h4>
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

    <!-- Sidebar -->
    <?php

    include('sidebar.php')
    ?>
    <!-- Sidebar ends -->


    <main class="main vh-100">

        <!-- Begin page content -->
        <div class="container-fluid h-100">
            <div class="row h-100 flex-column">

                <div class="col-12 mb-0 header-ht">
                    <!-- header -->
                    <header class="header row align-items-center">
                        <div class="col-auto pe-0">
                            <button class="btn btn-link btn-square menu-btn" type="button">
                                <i class="bi bi-list fs-4"></i>
                            </button>
                        </div>

                        <div class="col">
                            <!-- search -->
                            <div class="search-wrapper">
                                <div class="row gx-2">
                                    <div class="col">
                                        <!-- <input type="text" class="form-control form-control-rounded border" placeholder="Type something here to see result..." id="searchglobal"> -->

                                    </div>
                                    <div class="col-auto">
                                        <button class="btn btn btn-square btn-link rounded-circle search-btn" type="button">
                                            <i class="bi bi-x-lg"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- search ends -->
                        </div>
                        <div class="col-auto ms-auto ps-0">
                            <button class="btn btn-link btn-square search-btn" type="button" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Click n Type in search...">
                                <i class="bi bi-search"></i>
                            </button>

                            <!-- <button type="button" class="btn btn-square btn-link text-center d-none d-sm-inline-block" id="addtohome" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Install PWA"><i class="bi bi-cloud-download"></i></button> -->
                            <button type="button" class="btn btn-square btn-link text-center d-none d-lg-inline-block" id="gofullscreen" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Fullscreen" data-bs-original-title="Go Fullscreen"><i class="bi bi-fullscreen"></i></button>


                            <!-- <div class="dropdown dropdown-dontclose d-inline-block">
            <button type="button" class="btn btn-link text-center" id="basketcart" data-bs-toggle="dropdown" aria-expanded="true">
                <span class="bi bi-basket position-relative">
                    <span class="badge position-absolute top-0 start-100 translate-middle bg-theme textw-white rounded">
                        <span class="fs-10"></span> <span class="visually-hidden">New alerts</span>
                    </span>
                </span>
            </button>
            <div class="dropdown-menu dropdown-menu-center w-300 p-0 " data-bs-popper="static">
                <ul class="list-group list-group-flush position-relative z-index-9">
                    <li class="list-group-item">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <figure class="avatar avatar-60 text-center mb-0">
                                    <img src="assets/img/apple.png" alt="" class="mh-100">
                                </figure>
                            </div>
                            <div class="col">
                                <a href="#" class="text-normal d-block mb-2">
                                    <h6 class="text-color-theme">Admin</h6>
                                    <br>
                                </a>
                                <div class="row ">

                                    <div class="col-auto ">
                                        <div class="card border-0 light-gradient-cart mtop-25">
                                            <div class="bg-receipt-cut coverimg">
                                                <img src="assets/img/receipt-cut.png" alt="" class="d-none w-auto">
                                            </div>
                                            <div class="card-body">


                                                <a href="login.php" class="btn btn-theme btn-rounded w-100 mb-1">Log out</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>

            </div>
        </div> -->


                        </div>
                    </header>
                    <!-- header ends -->
                </div>