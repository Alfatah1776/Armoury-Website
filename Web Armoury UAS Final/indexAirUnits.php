<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/table.css">
    <title>Airborne Vehicle</title>
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

                    <td>Armament</td>
                    <td>Guidance System</td>
                    <td>Speed (km/h)</td>
                    <td>Turn Rate</td>
                    <td>Fuel (Gallon)</td>
                    <td>ECM (%)</td>
                    <td>Ammo</td>
                    <td>Accuary (%)</td>
                    <td>Stabiliser (%)</td>
                    <td>Power</td>
                    <td>Suppression</td>
                    <td>Range (km)</td>
                </tr>
            </thead>
            <tbody>
                <?php
                include('CRUD.php');
                $showCRUD = new CRUD();

                $data = $showCRUD->airborne_highest_value();
                $list = $data->fetch_assoc();
                $maxSpeed = $list['fastest'];

                $data = $showCRUD->airborne_max_turn();
                $list = $data->fetch_assoc();
                $maxTurn = $list['turn'];

                $data = $showCRUD->airborne_max_fuel();
                $list = $data->fetch_assoc();
                $maxFuel = $list['fuel'];

                $data = $showCRUD->airborne_max_ecm();
                $list = $data->fetch_assoc();
                $maxECM = $list['ecm'];

                $data = $showCRUD->airborne_max_ammo();
                $list = $data->fetch_assoc();
                $maxAmmo = $list['ammo'];

                $data = $showCRUD->airborne_max_accuary();
                $list = $data->fetch_assoc();
                $maxAccuary = $list['accuary'];

                $data = $showCRUD->airborne_max_stabiliser();
                $list = $data->fetch_assoc();
                $maxStabiliser = $list['stabiliser'];

                $data = $showCRUD->airborne_max_power();
                $list = $data->fetch_assoc();
                $maxPower = $list['missilePower'];

                $data = $showCRUD->airborne_max_suppression();
                $list = $data->fetch_assoc();
                $maxSuppression = $list['suppression'];

                $data = $showCRUD->airborne_max_range();
                $list = $data->fetch_assoc();
                $maxRange = $list['firingRange'];

                $data = $showCRUD->airborne_read_data();
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

                    <!-- Armoured Vehicle Data -->
                    <td><?php print $list['vehicle_weapon']; ?></td>
                    <td><?php print $list['vehicle_guide']; ?></td>

                    <td class="<?php
                        if($list['vehicle_speed'] == $maxSpeed)
                        {
                            print highlight;
                        }else{
                            "";
                        }
                    ?>"><?php print $list['vehicle_speed']; ?></td>

                    <td class="<?php
                        if($list['vehicle_turn'] == $maxTurn)
                        {
                            print highlight;
                        }else{
                            "";
                        }
                    ?>"><?php print $list['vehicle_turn']; ?></td>

                    <td class="<?php
                        if($list['vehicle_fuel'] == $maxFuel)
                        {
                            print highlight;
                        }else{
                            "";
                        }
                    ?>"><?php print $list['vehicle_fuel']; ?></td>

                    <td class="<?php
                        if($list['vehicle_ecm'] == $maxECM)
                        {
                            print highlight;
                        }else{
                            "";
                        }
                    ?>"><?php print $list['vehicle_ecm']; ?></td>

                    <td class="<?php
                        if($list['vehicle_ammo'] == $maxAmmo)
                        {
                            print highlight;
                        }else{
                            "";
                        }
                    ?>"><?php print $list['vehicle_ammo']; ?></td>

                    <td class="<?php
                        if($list['vehicle_accuary'] == $maxAccuary)
                        {
                            print highlight;
                        }else{
                            "";
                        }
                    ?>"><?php print $list['vehicle_accuary']; ?></td>

                    <td class="<?php
                        if($list['vehicle_stabliliser'] == $maxStabiliser)
                        {
                            print highlight;
                        }else{
                            "";
                        }
                    ?>"><?php print $list['vehicle_stabliliser']; ?></td>

                    <td class="<?php
                        if($list['vehicle_power'] == $maxPower)
                        {
                            print highlight;
                        }else{
                            "";
                        }
                    ?>"><?php print $list['vehicle_power']; ?></td>

                    <td class="<?php
                        if($list['vehicle_suppression'] == $maxSuppression)
                        {
                            print highlight;
                        }else{
                            "";
                        }
                    ?>"><?php print $list['vehicle_suppression']; ?></td>

                    <td class="<?php
                        if($list['vehicle_range'] == $maxRange)
                        {
                            print highlight;
                        }else{
                            "";
                        }
                    ?>"><?php print $list['vehicle_range']; ?>m</td>
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