<?php 

 include 'include/database_connect.php';
 include 'include/security_token.php';


 ?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>GYM Managment-SOFTWARE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
    <meta content="Themesbrand" name="author">
    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">

    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="assets/css/toastr.min.css">
    <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="assets/css/deleteModal.css">
</head>

<body data-sidebar="dark">


    <!-- Loader -->
    <!--  <div id="preloader"><div id="status"><div class="spinner"></div></div></div> -->

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="index.php" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="assets/images/it-fast.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/it-fast.png" alt="" height="17">
                            </span>
                        </a>

                        <a href="index.php" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="assets/images/it-fast.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/it-fast.png" alt="" height="36">
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                        <i class="mdi mdi-menu"></i>
                    </button>

                    <div class="d-none d-sm-block ms-2">
                        <h4 class="page-title">Customer Add</h4>
                    </div>
                </div>



                <div class="d-flex">





                    <div class="dropdown d-none d-md-block me-2">
                        <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="font-size-16">
                                <?php

                                if (isset($_SESSION['username'])) {
                                    echo $_SESSION['username'];
                                }

                                ?>
                            </span>
                        </button>
                    </div>


                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg" alt="Header Avatar">
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item text-danger" href="logout.php">Logout</a>
                        </div>
                    </div>

                    <div class="dropdown d-inline-block me-2">
                        <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="ion ion-md-notifications"></i>
                            <span class="badge bg-danger rounded-pill">3</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h5 class="m-0 font-size-16"> Notification (3) </h5>
                                    </div>
                                </div>
                            </div>
                            <div data-simplebar style="max-height: 230px;">
                                <a href="" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="avatar-xs me-3">
                                            <span class="avatar-title bg-success rounded-circle font-size-16">
                                                <i class="mdi mdi-cart-outline"></i>
                                            </span>
                                        </div>
                                        <div class="flex-1">
                                            <h6 class="mt-0 font-size-15 mb-1">Your order is placed</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1">Dummy text of the printing and typesetting industry.</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="avatar-xs me-3">
                                            <span class="avatar-title bg-warning rounded-circle font-size-16">
                                                <i class="mdi mdi-message-text-outline"></i>
                                            </span>
                                        </div>
                                        <div class="flex-1">
                                            <h6 class="mt-0 font-size-15 mb-1">New Message received</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1">You have 87 unread messages</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="avatar-xs me-3">
                                            <span class="avatar-title bg-info rounded-circle font-size-16">
                                                <i class="mdi mdi-glass-cocktail"></i>
                                            </span>
                                        </div>
                                        <div class="flex-1">
                                            <h6 class="mt-0 font-size-15 mb-1">Your item is shipped</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1">It is a long established fact that a reader will</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                            </div>
                            <div class="p-2 border-top">
                                <div class="d-grid">
                                    <a class="btn btn-sm btn-link font-size-14  text-center" href="javascript:void(0)">
                                        View all
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </header>

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <?php include 'Menu/menu.php'; ?>

                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container d-none" id="mainDiv">
                    <div class="row">
                        <div class="col-md-8 m-auto">
                            <div class="card">
                                <div class="card-header bg-primary  text-center text-white">Add New Customer </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Name</label>
                                                    <input type="text" id="name" class="form-control" placeholder="Enter Your Name">
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Father Name</label>
                                                    <input type="text" id="father_name" class="form-control" placeholder="Enter Father Name">
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Mobile</label>
                                                    <input type="text" id="mobile" class="form-control" placeholder="Enter Your Mobile">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Package</label>
                                                    <select type="text" id="package" class="form-select">
                                                        <option>Select</option>
                                                        <?php
                                                        if ($allPackag = $con->query("SELECT * FROM package ")) {
                                                            while ($rows = $allPackag->fetch_array()) {
                                                                echo '<option value=' . $rows['package_id'] . '>' . $rows['package_name'] . '</option>';
                                                            }
                                                        }



                                                        ?>


                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Address</label>
                                                    <input type="text" id="address" class="form-control" placeholder="Type Your Address" />
                                                </div>
                                            </div>

                                            
                                        </div>
                                        <div class="row">
                                            
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Profession</label>
                                                    <input type="text" id="profession" class="form-control" placeholder="Type Your Profession">
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Gender</label>
                                                    <select type="text" id="gender" class="form-select">
                                                        <option value="">select</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Nid Card No.</label>
                                                    <input type="text" id="nid" class="form-control" placeholder="Enter Your Nid">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Hight</label>
                                                    <input type="text" id="hight" class="form-control" placeholder="Type Your Height">
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Weight</label>
                                                    <input type="text" id="weight" class="form-control" placeholder="Enter Your Weight">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Trainer Asign</label>
                                                    <select type="text" id="teacher_asign"  class="form-select">
                                                        <option>Select</option>

                                                        <?php
                                                        if ($allTeacher = $con->query("SELECT * FROM teacher  ")) {
                                                            while ($rows = $allTeacher->fetch_array()) {
                                                                echo '<option value=' . $rows['id'] . '>' . $rows['fullname'] . '</option>';
                                                            }
                                                        }



                                                        ?>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Reference</label>
                                                    <input type="text" id="reference" class="form-control" placeholder="Type Your Reference" />
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Blood Group</label>
                                                    <select type="text" id="blood_group" class="form-select" placeholder="Type Your Reference" >
                                                        <option>Select Blood </option>
                                                        <option>A+</option>
                                                        <option>A-</option>
                                                        <option>B+</option>
                                                        <option>B-</option>
                                                        <option>O+</option>
                                                        <option>O-</option>
                                                        <option>AB+</option>
                                                        <option>AB-</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Package Price</label>
                                                    <input disabled type="text" id="price"  class="form-control" />
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Discount</label>
                                                    <input type="text" id="discount" class="form-control" placeholder="Type Your Discount" />
                                                </div>
                                            </div>
                                            

                                        </div>
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Paid</label>
                                                    <input type="text" id="paid" name="paid" class="form-control" placeholder="Type Your Paid Amount" />
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Due</label>
                                                    <input disabled type="text" id="due" class="form-control" value="">
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Grand Total</label>
                                                    <input disabled type="text" id="total" class="form-control" value="">
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </form>
                                </div>
                                <div class="card-footer">

                                    <a href="index.php" class=" btn btn-danger">Back</a>
                                    <button class=" btn btn-primary" id="addBtn">Add Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div id="loaderDiv" class="container">
                    <div class="row">
                        <div class="col-md-12 text-center mt-5">
                            <div class="text-center mt-5 ">
                                <div class="spinner-border" role="status">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Page-content -->









            <?php include 'Footer/footer.php'; ?>

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>
    <!-- JAVASCRIPT -->
    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script> >
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <script src="assets/libs/select2/js/select2.min.js"></script>
    <script type="text/javascript" src="assets/js/toastr.min.js"></script>
    <script type="text/javascript" src="assets/js/toastr.init.js"></script>


    <script src="assets/js/app.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            //$("#package").select2();
            setTimeout(() => {
                $("#loaderDiv").addClass('d-none');
                $("#mainDiv").removeClass('d-none');
            }, 1000);
            $("#package").on('change', function() {
                var package = $('#package').val();
                var getPackageVAL = "0";
                $.ajax({
                    url: 'include/package.php',
                    type: 'POST',
                    data: {
                        getPackageVAL: getPackageVAL,
                        id: package
                    },
                    success: function(response) {
                        //console.log(response);
                        var jsonData = JSON.parse(response);
                        var price = $("#price").val(jsonData.package_price);
                        $("#total").val(jsonData.package_price);
                    }
                });
            });

            $('#paid').keyup(function() {
                let paid = Number($(this).val());
                let total = Number($('#total').val());
                let due = total - paid;
                $('#due').val(due);
            });

            $('#discount').keyup(function() {
                let price = Number($('#price').val());
                let discount = Number($(this).val());
                let get_amount = price * discount / 100;
                let discount_amount = price - get_amount;
                $('#total').val(discount_amount)
            });
            $("#addBtn").click(function() {
                var name = $("#name").val();
                var father_name = $("#father_name").val();
                var mobile = $("#mobile").val();
                var package = $("#package").val();
                var address = $("#address").val();
                var profession = $("#profession").val();
                var gender = $("#gender").val();
                var nid = $("#nid").val();
                var hight = $("#hight").val();
                var weight = $("#weight").val();
                var teacher_asign = $("#teacher_asign").val();
                var reference = $("#reference").val();
                var blood_group = $("#blood_group").val();
                var price = $("#price").val();
                var discount = $("#discount").val();
                var paid = $("#paid").val();
                var due = $("#due").val();
                var total = $("#total").val();
                addData(name, father_name, mobile, package, address, profession, nid, hight, weight, teacher_asign, reference, blood_group, price, discount, paid, due,total,gender);

            });

            function addData(name, father_name, mobile, package, address, profession, nid, hight, weight, teacher_asign, reference, blood_group, price, discount, paid, due,total,gender) {
                if (name.length == 0) {
                    toastr.error("Name is require");
                } else if (mobile.length == 0) {
                    toastr.error("Mobile Number is require");
                } else if (address.length == 0) {
                    toastr.error("Address is require");
                } else if (package.length == 0) {
                    toastr.error("Package is require");
                }else if(nid.length==0){
                    toastr.error("Nid Card No is require");
                }else if(paid.length==0){
                    toastr.error("Paid Amount is require");
                }else if(gender.length==0){
                    toastr.error("Gender is require");
                }
                 else {
                    var addCustomerData = "0";
                    $.ajax({
                        url: 'include/customers.php',
                        type: 'POST',
                        data: {
                            addCustomerData: addCustomerData,
                            name: name,
                            father_name: father_name,
                            mobile: mobile,
                            package: package,
                            address: address,
                            profession: profession,
                            nid: nid,
                            hight: hight,
                            weight: weight,
                            teacher_asign: teacher_asign,
                            reference: reference,
                            blood_group: blood_group,
                            price: price,
                            paid: paid,
                            discount: discount,
                            due: due,
                            total: total,
                            gender:gender
                        },
                        success: function(response) {
                            if (response == 1) {
                                toastr.success("Add Successfully");
                                $("#addModal").modal('hide');
                                setTimeout(() => {
                                   location.reload(); 
                                }, 1000);
                            }else if(response==2){
                                toastr.error("Try Another Mobile Number");
                            } 
                            else {
                                toastr.error("Please Try Again");
                            }

                        }
                    });
                }
            }
        });
    </script>
</body>

</html>