<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/table.css">
    <title>Support Vehicle</title>
    <!-------------------- Fonst Awesome CDN -------------------->
    <script src="https://kit.fontawesome.com/77df017442.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-------------------- Navbar -------------------->
    <?php include ('navbar.php') ?>

    <!-------------------- Single Product Detail -------------------->
    <div class="small-container cart-page">
        <table class="rtable">
            <thead>
                <tr>
                    <td>Vehicle</td>
                    <td>Origin</td>
                    <td>Name</td>
                    <td>Main Weapon</td>
                    <td>Calibre</td>
                    <td>Speed (km/h)</td>
                    <td>Front Armour</td>
                    <td>Side Armour</td>
                    <td>Rear Armour</td>
                    <td>Top Armour</td>
                    <td>Ammo</td>
                    <td>Accuary</td>
                    <td>AP Power</td>
                    <td>HE Power</td>
                    <td>Firing Range</td>
                    <td>Firing Rate (r/min)</td>
                </tr> 
            </thead>
            <tbody>
            <?php
                include('CRUD.php');
                $showCRUD = new CRUD();

                $data = $showCRUD->support_speed_value();
                $list = $data->fetch_assoc();
                $maxSpeed = $list['fastest'];

                $data = $showCRUD->support_front_armour();
                $list = $data->fetch_assoc();
                $fontArmour = $list['front'];

                $data = $showCRUD->support_side_armour();
                $list = $data->fetch_assoc();
                $sideArmour = $list['side'];

                $data = $showCRUD->support_rear_armour();
                $list = $data->fetch_assoc();
                $rearArmour = $list['rear'];

                $data = $showCRUD->support_top_armour();
                $list = $data->fetch_assoc();
                $topArmour = $list['topArmour'];

                $data = $showCRUD->support_max_ammo();
                $list = $data->fetch_assoc();
                $maxAmmo = $list['ammo'];

                $data = $showCRUD->support_max_stabiliser();
                $list = $data->fetch_assoc();
                $maxStabiliser = $list['stabiliser'];

                $data = $showCRUD->support_max_AP();
                $list = $data->fetch_assoc();
                $maxAP = $list['AP'];

                $data = $showCRUD->support_max_HE();
                $list = $data->fetch_assoc();
                $maxHE = $list['HE'];

                $data = $showCRUD->support_max_range();
                $list = $data->fetch_assoc();
                $maxRange = $list['firingRange'];

                $data = $showCRUD->support_max_rate();
                $list = $data->fetch_assoc();
                $maxRate = $list['firingRate'];

                $data = $showCRUD->support_read_data();
                $nomor = 1;
                while($list = $data->fetch_assoc()) { ?>
                <tr>
                    <!-- General Vehicle Data -->
                    <td>
                        <img src="images/<?php print $list['vehicle_picture']; ?>" width="175" height="100">
                    </td>

                    <td>
                        <img src="images/<?php
                        if($list['vehicle_origin'] == 'United States')
                        {
                            print 'UnitedStates';
                        }
                        else if($list['vehicle_origin'] == 'United Kingdom')
                        {
                            print 'UnitedKingdom';
                        }
                        else if($list['vehicle_origin'] == 'Germany')
                        {
                            print 'Germany';
                        }
                        else if($list['vehicle_origin'] == 'Russia')
                        {
                            print 'Russia';
                        }
                        else if($list['vehicle_origin'] == 'China')
                        {
                            print 'China';
                        }
                        else
                        {
                            "";
                        }
                        ?>.png" width="40px">
                        <br>
                        <?php print $list['vehicle_origin']; ?>
                    </td>

                    <td><?php print $list['vehicle_name']; ?></td>
                    <td><?php print $list['vehicle_weapon']; ?></td>
                    <td><?php print $list['vehicle_calibre']; ?>mm</td>

                    <td class="<?php
                        if($list['vehicle_speed'] == $maxSpeed)
                        {
                            print highlight;
                        }else{
                            "";
                        }
                    ?>">
                    <?php print $list['vehicle_speed']; ?></td>

                    <td class="<?php
                        if($list['vehicle_FrontArmour'] == $fontArmour)
                        {
                            print highlight;
                        }else{
                            "";
                        }
                    ?>">
                    <?php print $list['vehicle_FrontArmour']; ?></td>

                    <td class="<?php
                        if($list['vehicle_SideArmour'] == $sideArmour)
                        {
                            print highlight;
                        }else{
                            "";
                        }
                    ?>">
                    <?php print $list['vehicle_SideArmour']; ?></td>

                    <td class="<?php
                        if($list['vehicle_RearArmour'] == $rearArmour)
                        {
                            print highlight;
                        }else{
                            "";
                        }
                    ?>">
                    <?php print $list['vehicle_RearArmour']; ?></td>

                    <td class="<?php
                        if($list['vehicle_TopArmour'] == $topArmour)
                        {
                            print highlight;
                        }else{
                            "";
                        }
                    ?>">
                    <?php print $list['vehicle_TopArmour']; ?></td>

                    <td class="<?php
                        if($list['vehicle_ammo'] == $maxAmmo)
                        {
                            print highlight;
                        }else{
                            "";
                        }
                    ?>">x
                    <?php print $list['vehicle_ammo']; ?></td>

                    <td class="<?php
                        if($list['vehicle_stabliliser'] == $maxStabiliser)
                        {
                            print highlight;
                        }else{
                            "";
                        }
                    ?>">
                    <?php print $list['vehicle_stabliliser']; ?>%</td>

                    <td class="<?php
                        if($list['vehicle_AP'] == $maxAP)
                        {
                            print highlight;
                        }else{
                            "";
                        }
                    ?>">
                    <?php print $list['vehicle_AP']; ?></td>

                    <td class="<?php
                        if($list['vehicle_HE'] == $maxHE)
                        {
                            print highlight;
                        }else{
                            "";
                        }
                    ?>">
                    <?php print $list['vehicle_HE']; ?></td>

                    <td class="<?php
                        if($list['vehicle_range'] == $maxRange)
                        {
                            print highlight;
                        }else{
                            "";
                        }
                    ?>">
                    <?php print $list['vehicle_range']; ?>m</td>

                    <td class="<?php
                        if($list['vehicle_rate'] == $maxRate)
                        {
                            print highlight;
                        }else{
                            "";
                        }
                    ?>">
                    <?php print $list['vehicle_rate']; ?></td>
                </tr>  
            <?php $nomor++; } ?>
            </tbody>
        </table>       
    </div>

    <!-------------------- Footer -------------------->
    <?php include ('footer.php') ?>

    <!-- ========== PHP for Delete Data ========== -->
    <?php
    if(isset($_GET['delete']))
    {
        $delete = $showCRUD->delete_data($_GET['delete']);
        if($delete == "Success")
        {
            header("Location: index.php");
        }
        else
        {
            print "An error occurred";
        }
    }
    ?>

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