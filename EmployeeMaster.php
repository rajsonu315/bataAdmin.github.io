<?php

include('header.php')
?>

<div class="col position-relative page-content">
    <div class="container px-0">

        <!-- Grid table-->
        <div class="card border-0 mb-4">
            <div class="card-header">

                <div class="row align-items-center page-title">
                    <div class="col-12 col-md mb-2 mb-sm-0">
                        <h6 class="mb-0">Employee Master</h6>
                        <!-- <p class="text-secondary small">User list can be intuitive and usable not just with table grid.</p>  -->
                    </div>

                    <div class="col-auto ps-0 position-relative">

                        <a href="#" class="btn btn-md btn-theme btn-rounded "><i class="bi bi-cloud-download me-1"></i> Download</a>
                        <a href="./EmployeeMasterUpload.php" class="btn btn-md btn-white btn-rounded "><i class="bi bi-cloud-upload me-1"></i> Upload</a>
                        <a href="./EmployeeMasterAdd.php" class="btn btn-md btn-white btn-rounded "><i class="bi bi-plus-circle me-1"></i> Add</a>


                    </div>
                </div>






                <div class="row">
                    <div class="col-auto">
                        <i class="bi bi-shop h5 avatar avatar-40 bg-light-theme rounded"></i>
                    </div>
                    <div class="col-auto align-self-center">
                        <!-- <h6 class="d-inline-block mb-0">Tickets Raised</h6> -->
                        <p class="text-secondary small">Employee Master</p>
                    </div>
                    <!-- <div class="col-12 col-md-5 col-lg-4 col-xl-4 col-xxl-3">
                                        <div class="rounded ">
                                            <select class="multichosen one w-100">
                                                <option>All Categories</option>
                                                <optgroup label="Food">
                                                    <option>- Work</option>
                                                    <option>- Home</option>
                                                </optgroup>
                                                <optgroup label="Children">
                                                    <option>- Fees</option>
                                                    <option>- Enjoyment</option>
                                                </optgroup>
                                                <optgroup label="Transportation">
                                                    <option>- Personal</option>
                                                    <option>- Work</option>
                                                </optgroup>
                                                <optgroup label="Home">
                                                    <option>- Rent</option>
                                                    <option>- Maintenance</option>
                                                </optgroup>
                                                <option>Personal</option>
                                                <option>Other</option>
                                            </select>
                                        </div>
                                    </div> -->
                    <div class="col-auto ms-auto" id="searchcontainer">
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table footable" data-show-toggle="true">
                    <thead>
                        <tr class="">
                            <th class="w-12"></th>
                            <th class="">ID</th>
                            <th>Raised By</th>
                            <th data-breakpoints="xs sm">Contact Details</th>
                            <th data-breakpoints="xs sm">Assigned To</th>
                            <th data-breakpoints="xs">Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td>2054ID</td>
                            <td>
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-50 mb-0 coverimg rounded-circle">
                                            <img src="assets/img/user-1.jpg" alt="" />
                                        </figure>
                                    </div>
                                    <div class="col ps-0">
                                        <p class="mb-0">David Warner</p>
                                        <p class="text-secondary small">United Kingdom</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="mb-0">david@sales..core.com</p>
                                <p class="text-secondary small">+44 8466585****1154</p>
                            </td>
                            <td>
                                <p class="mb-0">Jr. Sing</p>
                                <p class="text-secondary small">Technical Helpdesk</p>
                            </td>
                            <td>
                                <span class="badge badge-sm bg-yellow">Pending</span>
                            </td>
                            <td>
                                <a href="./EmployeeMasterEdit.php" class="btn btn-md btn-white  btn-rounded "><i class="bi bi-pencil me-1"></i> </a>
                                <a href="#" class="btn btn-md  btn-theme btn-rounded "><i class="bi bi-trash me-1"></i> </a>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>105ID</td>
                            <td>
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-50 mb-0 coverimg rounded-circle">
                                            <img src="assets/img/user-2.jpg" alt="" />
                                        </figure>
                                    </div>
                                    <div class="col ps-0">
                                        <p class="mb-0">Winnie John</p>
                                        <p class="text-secondary small">Australia</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="mb-0">winnie@sales..core.com</p>
                                <p class="text-secondary small">+44 8466585****1154</p>
                            </td>
                            <td>
                                <p class="mb-0">Brett Lee</p>
                                <p class="text-secondary small">Assi. Server Expert</p>
                            </td>
                            <td>
                                <span class="badge badge-sm bg-blue">Waiting</span>
                            </td>
                            <td>
                                <a href="./EmployeeMasterEdit.php" class="btn btn-md btn-white  btn-rounded "><i class="bi bi-pencil me-1"></i> </a>
                                <a href="#" class="btn btn-md  btn-theme btn-rounded "><i class="bi bi-trash me-1"></i> </a>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>058ID</td>
                            <td>
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-50 mb-0 coverimg rounded-circle">
                                            <img src="assets/img/user-3.jpg" alt="" />
                                        </figure>
                                    </div>
                                    <div class="col ps-0">
                                        <p class="mb-0">Alicia Smith</p>
                                        <p class="text-secondary small">United States</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="mb-0">alicia@sales..core.com</p>
                                <p class="text-secondary small">+44 8466585****1154</p>
                            </td>
                            <td>
                                <p class="mb-0">Gal Seddist</p>
                                <p class="text-secondary small">Finance Head</p>
                            </td>
                            <td>
                                <span class="badge badge-sm bg-green">Complete</span>
                            </td>
                            <td>
                                <a href="./EmployeeMasterEdit.php" class="btn btn-md btn-white  btn-rounded "><i class="bi bi-pencil me-1"></i> </a>
                                <a href="#" class="btn btn-md  btn-theme btn-rounded "><i class="bi bi-trash me-1"></i> </a>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>500ID</td>
                            <td>
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-50 mb-0 coverimg rounded-circle">
                                            <img src="assets/img/user-4.jpg" alt="" />
                                        </figure>
                                    </div>
                                    <div class="col ps-0">
                                        <p class="mb-0">Jr. Chen Li</p>
                                        <p class="text-secondary small">United Kingdom</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="mb-0">cheli@sales..core.com</p>
                                <p class="text-secondary small">+44 8466585****1154</p>
                            </td>
                            <td>
                                <p class="mb-0">Tech Guruji</p>
                                <p class="text-secondary small">Product Manager</p>
                            </td>
                            <td>
                                <span class="badge badge-sm bg-red">Rejected</span>
                            </td>
                            <td>
                                <a href="./EmployeeMasterEdit.php" class="btn btn-md btn-white  btn-rounded "><i class="bi bi-pencil me-1"></i> </a>
                                <a href="#" class="btn btn-md  btn-theme btn-rounded "><i class="bi bi-trash me-1"></i> </a>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>2054ID</td>
                            <td>
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-50 mb-0 coverimg rounded-circle">
                                            <img src="assets/img/user-1.jpg" alt="" />
                                        </figure>
                                    </div>
                                    <div class="col ps-0">
                                        <p class="mb-0">David Warner</p>
                                        <p class="text-secondary small">United Kingdom</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="mb-0">david@sales..core.com</p>
                                <p class="text-secondary small">+44 8466585****1154</p>
                            </td>
                            <td>
                                <p class="mb-0">Jr. Sing</p>
                                <p class="text-secondary small">Technical Helpdesk</p>
                            </td>
                            <td>
                                <span class="badge badge-sm bg-yellow">Pending</span>
                            </td>
                            <td>
                                <a href="./EmployeeMasterEdit.php" class="btn btn-md btn-white  btn-rounded "><i class="bi bi-pencil me-1"></i> </a>
                                <a href="#" class="btn btn-md  btn-theme btn-rounded "><i class="bi bi-trash me-1"></i> </a>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>105ID</td>
                            <td>
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-50 mb-0 coverimg rounded-circle">
                                            <img src="assets/img/user-2.jpg" alt="" />
                                        </figure>
                                    </div>
                                    <div class="col ps-0">
                                        <p class="mb-0">Winnie John</p>
                                        <p class="text-secondary small">Australia</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="mb-0">winnie@sales..core.com</p>
                                <p class="text-secondary small">+44 8466585****1154</p>
                            </td>
                            <td>
                                <p class="mb-0">Brett Lee</p>
                                <p class="text-secondary small">Assi. Server Expert</p>
                            </td>
                            <td>
                                <span class="badge badge-sm bg-blue">Waiting</span>
                            </td>
                            <td>
                                <a href="./EmployeeMasterEdit.php" class="btn btn-md btn-white  btn-rounded "><i class="bi bi-pencil me-1"></i> </a>
                                <a href="#" class="btn btn-md  btn-theme btn-rounded "><i class="bi bi-trash me-1"></i> </a>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>058ID</td>
                            <td>
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-50 mb-0 coverimg rounded-circle">
                                            <img src="assets/img/user-3.jpg" alt="" />
                                        </figure>
                                    </div>
                                    <div class="col ps-0">
                                        <p class="mb-0">Alicia Smith</p>
                                        <p class="text-secondary small">United States</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="mb-0">alicia@sales..core.com</p>
                                <p class="text-secondary small">+44 8466585****1154</p>
                            </td>
                            <td>
                                <p class="mb-0">Gal Seddist</p>
                                <p class="text-secondary small">Finance Head</p>
                            </td>
                            <td>
                                <span class="badge badge-sm bg-green">Complete</span>
                            </td>
                            <td>
                                <a href="./EmployeeMasterEdit.php" class="btn btn-md btn-white  btn-rounded "><i class="bi bi-pencil me-1"></i> </a>
                                <a href="#" class="btn btn-md  btn-theme btn-rounded "><i class="bi bi-trash me-1"></i> </a>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>500ID</td>
                            <td>
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <figure class="avatar avatar-50 mb-0 coverimg rounded-circle">
                                            <img src="assets/img/user-4.jpg" alt="" />
                                        </figure>
                                    </div>
                                    <div class="col ps-0">
                                        <p class="mb-0">Jr. Chen Li</p>
                                        <p class="text-secondary small">United Kingdom</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="mb-0">cheli@sales..core.com</p>
                                <p class="text-secondary small">+44 8466585****1154</p>
                            </td>
                            <td>
                                <p class="mb-0">Tech Guruji</p>
                                <p class="text-secondary small">Product Manager</p>
                            </td>
                            <td>
                                <span class="badge badge-sm bg-red">Rejected</span>
                            </td>
                            <td>
                                <a href="./EmployeeMasterEdit.php" class="btn btn-md btn-white  btn-rounded "><i class="bi bi-pencil me-1"></i> </a>
                                <a href="#" class="btn btn-md  btn-theme btn-rounded "><i class="bi bi-trash me-1"></i> </a>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div class="row align-items-center mx-0 mb-3">
                    <div class="col-6 ">
                        <span class="hide-if-no-paging">
                            Showing <span id="footablestot"></span> page
                        </span>
                    </div>
                    <div class="col-6 text-end" id="footable-pagination"></div>
                </div>
            </div>
        </div>
    </div>


    <!-- content page ends -->
</div>

<?php

include('footer.php')
?>