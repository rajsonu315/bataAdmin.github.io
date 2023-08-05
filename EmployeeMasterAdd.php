<?php

include('header.php')
?>

<div class="col position-relative page-content">
    <!-- content page -->

    <!-- page title bar -->
    <div class="row align-items-center page-title">
        <div class="col text-center">
            <h4>Employee 
                <span class="text-gradient"> Master</span> 
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
                <div class="row align-items-center mb-3">
                    <div class="col">

                    </div>
                    <div class="col-auto">
                    </div>
                </div>
                <div class="card border-0 overflow-hidden position-relative z-index-1 mb-4">
                    <div class="card-body">

                        <form action="">
                            <div class="row">
                                <div class="col-12 col-md-6 mb-2">
                                    <div class="form-group mb-3 position-relative  ">
                                        <div class="form-floating">
                                            <input type="text" placeholder="EID" name="EID" required="" class="form-control ">
                                            <label>EID</label>
                                        </div>
                                    </div>
                                    <div class="invalid-feedback mb-3">Add valid data </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group mb-3 position-relative ">
                                        <div class="form-floating">
                                            <input type="text" placeholder="Employee Name" name="Employee_Name" required="" class="form-control ">
                                            <label>Employee Name</label>
                                        </div>
                                    </div>
                                    <div class="invalid-feedback mb-3">Add valid data </div>
                                </div>
                                <div class="col-12 col-md-6 mb-2">
                                    <div class="form-group mb-3 position-relative  ">
                                        <div class="form-floating">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected> select Role</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="invalid-feedback mb-3">Add valid data </div>
                            </div>



                    </div>
                    <button class="btn btn-md btn-rounded btn-theme">Update</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>





<!-- content page ends -->
</div>

<?php

include('footer.php')
?>