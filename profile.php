<?php 


include 'include/database_connect.php';
include 'include/security_token.php';

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
            $weight=$rows['weight'];
            $blood_group=$rows['blood_group'];
            $package_id=$rows['package_id'];
            $price=$rows['price'];
            $date=$rows['date'];
            $status=$rows['status'];
            $package_name=$rows['package_name'];
            $image_path=$rows['image_path'];

        } 
    }
}


 ?>


<!doctype html>
<html lang="en">
    <head>
    
        <meta charset="utf-8">
       <title>GYM Managment-SOFTWARE</title>
        <!-- App favicon -->
        
        <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
        <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">
        <!-- C3 Chart css -->
        <link href="assets/libs/c3/c3.min.css" rel="stylesheet" type="text/css">
    
        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">
        <link href="assets/css/custom.css" id="app-style" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="assets/css/toastr.min.css">
    
    </head>

    <body data-sidebar="dark">


        <!-- Loader -->
            <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

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
                            <h4 class="page-title">Customers Profile</h4>
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
        <div class="container-fluid">
            <div class="row">
                <div class="card">
                    <div class="row">
                            <div class="col-md-6"></div>
                            <div class="col-md-6">
                        		<div class="d-flex py-2" style="float:right;">
                                    
                                    <abbr title="Recharge">
                                        <button  type="button" id="rechargeBtn" 
                                        class="btn btn-primary ">
                                        <i class="mdi mdi mdi-battery-charging-90"></i> Recharge Now
                                    </button></abbr>
                                </div>
                    	</div>
                    </div>
                </div>
            </div>
           <div class="row">
               <div class="container">
                    <div class="main-body">

                        <div class="row gutters-sm">
                            <div class="col-md-4 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-column align-items-center text-center profile">
                                            <img src="<?php echo $image_path; ?>" class="rounded-circle img-fluid"
                                                width="150px" height="100px" />
                                            <div class="imgUpIcon">
                                                <button id="uploadBtn"type="button">
                                                    <i class="mdi mdi-camera"></i>
                                                </button>
                                            </div><br>
                                            <div class="mt-3">
                                                <h4>
                                                    <?php echo $fullname; ?><br>
                                                    (<?php echo $id; ?>)
                                                </h4>
                                                <p class="text-secondary mb-1"><?php echo $mobile; ?></p>
                                                <p class="text-muted font-size-sm"><?php echo $address; ?></p>
                                                <button class="btn btn-primary"><i class="fas fa-print"></i> Print</button>
                                                <a href="customer_update.php?id=<?php echo $id; ?> " class="btn btn-outline-danger"><i class="fas fa-edit"></i> Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
               <div class="card-body">
                   <div class="col-12 bg-white p-0 px-2 pb-3 mb-3">
                    <div class="d-flex justify-content-between border-bottom py-2 px-3">
                        <p><i class="mdi mdi-marker-check"></i> Fullname:</p> <a href="#"><?php echo $fullname; ?></a>
                    </div>
                    <div class="d-flex justify-content-between border-bottom py-2 px-3">
                        <p><i class=" fas fa-dollar-sign"></i>    Package:</p> <a href="#">
                            
                            <?php echo $package_name; ?>
                        </a>
                    </div>
                    <div class="d-flex justify-content-between border-bottom py-2 px-3">
                        <p><i class="mdi mdi-phone"></i> Mobile:</p> <a href="#"><?php echo $mobile; ?></a>
                    </div>
                    <div class="d-flex justify-content-between border-bottom py-2 px-3">
                        <p><i class="fas fa-id-card"></i> Nid No:</p> <a href="#"><?php echo $nid; ?></a>
                    </div>
                    <div class="d-flex justify-content-between border-bottom py-2 px-3">
                        <p><i class="fas fa-address-book"></i> Address</p> <a href="#"><?php echo $address; ?></a>
                    </div>
                </div>
               </div>
           </div>
                            </div>
                            <div class="col-md-8">

                               <div class="row d-flex">
                                   
                                    <div class="col-md-12 mb-4">
                                      <div class="card  shadow py-2" style="border-left:3px solid green;">
                                        <div class="card-body">
                                          <div class="row no-gutters align-items-center">
                                            <div class="col">
                                                   <b>Online Status</b><br>
                                                   <span class="badge bg-success">online</span>
                                               </div>
                                               <div class="col">
                                                   <b>Uptime</b>
                                                   <p>24
                                                     Hrs                                         </p>
                                                   
                                               </div>
                                               <div class="col">
                                                   <b>Total Uses</b>
                                                   
                                                   <p>
                                                    0.000 GB                                         </p>
                                               </div>
                                               <div class="col">
                                                   <b>Expired Date</b><br>
                                                   <p>

                                                    <?php 
                                                  // echo $expire_date; 
                                                   $expiredate = new DateTime($expire_date);
                                                     echo $expiredate->format('d-M-Y');

                                                   ?>
                                                       
                                                   </p>
                                                   
                                               </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                               </div>
                               
                                <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card shadow py-2" style="border-left:3px solid #2A0FF1;">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Since</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                          <?php 
                                $createdate = new DateTime($date);
                                $createdate = $createdate->format('d-M-Y');
                                echo $createdate; 
                            ?>                    
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card shadow  py-2" style="border-left:3px solid #27F10F;">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Paid</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                             <?php 
                            if ($paid_amount = $con -> query("SELECT SUM(amount) AS Amount FROM customer_recharge WHERE customer_id='$id' AND type='0'")) {
                              while($r_due_rows= $paid_amount->fetch_array())
                              {
                                  $totalpaid =$r_due_rows["Amount"];
                                  
                              }
                              echo $totalpaid;
                            }
                            ?>                     
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card shadow  py-2" style="border-left:3px solid #0FADF1;">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card shadow  py-2" style="border-left:3px solid red;">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Due</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                         <?php echo $due; ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-body">

                 <div class="table-responsive" id="tableStyle">
                             <table id="customerDataTable" class="table table-striped table-bordered  " cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>Recharged date</th>
                                        <th>Months</th>
                                        <th >Paid until</th>
                                        <th >Amount</th>
                                    </tr>
                                </thead>
                                <tbody id="customer_table">

                                </tbody>
                            </table>
                        </div>

            </div>
        </div>
    </div>
