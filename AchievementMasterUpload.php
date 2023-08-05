<?php

include('header.php')
?>
<!-- dropzone slider -->
<link rel="stylesheet" href="assets/vendor/dropzone5-9-3/dropzone.min.css">

<div class="col position-relative page-content">
    <!-- content page -->

    <!-- page title bar -->
    <div class="row align-items-center page-title">
        <div class="col text-center">
            <h4>Achievement
                <span class="text-gradient"> Master</span> Tab
            </h4>
            <p class="text-secondary"></p>
        </div>
    </div>
    <!-- page title bar ends -->


    <!-- Trending products ends -->


    <div class="row">
        <!-- Orders -->
        <div class="col-12 col-md-12 position-relative">
            <div class="card border-0 mb-4">
                <div class="card-body">
                    <form action="" class="dropzone py-4 mb-3">

                        <div class="col-12 col-md-6 mb-2">
                            <div class="form-group mb-3 position-relative  ">
                                <div class="form-floating">

                                    <input type="file" class="file" class="form-control ">
                                </div>
                                <div class="form-floating">
                                </div>
                                <div class="invalid-feedback mb-3">Add valid data </div>
                            </div>

                            <button class="btn btn-md btn-rounded btn-theme">Upload </button>
                            <button class="btn btn-md btn-rounded btn-dark" onclick="history.back()">Back </button>


                    </form>
                </div>
            </div>
        </div>
    </div>





    <!-- content page ends -->
</div>

<?php

include('footer.php')
?>