<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Admin Login</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="admin/assets/css/bootstrap.css" rel="stylesheet"/>
     <!-- FONTAWESOME STYLES-->
    <link href="admin/assets/css/font-awesome.css" rel="stylesheet"/>
        <!-- CUSTOM STYLES-->
    <link href="admin/assets/css/custom.css" rel="stylesheet"/>
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'/>
</head>
<body>
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2>Login as Admin</h2>
                <h5>( To Create, Read, Update and Delete Data )</h5>
                 <br />
            </div>
        </div>
         <div class="row ">              
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <strong>Enter Details To Login </strong>  
                    </div>
                    <div class="panel-body">
                        <form form method="post" enctype="multipart/form-data">
                            <br/>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                <input type="text" class="form-control" name="username" placeholder="Your Username"/>
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                <input type="password" class="form-control" name="password" placeholder="Your Password"/>
                            </div>                               
                            <button class="btn btn-primary" name="login">Login</button>
                            <hr>
                            <center>
                                <strong>Untuk keperluan uji coba tugas,<br> silahkan login menggunakan : </strong><br>
                                <br>
                                <strong>Username : Not Available For Now</strong>
                                <br>
                                <strong>Password : Not Available For Now</strong>
                            </center>
                        </form>
                    </div>  
                </div>
            </div>             
        </div>
    </div>

    <?php
    include ('CRUD.php');
    session_start();

    if(isset($_POST['login']))
    {
        $adminUsername = $_POST['username'];
        $adminPassword = $_POST['password'];

        $adminCRUD = new CRUD();
        $adminCheck = $adminCRUD->admin_login($adminUsername, $adminPassword);
    
        // if($adminCheck == "Success")
        // {
        //     header('Location: admin.php');
        // }
    }
    ?>

    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
</body>
</html>