</div>

                               

                            </div>
                        </div>

                    </div>
                </div>
           </div> 
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

<!-- Modal for profile picture upload -->
                <div class="modal fade" id="Profile_pic_upload_Modal" tabindex="-1" role="dialog"
                    aria-labelledby="Profile_pic_upload_Label" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="Profile_pic_upload_Label">Upload Profile Picture</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="ProfileUpload" method="POST">
                                    <input class="d-none" type="text" id="profile_pic_id" value="<?php echo $id; ?>">
                                    <input type="file" name="uploadFile" id="uploadFile" class="form-control"><br>

                                    <button type="button" id="uploadBtnConfirm" class="btn btn-primary">Upload Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="rechargeModal" tabindex="-1" role="dialog"
                    aria-labelledby="ComplainModalCenterTitle" aria-hidden="true" id="addModal">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="ComplainModalLongTitle">
                                    Recharge <br>
                                <!-- <span style="color:green;" id="currentBal">Available Balance:
                                </span> -->
                                      
                                
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form id="recharge-form" method="POST">
                                    
                                    <div class="form-group d-none" >
                                        <label for="">id</label>
                                        <input id="customer_id" type="text"value="<?php echo $id; ?>" class="form-control form-control-sm">
                                    </div>
                                    <div class="form-group mb-1 ">
                                        <label>Monthly Amount:</label>
                                         <input id="amount"  type="text"  class="form-control form-control-sm" value="">           
                                    </div>
                                    <div class="form-group mb-1">
                                        <label>Select Month</label>
                                        <select id="month" class="form-select" >
                                            <option value="">Select</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
                                    
                                    <div class="form-group mb-1 ">
                                        <label>Payable Amount:</label>
                                        <input id="MainAmount" disabled type="text"  class="form-control form-control-sm" />
                                        
                                    </div>
                                    <div class="form-group mb-1">
                                         <label>Transaction Type:</label>
                                        <select id="tra_type" name="tra_type" class="form-select" >
                                            <option value="">Select</option>
                                            <option value="0">Cash</option>
                                            <option value="1">On Credit</option>
                                        </select>
                                     </div> 
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>

                                <button id="recharge-button" type="button" class="btn btn-success">Done</button>
                            </div>
                        </div>
                    </div>
                </div>











     <?php include 'Footer/footer.php'; ?>

