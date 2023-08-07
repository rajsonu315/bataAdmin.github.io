<div class="col-12 mt-0 footer-ht">
                    <!-- footer -->
                    <footer class="footer row">
                        <div class="col-12 col-md-12 col-lg py-2">
                            <span class="text-secondary small"> @2023, Designed by <a href="" target="_blank">admin</a> ❤️</span>
                        </div>
                        <div class="col-12 col-md-12 col-lg-auto align-self-center">
                            <ul class="nav small">
              
                                <li class="nav-item"><a class="nav-link" href="">Terms of Use</a></li>
                                <li class="nav-item">|</li>
                                <li class="nav-item"><a class="nav-link" href="">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </footer>
                    <!-- footer ends -->
                </div>

            </div>
        </div>
        <!-- page content ends -->

    </main>

    <!-- Rightbar -->
    <div class="rightbar-wrap">
        <div class="rightbar">
            <div class="row align-items-center mb-4">
                <div class="col-auto">
                    <div class="avatar avatar-44 rounded-circle bg-light-white"><i class="bi bi-sliders"></i></div>
                </div>
                <div class="col">
                    <h5 class="mb-0">Filter</h5>
                    <p class="">Set your choices</p>
                </div>
            </div>

            <!-- filter fields -->
            <div class="mb-4">
                <h6>Select Range</h6>
                <div id="rangeslider" class="mt-4"></div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <div class="form-group mb-2 position-relative">
                            <div class="form-floating">
                                <input type="text" placeholder="From" value="0" required class="form-control text-white" id="input-select">
                                <label>From</label>
                            </div>
                        </div>
                        <div class="invalid-feedback mb-3">Enter valid data </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <div class="form-group mb-2 position-relative">
                            <div class="form-floating">
                                <input type="text" placeholder="To" value="1000" required class="form-control text-white" id="input-number">
                                <label>To</label>
                            </div>
                        </div>
                        <div class="invalid-feedback mb-3">Enter valid data </div>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <div class="form-group mb-2 position-relative">
                    <div class="form-floating">
                        <select class="form-control multichosen" multiple>
                            <option value="Apple">Apple</option>
                            <option value="Banana">Banana</option>
                            <option value="Mango">Mango</option>
                            <option value="Orange">Orange</option>
                            <option value="Kiwi">Kiwi</option>
                            <option value="Pineapple">Pineapple</option>
                        </select>
                        <label>From</label>
                    </div>
                </div>
                <div class="invalid-feedback text-white mb-3">Max. 2 selection allowed </div>
            </div>
            <div class="mb-3">
                <div class="form-group mb-2 position-relative">
                    <div class="form-floating">
                        <input type="text" placeholder="Keyword" value="1000" required class="form-control text-white">
                        <label>Keyword</label>
                    </div>
                </div>
                <div class="invalid-feedback mb-3">Enter valid data </div>
            </div>
            <div class="mb-4">
                <div class="form-group mb-2 position-relative">
                    <div class="form-floating">
                        <div class="form-floating">
                            <select class="form-select">
                                <option value="20">20</option>
                                <option value="10">10</option>
                                <option value="80">80</option>
                                <option value="70">70</option>
                            </select>
                            <label>Discount</label>
                        </div>
                    </div>
                </div>
                <div class="invalid-feedback mb-3">Enter valid data </div>
            </div>
            <!-- filter fields ends-->

            <button class="btn btn-white btn-rounded shadow-sm w-100 filter-btn">Apply</button>

        </div>
    </div>
    <!-- Rightbar ends -->


    <!-- Required jquery and libraries -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/vendor/bootstrap-5/dist/js/bootstrap.bundle.js"></script>
    <!-- Customized jquery file  -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/color-scheme.js"></script>
    <script src="assets/momentjs/latest/moment.min.js"></script>
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
                    "enabled": false
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