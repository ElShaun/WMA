<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if (strlen($_SESSION['ccmsaid']==0)) {
  header('location:logout.php');
  } else{
    if(isset($_POST['submit']))
  {
$eid=$_GET['editid'];
$cmsaid=$_SESSION['ccmsaid'];
$compname=$_POST['compname'];
$comploc=$_POST['comploc'];
$idadd=$_POST['idadd'];
 $query=mysqli_query($con,"update tbldsign set DesignationName='$compname',DesgnType='$comploc',DesgnReq='$idadd' where  ID='$eid'");

    if ($query) {
    $msg="Designation Detail has been update.";
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }

  
}

?>

<!doctype html>
<html class="no-js" lang="en">

<head>
   
    <title>WMA Update Designation</title>
  
    <link rel="apple-touch-icon" href="apple-icon.png">
  


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body>
    <!-- Left Panel -->

    <?php include_once('includes/sidebar.php');?>

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <?php include_once('includes/header.php');?>

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Update Designation Detail</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="dashboard.php">Dashboard</a></li>
                            <li><a href="manage-dsign.php">Update Designation Detail</a></li>
                            <li class="active">Update</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-6">
                       <!-- .card -->

                    </div>
                    <!--/.col-->

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header"><strong>Designation</strong><small> Detail</small></div>
                            <form name="package" method="post" action="">
                                <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
                            <div class="card-body card-block">
 <?php
 $cid=$_GET['editid'];
$ret=mysqli_query($con,"select * from  tbldsign where ID='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                                <div class="form-group"><label for="company" class=" form-control-label">Designation Name</label><input type="text" name="compname" value="<?php  echo $row['DesignationName'];?>" class="form-control" id="compname" required="true"></div>
                                   
                                        <div class="form-group"><label for="street" class=" form-control-label">Designation Type</label><input type="text" name="comploc" value="<?php  echo $row['DesgnType'];?>" id="comploc" class="form-control" required="true"></div>
                                            <div class="row form-group">
                                                <div class="col-12">
                                                    <div class="form-group"><label for="city" class=" form-control-label">Desgnation Requirement</label><input type="text" name="idadd" id="idadd" value="<?php  echo $row['DesgnReq'];?>" class="form-control" required="true"></div>
                                                    </div>
                                                    
                                                    </div>
                                                    
                                                    </div>
                                                    <?php } ?>
                                                     <div class="card-footer">
                                                       <p style="text-align: center;"><button type="submit" class="btn btn-primary btn-sm" name="submit" id="submit">
                                                            <i class="fa fa-dot-circle-o"></i> Update
                                                        </button></p>
                                                        
                                                    </div>
                                                </div>
                                                </form>
                                            </div>



                                           
                                            </div>
                                        </div><!-- .animated -->
                                    </div><!-- .content -->
                                </div><!-- /#right-panel -->
                                <!-- Right Panel -->


                            <script src="vendors/jquery/dist/jquery.min.js"></script>
                            <script src="vendors/popper.js/dist/umd/popper.min.js"></script>

                            <script src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
                            <script src="vendors/jquery-validation-unobtrusive/dist/jquery.validate.unobtrusive.min.js"></script>

                            <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                            <script src="assets/js/main.js"></script>
</body>
</html>
<?php }  ?>