</div>
<!-- end main content-->
        
        </div>
        <!-- END layout-wrapper -->
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>
        
        
        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <!-- Required datatable js -->
        <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
        <script src="assets/libs/jszip/jszip.min.js"></script>
        <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="assets/js/pages/datatables.init.js"></script> 
        <script type="text/javascript" src="assets/js/toastr.min.js"></script>
        <script type="text/javascript" src="assets/js/toastr.init.js"></script>
        <script src="assets/js/app.js"></script>


         <script type="text/javascript">
            $(document).on('click','#rechargeBtn',function(){
                 $("#rechargeModal").modal('show');
            });

            $(document).on('keyup','#amount',function (){
                 var amount=$("#amount").val();
                 var month=$("#month").val();
                var totalAmount=(Number(month*amount));
                //console.log(totalAmount);
                  $("#MainAmount").val(totalAmount);
            });
            $(document).on('change','#month',function (){
                 var amount=$("#amount").val();
                 var month=$("#month").val();
                var totalAmount=(Number(month*amount));
                //console.log(totalAmount);
                  $("#MainAmount").val(totalAmount);
            });

            $(document).on('click','#recharge-button',function(){
                var customer_id=$("#customer_id").val();
                var month=$("#month").val();
                var mainAmount=$("#MainAmount").val();
                var tra_type=$("#tra_type").val();  
                sendData(customer_id,month,mainAmount,tra_type); 
            });

            const sendData=(customer_id,month,mainAmount,tra_type)=>{
                
             if(month.length==0){
              toastr.error("Select Month");
            }
            else if (tra_type.length==0) {
                toastr.error("Select Transaction");
            }else{

              $.ajax({
                type:'POST',
                url:'include/customer_recharge.php',
                data:{customer_id:customer_id,month:month,amount:mainAmount,tra_type:tra_type}, 
                success:function(response){
                    if (response==1) {
                       toastr.success("Recharge Successful");
                     $("#rechargeModal").modal('hide');
                     setTimeout(()=>{
                        location.reload();
                     },1000); 
                    }
                    
                }
               });   
                
            }
                
           }

           //get recharege data 
            getRechargeData()

                function getRechargeData() {
                    var getRechargeData="0";
                   $.ajax({
                        url:'include/customers.php',
                        type:'POST',
                        data:{getRechargeData:getRechargeData, id:<?php echo $id; ?>},
                        success:function(response){
                            console.log(response);
                            $("#customer_table").html(response);
                            $("#customerDataTable").dataTable();
                        }
                   });
                }

                $(document).on('click','#uploadBtn',function(){
                    $('#Profile_pic_upload_Modal').modal('show');
                });

                $(document).on('click','#uploadBtnConfirm',function(){
                    
                         var uploadFile=$('#uploadFile').val();
                        var addProfileImg=$('#uploadFile').prop('files')[0];
                         var profile_pic_id=$("#profile_pic_id").val();
                    if (uploadFile.length=='') {
                        toastr.error("Please Select Image");
                    }else{
                         var addProfileData="0";
                         var form_data=new FormData();
                         form_data.append('id',profile_pic_id);
                        form_data.append('file',addProfileImg);
                        form_data.append('addProfileData',addProfileData);

                        $.ajax({
                        type:'POST',
                        url:'include/customers.php',
                        dataType:'script',
                        cache:false,
                        contentType:false,
                        processData:false, 
                        data:form_data,
                        success:function(response){
                            //toastr.success(response);
                            if (response==2) {
                                 alert("File Size Must be 2 MB");
                            }else if(response==0){
                               alert("Select A valid File");
                            }
                            else{
                                toastr.success("Profile Upload Success");
                                //$("#addModal").modal('hide');
                                setTimeout(()=>{location.reload();},1000);
                            }
                        }
                    });

                    }
                });



         </script> 
    </body>
</html>