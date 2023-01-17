<?php
require("conn.php");
require("checkUser.php");

if(isset($_GET['msg'])){
	$msg = $_GET['msg'];
}
?>
<?php
$sql = "SELECT * FROM admin WHERE email='".$_SESSION['email']."'";
$result=mysqli_query($link,$sql);
$row=mysqli_fetch_assoc($result);
$fname=$row["fname"];
$department=$row["department"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include_once "head.php";?>
<link href="radio.css" rel="stylesheet">
</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
          <?php include_once "title.php"; ?>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

           <?php include_once "sidebar.php"; ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
             

                    <!-- Topbar Navbar -->
                    <?php include_once "topbar.php" ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">ISSUE Proforma</h1>
                        <a href="proforma.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-pen fa-sm text-white-50"></i> Issue Proforma</a>

                              
                    </div>

                 

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
 

                        <!-- Pie Chart -->
                     
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            

                            <!-- Color System -->
  

                        </div>

                        <div class="col-xl-12 col-lg-7">

                            <!-- Illustrations -->
                            <div class="card shadow mb-12">
                                <div class="card-header py-6">
                                    <h6 class="m-0 font-weight-bold text-primary">Pre-issuance validation</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-left">
                                    <p style="font-size: 20px;">Existing Gogetit Client?</p>  
                                    </div>
                                    <form method="POST" action="redirect.php">
                                    <label class="container" for="yes">Yes
                                    <input type="radio" id="yes" name="new" value="yes">
                                    <span class="checkmark"></span>
                                    </label>

                                    <label class="container" for="no">No
                                    <input type="radio" id="no" name="new" value="no">
                                    <span class="checkmark"></span>
                                    </label><br>
                                    <input type="submit" value="Submit" style=" background-color: #4CAF50; border: none; color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;" width="50%"/>
                                    </form>
                                </div>

<hr/>


                                <div class="card-body">
                                    <div>
                                    <p style="font-size: 20px;">Already have a CLIENT ID? Proceed to generate Invoice</p>  
                                    </div>
                                    <form method="GET" action="invoice.php">
                                    <div class='item'>
     
      <input id='' type='client_id' placeholder="Client ID" name='client_id' required style=" background-color: white; border: 1; color: black;
  padding: 15px 50px;
  text-align: left;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;"/>
      
   

                                   
                                    <input type="submit" value="Generate Invoice" style=" background-color: #4CAF50; border: none; color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;" width="50%"/>
                                    </form>
                                </div>



                            </div>

                            <!-- Approach -->
                           

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include_once "footer.php"; ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

 <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>


  

</body>

</html>