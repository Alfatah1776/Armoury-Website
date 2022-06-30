<?php
    session_start();
    include '../CRUD.php';

    if(!isset($_SESSION['admin']))
    {
        print "<script>alert('HEY YOU CANT DOIN' THAT LOL!');</script>";
        print "<script>location='../login.php';</script>";
        header ('location:../login.php');
        exit();
    }
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf- 8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Armoury Admin Page</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Admin Page</a> 
            </div>
            <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;"> Alfatah Wibisono &nbsp; <a href="index.php?page=logout" class="btn btn-danger square-btn-adjust">Logout</a></div>
        </nav>   
           <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/></li>	
                <li><a href="index.php"><i class="fa fa-home fa-3x"></i>Home</a></li>
                <li><a href="index.php?page=armouredVehicle"><i class="fa fa-list fa-3x"></i>Armoured Vehicle</a></li>
                <li><a href="index.php?page=supportVehicle"><i class="fa fa-list fa-3x"></i>Support Vehicle</a></li>
                <li><a href="index.php?page=airborneVehicle"><i class="fa fa-list fa-3x"></i>Airborne Units</a></li>
                <li><a href="index.php?page=logout"><i class="fa fa-sign-out fa-3x"></i>Logout</a></li>
                </ul>              
            </div>            
        </nav>

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">      
                <?php
                if (isset($_GET['page']))
                {
                    if($_GET['page']=="armouredVehicle")
                    {
                        include 'armouredVehicle.php';
                    }
                    elseif($_GET['page']=="addArmoured")
                    {
                        include 'addArmoured.php';
                    }
                    elseif($_GET['page']=="supportVehicle")
                    {
                        include 'supportVehicle.php';
                    }
                    elseif($_GET['page']=="addSupport")
                    {
                        include 'addSupport.php';
                    }
                    elseif($_GET['page']=="airborneVehicle")
                    {
                        include 'airborneVehicle.php';
                    }
                    elseif($_GET['page']=="addAirborne")
                    {
                        include 'addAirborne.php';
                    }
                    elseif($_GET['page']=="logout")
                    {
                        include 'logout.php';
                    }
                    elseif($_GET['page']=="deleteArmoured")
                    {
                        include 'armouredVehicle.php';
                    }
                    elseif($_GET['page']=="editArmoured")
                    {
                        include 'editArmoured.php';
                    }
                    elseif($_GET['page']=="deleteSupport")
                    {
                        include 'supportVehicle.php';
                    }
                    elseif($_GET['page']=="editSupport")
                    {
                        include 'editSupport.php';
                    }
                    else if($_GET['page']=="deleteAirborne")
                    {
                        include 'airborneVehicle.php';
                    }
                    else if($_GET['page']=="editAirborne")
                    {
                        include 'editAirborne.php';
                    }
                }
                else
                {
                    include 'home.php';
                }
                ?>

            </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
</body>
</html>