<?php

include('header.php')
?>

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
                <div class="card-header">

                    <div class="row align-items-center page-title">
                        <div class="col-12 col-md mb-2 mb-sm-0">
                            <!-- <h6 class="mb-0">Achievement Master</h6> -->
                            <!-- <p class="text-secondary small">User list can be intuitive and usable not just with table grid.</p>  -->
                        </div>

                        <div class="col-auto ps-0 position-relative">



                            <a href="#" class="btn btn-lg btn-theme btn-rounded "><i class="bi bi-cloud-download me-1"></i> Download</a>
                            <a href="#" class="btn btn-lg btn-white btn-rounded "><i class="bi bi-cloud-upload me-1"></i> Upload</a>


                        </div>
                    </div>
                    <div class="row">
                        <div class="col-auto">
                            <i class="bi bi-shop h5 avatar avatar-40 bg-light-theme rounded"></i>
                        </div>
                        <div class="col-auto align-self-center">
                            <!-- <h6 class="d-inline-block mb-0">Tickets Raised</h6> -->
                            <p class="text-secondary small">Achievement Master
                            </p>
                        </div>

                        <div class="col-auto ms-auto" id="searchcontainer">
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table table-border footable " data-show-toggle="true">
                        <thead>
                            <tr class="">

                                <th class="">Emp Name</th>
                                <th data-breakpoints="xs md">Function</th>
                                <th data-breakpoints="xs">KPI</th>
                                <th data-breakpoints="xs md"> Target</th>
                                <th data-breakpoints="xs md">Achievement</th>
                                <th data-breakpoints="xs md">Request</th>
                                <th data-breakpoints="xs md">Action</th>



                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                <td>

                                    <p class="text-secondary small">12 Piece, SKUID: SH02521</p>
                                </td>
                                <td>

                                    <p class="text-secondary small">123456</p>
                                </td>

                                <td>

                                    <p class="text-secondary small">john@gmailtestid.com</p>
                                </td>
                                <td>

                                    <p class="text-secondary small">USD</p>
                                </td>


                                <td>
                                    <span class="badge badge-sm bg-green">Paid</span>
                                </td>
                                <td>

                                    <p class="text-secondary small">USD</p>
                                </td>


                                <td>
                                <a href="#" class="btn btn-md btn-white  btn-rounded "><i class="bi bi-pencil me-1"></i> </a>
                                <a href="#" class="btn btn-md  btn-theme btn-rounded "><i class="bi bi-trash me-1"></i> </a>
                            </td>

                            </tr>
                            <tr>

                                <td>

                                    <p class="text-secondary small">12 Piece, SKUID: SH02521</p>
                                </td>
                                <td>

                                    <p class="text-secondary small">123456</p>
                                </td>

                                <td>

                                    <p class="text-secondary small">john@gmailtestid.com</p>
                                </td>
                                <td>

                                    <p class="text-secondary small">USD</p>
                                </td>


                                <td>
                                    <span class="badge badge-sm bg-green">Paid</span>
                                </td>
                                <td>

                                    <p class="text-secondary small">USD</p>
                                </td>


                                <td>
                                <a href="#" class="btn btn-md btn-white  btn-rounded "><i class="bi bi-pencil me-1"></i> </a>
                                <a href="#" class="btn btn-md  btn-theme btn-rounded "><i class="bi bi-trash me-1"></i> </a>
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

<?php

include('footer.php')
?>