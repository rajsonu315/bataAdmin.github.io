<?php

include('header.php')
?>

<div class="col position-relative page-content">
    <!-- content page -->


    <!-- Trending products ends -->

    <div class="row mb-4 py-2">
        <div class="col text-center">
            <h4>User <span class="text-gradient">Manager</span> </h4>
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
                            <p class="text-secondary small">User Manager
                            </p>
                        </div>

                        <div class="col-auto ms-auto" id="searchcontainer">
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table table-border footable" data-show-toggle="true">
                        <thead>
                            <tr class="">
                                <th class="w-12"></th>
                                <th class="">User_Id</th>
                                <th data-breakpoints="xs md">Name</th>
                                <th data-breakpoints="xs">Role</th>
                                <th data-breakpoints="xs md">Emp_ID</th>
                                <th data-breakpoints="xs md">Role_Type</th>
                                <th data-breakpoints="xs md">View_Rights</th>


                                <th class="w-auto">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td>
                                    <p class="text-secondary small">12 Piece, SKUID: SH02521</p>
                                </td>
                                <td>

                                    <p class="text-secondary small">Fruits</p>
                                </td>
                                <td>

                                    <p class="text-secondary small">USD</p>
                                </td>
                                <td>

                                    <p class="text-secondary small">john@gmailtestid.com</p>
                                </td>
                                <td>

                                    <p class="text-secondary small">9:00 am</p>
                                </td>
                                <td>
                                    Delivered
                                </td>
                                <td>
                                    John Johnson
                                </td>

                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <p class="text-secondary small">12 Piece, SKUID: SH02521</p>
                                </td>
                                <td>

                                    <p class="text-secondary small">Fruits</p>
                                </td>
                                <td>

                                    <p class="text-secondary small">USD</p>
                                </td>
                                <td>

                                    <p class="text-secondary small">john@gmailtestid.com</p>
                                </td>
                                <td>

                                    <p class="text-secondary small">9:00 am</p>
                                </td>
                                <td>
                                    Delivered
                                </td>
                                <td>
                                    John Johnson
                                </td>

                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <p class="text-secondary small">12 Piece, SKUID: SH02521</p>
                                </td>
                                <td>

                                    <p class="text-secondary small">Fruits</p>
                                </td>
                                <td>

                                    <p class="text-secondary small">USD</p>
                                </td>
                                <td>

                                    <p class="text-secondary small">john@gmailtestid.com</p>
                                </td>
                                <td>

                                    <p class="text-secondary small">9:00 am</p>
                                </td>
                                <td>
                                    Delivered
                                </td>
                                <td>
                                    John Johnson
                                </td>

                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <p class="text-secondary small">12 Piece, SKUID: SH02521</p>
                                </td>
                                <td>

                                    <p class="text-secondary small">Fruits</p>
                                </td>
                                <td>

                                    <p class="text-secondary small">USD</p>
                                </td>
                                <td>

                                    <p class="text-secondary small">john@gmailtestid.com</p>
                                </td>
                                <td>

                                    <p class="text-secondary small">9:00 am</p>
                                </td>
                                <td>
                                    Delivered
                                </td>
                                <td>
                                    John Johnson
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







    <div class="row">
        <div class="col-12 col-md-12 col-lg-12 col-xxl mb-12">
            <div class="card border-0">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="card-body">
                            <span>
                                <span class="notificationRequest"><strong>Request Permission</strong></span></span>
                            <div class="error"></div>
                        </div>
                        <form action="" method="post">
                            <div class="table-responsive">
                                <table class="table table-striped table-border border-bottom ">
                                    <thead>
                                        <tr>
                                            <th class="text-nowrap">Rights</th>
                                            <th class="text-nowrap text-center"> View</th>
                                            <th class="text-nowrap text-center"> Edit</th>
                                            <th class="text-nowrap text-center"> Add</th>
                                            <th class="text-nowrap text-center"> Delete</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap">STIP Master</td>
                                            <td>
                                                <div class="form-check d-flex justify-content-center">
                                                    <input class="form-check-input" type="checkbox" id="defaultCheck1" checked />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check d-flex justify-content-center">
                                                    <input class="form-check-input" type="checkbox" id="defaultCheck2" checked />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check d-flex justify-content-center">
                                                    <input class="form-check-input" type="checkbox" id="defaultCheck3" checked />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check d-flex justify-content-center">
                                                    <input class="form-check-input" type="checkbox" id="defaultCheck12" />
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap">Hierarchy Master</td>
                                            <td>
                                                <div class="form-check d-flex justify-content-center">
                                                    <input class="form-check-input" type="checkbox" id="defaultCheck4" checked />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check d-flex justify-content-center">
                                                    <input class="form-check-input" type="checkbox" id="defaultCheck5" checked />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check d-flex justify-content-center">
                                                    <input class="form-check-input" type="checkbox" id="defaultCheck6" checked />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check d-flex justify-content-center">
                                                    <input class="form-check-input" type="checkbox" id="defaultCheck12" />
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap">Employee Master
                                            </td>
                                            <td>
                                                <div class="form-check d-flex justify-content-center">
                                                    <input class="form-check-input" type="checkbox" id="defaultCheck7" checked />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check d-flex justify-content-center">
                                                    <input class="form-check-input" type="checkbox" id="defaultCheck8" checked />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check d-flex justify-content-center">
                                                    <input class="form-check-input" type="checkbox" id="defaultCheck9" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check d-flex justify-content-center">
                                                    <input class="form-check-input" type="checkbox" id="defaultCheck12" />
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap">Achievement Master</td>
                                            <td>
                                                <div class="form-check d-flex justify-content-center">
                                                    <input class="form-check-input" type="checkbox" id="defaultCheck10" checked />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check d-flex justify-content-center">
                                                    <input class="form-check-input" type="checkbox" id="defaultCheck11" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check d-flex justify-content-center">
                                                    <input class="form-check-input" type="checkbox" id="defaultCheck12" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check d-flex justify-content-center">
                                                    <input class="form-check-input" type="checkbox" id="defaultCheck12" />
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="text-nowrap">Edit Roles</td>
                                            <td>
                                                <div class="form-check d-flex justify-content-center">
                                                    <input class="form-check-input" type="checkbox" id="defaultCheck10" checked />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check d-flex justify-content-center">
                                                    <input class="form-check-input" type="checkbox" id="defaultCheck11" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check d-flex justify-content-center">
                                                    <input class="form-check-input" type="checkbox" id="defaultCheck12" />
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-check d-flex justify-content-center">
                                                    <input class="form-check-input" type="checkbox" id="defaultCheck12" />
                                                </div>
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="mt-4 pull-left" style="float: right;">
                                <button type="submit" class="btn btn-md btn-theme btn-rounded">Save changes</button>
                            </div>

                        </form>





                        <!-- /Notifications -->
                    </div>
                </div>
            </div>
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
                            <p class="text-secondary small">User Manager
                            </p>
                        </div>

                        <div class="col-auto ms-auto" id="searchcontainer">
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <table class="table table-border  " data-show-toggle="true">
                        <thead>
                            <tr class="">
                                <th class="w-12"></th>
                                <th class="">Role</th>
                                <th data-breakpoints="xs md">Rights</th>
                                <th data-breakpoints="xs">Created_Date</th>
                            


                                <th class="w-auto">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td>
                                    <p class="text-secondary small">12 Piece, SKUID: SH02521</p>
                                </td>
                                <td>

                                    <p class="text-secondary small">Fruits</p>
                                </td>
                                <td>

                                    <p class="text-secondary small">USD</p>
                                </td>
                                <td>

                                    <p class="text-secondary small">john@gmailtestid.com</p>
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




</div>







<?php

include('footer.php')
?>