<?php 

 include 'include/security_token.php';
include 'include/database_connect.php';

if (isset($_GET['id'])) {
    $profileId= $_GET['id'];

    if ($allCustomer=$con->query("SELECT * FROM `customers` INNER JOIN package ON customers.package_id=package.package_id WHERE id=$profileId")) {
       while ($rows=$allCustomer->fetch_array()) {
            $id=$rows['id'];
            $fullname=$rows['customer_name'];
            $father_name=$rows['father_name'];
            $address=$rows['address'];
            $expire_date=$rows['expire_date'];
            $profession=$rows['profession'];
            $reference=$rows['reference'];
            $teacher_asign=$rows['teacher_asign'];
            $nid=$rows['nid'];
            $paid=$rows['paid'];
            $discount=$rows['discount'];
            $due=$rows['due'];
            $mobile=$rows['mobile'];
            $hight=$rows['hight'];
            $weight=$rows['weight'];
            $blood_group=$rows['blood_group'];
            $package_id=$rows['package_id'];
            $price=$rows['price'];
            $date=$rows['date'];
            $status=$rows['status'];
            $package_name=$rows['package_name'];
        } 
    }
}


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
                        <h4 class="page-title">Customer Update</h4>
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
                                <div class="card-header bg-success  text-center text-white">Update Customer </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Name</label>
                                                    <input type="text" id="name" class="form-control" value="<?php echo $fullname; ?>">
                                                    <input type="text" id="id" class="d-none" value="<?php echo $id; ?>">
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Father Name</label>
                                                    <input type="text" id="father_name" class="form-control" value="<?php echo $father_name; ?>">
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Address</label>
                                                    <input type="text" id="address" class="form-control" value="<?php echo $address; ?>"/>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Mobile</label>
                                                    <input type="text" id="mobile" class="form-control" value="<?php echo $mobile; ?>">
                                                </div>
                                            </div>

                                            
                                        </div>
                                        <div class="row">
                                            
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Profession</label>
                                                    <input type="text" id="profession" class="form-control" value="<?php echo $profession; ?>">
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Nid Card No.</label>
                                                    <input type="text" id="nid" class="form-control" value="<?php echo $nid; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Hight</label>
                                                    <input type="text" id="hight" class="form-control" value="<?php echo $hight; ?>">
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Weight</label>
                                                    <input type="text" id="weight" class="form-control" value="<?php echo $weight; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Reference</label>
                                                    <input type="text" id="reference" class="form-control" value="<?php echo $reference; ?>" />
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Blood Group</label>
                                                    <select type="text" id="blood_group" class="form-select" placeholder="Type Your Reference" >
                                                        <option value="<?php echo $blood_group; ?>"><?php echo $blood_group; ?></option>
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
                                       
                                    </form>
                                </div>
                                <div class="card-footer">

                                    <a onclick="history.back();" class=" btn btn-danger">Back</a>
                                    <button class=" btn btn-primary" id="updateBtn">Update Now</button>
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
            $("#updateBtn").click(function() {
                var id = $("#id").val();
                var name = $("#name").val();
                var father_name = $("#father_name").val();
                var mobile = $("#mobile").val();
                var address = $("#address").val();
                var profession = $("#profession").val();
                var nid = $("#nid").val();
                var hight = $("#hight").val();
                var weight = $("#weight").val();
                var reference = $("#reference").val();
                var blood_group = $("#blood_group").val();
                addData(id,name, father_name, mobile, address, profession, nid, hight, weight, reference, blood_group);

            });

            function addData(id,name, father_name, mobile, address, profession, nid, hight, weight, reference, blood_group) {
                if (name.length == 0) {
                    toastr.error("Name is require");
                } else if (mobile.length == 0) {
                    toastr.error("Mobile Number is require");
                } else if (address.length == 0) {
                    toastr.error("Address is require");
                }else if(nid.length==0){
                    toastr.error("Nid Card No is require");
                }
                 else {
                    var updateCustomerData = "0";
                    $.ajax({
                        url: 'include/customers.php',
                        type: 'POST',
                        data: {
                            updateCustomerData: updateCustomerData,
                            name: name,
                            id:id,
                            father_name: father_name,
                            mobile: mobile,
                            address: address,
                            profession: profession,
                            nid: nid,
                            hight: hight,
                            weight: weight,
                            reference: reference,
                            blood_group: blood_group,
                        },
                        success: function(response) {
                            if (response == 1) {
                                toastr.success("Update Successfully");
                                $("#addModal").modal('hide');
                                setTimeout(() => {
                                   history.back();  
                                }, 1000);
                            } else {
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