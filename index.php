<?php

include('header.php')
?>

                <div class="col position-relative page-content">
                    <!-- content page -->

                    <!-- page title bar -->
                    <div class="row align-items-center page-title">
                        <div class="col-12 col-md mb-2 mb-sm-0">
                            <h6 class="mb-0">My Dashboard</h6>
                            <p class="text-secondary small">This is your personal intranet</p>
                        </div>
                        <div class="col col-sm-auto">
                            <div class="input-group input-group-md">
                                <input type="text" class="form-control bg-none px-0" value="" id="titlecalendar" />
                                <span class="input-group-text text-secondary bg-none" id="titlecalandershow"><i class="bi bi-calendar-event"></i></span>
                            </div>
                        </div>

                    </div>
                    <!-- page title bar ends -->

                    <!-- Orders and status summary-->
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-4 col-xxl mb-4">
                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 rounded bg-light-blue">
                                                <i class="bi bi-bag-check h5"></i>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <p class="small text-secondary mb-1">Total User</p>
                                            <h4 class="fw-medium">523 </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 col-xxl mb-4">
                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 rounded bg-light-cyan">
                                                <i class="bi bi-bag-check h5"></i>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <p class="small text-secondary mb-1">Achieved</p>
                                            <h4 class="fw-medium">245 </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 col-xxl mb-4">
                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 rounded bg-light-yellow">
                                                <i class="bi bi-clipboard-check h5"></i>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <p class="small text-secondary mb-1">Pending</p>
                                            <h4 class="fw-medium">135 </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 col-xxl mb-4">
                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 rounded bg-light-red">
                                                <i class="bi bi-geo-alt h5"></i>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <p class="small text-secondary mb-1">Payment Pending</p>
                                            <h4 class="fw-medium">6521 </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 col-xxl mb-4">
                            <div class="card border-0">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <div class="avatar avatar-50 rounded bg-light-green">
                                                <i class="bi bi-cart-x h5"></i>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <p class="small text-secondary mb-1">Payment Done:</p>
                                            <h4 class="fw-medium">13 </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- wallet and finance details -->

                    <!-- wallet and finance details ends -->

                    <!-- sales chart -->


                    <!-- color choices -->

                    <!-- color choices ends -->

                    <!-- Trending products -->

                    <!-- Swiper -->

                    <!-- Trending products ends -->

                    <div class="row mb-4 py-2">
                        <div class="col text-center">
                            <h4>Top <span class="text-gradient"> 10 </span> Users</h4>
                            <p class="text-secondary"></p>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Orders -->
                        <div class="col-12 col-md-12 position-relative">
                            <div class="card border-0 mb-4">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-auto">
                                            <i class="bi bi-shop h5 avatar avatar-40 bg-light-theme rounded"></i>
                                        </div>
                                        <div class="col-auto align-self-center">
                                            <!-- <h6 class="d-inline-block mb-0">Tickets Raised</h6> -->
                                            <p class="text-secondary small">Top 10 Users
                                            </p>
                                        </div>

                                        <div class="col-auto ms-auto" id="searchcontainer">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <table class="table table-border footable" data-show-toggle="true">
                                        <thead class="bg-orange textcolor ">
                                            <tr class=" text-white">

                                                <th class="">Name</th>
                                                <th data-breakpoints="xs md">Employee_id</th>
                                                <th data-breakpoints="xs">email</th>
                                                <th data-breakpoints="xs md">Role</th>
                                                <th data-breakpoints="xs md">Target</th>
                                                <th data-breakpoints="xs md">Achievement</th>

                                                <th data-breakpoints="xs">Status</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>

                                                <td>
                                                    <p class="mb-0">Banana</p>
                                                    <p class="text-secondary small">12 Piece, SKUID: SH02521</p>
                                                </td>
                                                <td>
                                                    <p class="mb-0">123456</p>
                                                    <p class="text-secondary small">123456</p>
                                                </td>

                                                <td>
                                                    <p class="mb-0">John Johnson</p>
                                                    <p class="text-secondary small">john@gmailtestid.com</p>
                                                </td>
                                                <td>
                                                    <p class="mb-0">36.00</p>
                                                    <p class="text-secondary small">USD</p>
                                                </td>

                                                <td>
                                                    Delivered
                                                </td>
                                                <td>
                                                    John Johnson
                                                </td>

                                                <td>
                                                    <span class="badge badge-sm bg-green">Paid</span>
                                                </td>

                                            </tr>

                                        </tbody>
                                    </table>
                                    <div class="row align-items-center mx-0 mb-3">
                                        <div class="col-6 ">
                                            <span class="hide-if-no-paging">
                                                Showing <span id="footablestot">1st</span> page
                                            </span>
                                        </div>
                                        <div class="col-6" id="footable-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



















                    <!-- content page ends -->
                </div>

                <div class="col-12 mt-0 footer-ht">
                    <!-- footer -->
                    <footer class="footer row">
                        <div class="col-12 col-md-12 col-lg py-2">
                            <span class="text-secondary small">Copyright @2022, Designed by <a href="">admin</a> on Earth ❤️</span>
                        </div>

                    </footer>
                    <!-- footer ends -->
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


    <script>
        'use strict'
        $(window).on('load', function() {
            /* table data master */
            $('.footable').footable({
                "paging": {
                    "enabled": true,
                    "container": '#footable-pagination',
                    "countFormat": "{CP} of {TP}",
                    "limit": 3,
                    "position": "right",
                    "size": 5
                },
                "filtering": {
                    "container": "#searchcontainer",
                    "enabled": true,
                    "filters": [{
                        "columns": ["1", "2", "3"]
                    }]
                },
                "sorting": {
                    "enabled": true
                },
            }, function(ft) {
                $('#footablestot').html($('.footable-pagination-wrapper .label').html())

                $('.footable-pagination-wrapper ul.pagination li').on('click', function() {
                    setTimeout(function() {
                        $('#footablestot').html($('.footable-pagination-wrapper .label').html());
                    }, 200);
                });

            });
        });
    </script>


</body>


</html>