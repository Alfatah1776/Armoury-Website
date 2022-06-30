<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/table.css">
    <title>Home</title>
    <!-------------------- Fonst Awesome CDN -------------------->
    <script src="https://kit.fontawesome.com/77df017442.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-------------------- Navbar -------------------->
    <?php include ('navbar.php') ?>
    <!-------------------- Carousel ------------------>
    <?php
        include('CRUD.php');
        $showCRUD = new CRUD();

        $tankA = $showCRUD->armoured_read_data();
        $tankB = $showCRUD->armoured_read_data();

        $supportA = $showCRUD->support_read_data();
        $supportB = $showCRUD->support_read_data();

        $airborneA = $showCRUD->airborne_read_data();
        $airborneB = $showCRUD->airborne_read_data();
    ?>

    <div class="small-container single-product">
        <h2 class="title">Skirmish Mode</h2>
        <center>
        <div class="row">
            <div class="col-2">
                <h3>Team A Tank</h3>
                <select name="tankA" class="form-control" required>

                    <?php while($list = $tankA->fetch_assoc()){ ?>  
                    <?php $vehicle = $list['vehicle_name'];?>
                    <option value='<?php print $vehicle ?>'><?php print $vehicle ?></option>                   
                    <?php } ?>

                </select>
            </div>
            <div class="col-2">
                <h3>Team B Tank</h3>
                <select name="tankB" class="form-control" required>

                    <?php while($list = $tankB->fetch_assoc()){ ?>  
                    <?php $vehicle = $list['vehicle_name'];?>
                    <option value="<?php print $vehicle ?>"><?php print $vehicle ?></option>                   
                    <?php } ?>

                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <h3>Team A Support</h3>
                <select name="supportA" class="form-control" required>

                    <?php while($list = $supportA->fetch_assoc()){ ?>  
                    <?php $vehicle = $list['vehicle_name'];?>
                    <option value="<?php print $vehicle ?>"><?php print $vehicle ?></option>                   
                    <?php } ?>

                </select>
            </div>
            <div class="col-2">
                <h3>Team B Support</h3>
                <select name="supportB" class="form-control" required>

                    <?php while($list = $supportB->fetch_assoc()){ ?>  
                    <?php $vehicle = $list['vehicle_name'];?>
                    <option value="<?php print $vehicle ?>"><?php print $vehicle ?></option>                   
                    <?php } ?>

                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-2">
                <h3>Team A Airborne</h3>
                <select name="airborneA" class="form-control" required>

                    <?php while($list = $airborneA->fetch_assoc()){ ?>  
                    <?php $vehicle = $list['vehicle_name'];?>
                    <option value="<?php print $vehicle ?>"><?php print $vehicle ?></option>                   
                    <?php } ?>

                </select>
            </div>
            <div class="col-2">
                <h3>Team B Airborne</h3>
                <select name="airborneB" class="form-control" required>

                    <?php while($list = $airborneB->fetch_assoc()){ ?>  
                    <?php $vehicle = $list['vehicle_name'];?>
                    <option value="<?php print $vehicle ?>"><?php print $vehicle ?></option>                   
                    <?php } ?>

                </select>
            </div>
        </div>
        <a href="skirmishResult.php" class="btn" name="battle">Battle!</a>
        </center>
    </div>

    <!-------------------- Footer -------------------->
    <?php include ('footer.php') ?>

    <!-------------------- Skirmish Script -------------------->


    <!-- ========== Js For Menu Toggle ========== -->
    <script>
        var MenuItems = document.getElementById("MenuItems");

            MenuItems.style.maxHeight = "0px";

                function menutoggle(){
                    if(MenuItems.style.maxHeight == "0px")
                    {
                        MenuItems.style.maxHeight = "200px";
                    }
                    else{
                        MenuItems.style.maxHeight = "0px";
                    }
                }
    </script>
    <script src="js/script.js"></script>
</body>
</html>