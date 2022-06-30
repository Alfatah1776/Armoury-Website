<?php
    include('CRUD.php');
    $showCRUD = new CRUD;

    $keywords = $_GET["keyword"];

    $allArmouredData = array();
    $data = $showCRUD->search_armoured($keywords);
    while($getArmouredWord = $data->fetch_assoc())
    {
        $allArmouredData[] = $getArmouredWord;
        // print_r($allData);
    }

    $allSupportData = array();
    $data = $showCRUD->search_support($keywords);
    while($getSupportData = $data->fetch_assoc())
    {
        $allSupportData[] = $getSupportData;
        // print_r($allData);
    }

    $allAirData = array();
    $data = $showCRUD->search_airborne($keywords);
    while($getAirborneData = $data->fetch_assoc())
    {
        $allAirData[] = $getAirborneData;
        // print_r($allData);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/table.css">
    <title>Search Result</title>
    <!-------------------- Fonst Awesome CDN -------------------->
    <script src="https://kit.fontawesome.com/77df017442.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-------------------- Navbar -------------------->
    <?php include ('navbar.php') ?>
    <!-----------------Search Result ----------------->
    <div class="small-container single-product">
        <h2 class="title">Search Result for : <?php echo $keywords ?></h2>

        <!-- If search result Armoured founded -->
        <div class="row-search">
            <?php foreach ($allArmouredData as $key => $value): ?>
            <div class="col-2">
                <img src="images/<?php print $value['vehicle_picture']; ?>" width="75%">
            </div>

            <div class="col-2">
                <!-- General Vehicle Data -->
                <h2>
                    <?php print $value['vehicle_name']; ?>
                    <img src="images/<?php
                        if($value['vehicle_origin'] == 'United States')
                        {
                            print 'UnitedStates';
                        }
                        else if($value['vehicle_origin'] == 'United Kingdom')
                        {
                            print 'UnitedKingdom';
                        }
                        else if($value['vehicle_origin'] == 'Germany')
                        {
                            print 'Germany';
                        }
                        else if($value['vehicle_origin'] == 'Russia')
                        {
                            print 'Russia';
                        }
                        else if($value['vehicle_origin'] == 'China')
                        {
                            print 'China';
                        }
                        else
                        {
                            "";
                        }
                ?>.png" width="40px">
                </h2>
                <p><?php print $value['vehicle_origin']; ?></p>
                <br>
                <p><img src="images/Calibre.png" width="35px">&emsp;<?php print $value['vehicle_weapon']; ?></p>
                <p><img src="images/Speed.png" width="35px">&emsp;<?php print $value['vehicle_speed']; ?> km/h</p>
                <p><img src="images/Gun.png" width="35px">&emsp;<?php print $value['vehicle_calibre']; ?> mm</p>
                <p><img src="images/Ammo.png" width="35px">&emsp;x<?php print $value['vehicle_ammo']; ?></p>
                <!-- <p><img src="images/Stabiliser.png" width="35px">&emsp;<?php print $value['vehicle_stabliliser']; ?>%</p> -->
            </div>
            <?php endforeach ?>
        </div>

        <!-- If search result Support founded -->
        <div class="row-search">
            <?php foreach ($allSupportData as $key => $value): ?>
            <div class="col-2">
                <img src="images/<?php print $value['vehicle_picture']; ?>" width="75%">
            </div>

            <div class="col-2">
                <!-- General Vehicle Data -->
                <h2>
                    <?php print $value['vehicle_name']; ?>
                    <img src="images/<?php
                        if($value['vehicle_origin'] == 'United States')
                        {
                            print 'UnitedStates';
                        }
                        else if($value['vehicle_origin'] == 'United Kingdom')
                        {
                            print 'UnitedKingdom';
                        }
                        else if($value['vehicle_origin'] == 'Germany')
                        {
                            print 'Germany';
                        }
                        else if($value['vehicle_origin'] == 'Russia')
                        {
                            print 'Russia';
                        }
                        else if($value['vehicle_origin'] == 'China')
                        {
                            print 'China';
                        }
                        else
                        {
                            "";
                        }
                ?>.png" width="40px">
                </h2>
                <p><?php print $value['vehicle_origin']; ?></p>
                <br>
                <p><img src="images/Calibre.png" width="35px">&emsp;<?php print $value['vehicle_weapon']; ?></p>
                <p><img src="images/Speed.png" width="35px">&emsp;<?php print $value['vehicle_speed']; ?> km/h</p>
                <p><img src="images/Gun.png" width="35px">&emsp;<?php print $value['vehicle_calibre']; ?> mm</p>
                <p><img src="images/Ammo.png" width="35px">&emsp;x<?php print $value['vehicle_ammo']; ?></p>
                <!-- <p><img src="images/Stabiliser.png" width="35px">&emsp;<?php print $value['vehicle_stabliliser']; ?>%</p> -->
            </div>
            <?php endforeach ?>
        </div>

        <!-- If search result Airborne founded -->
        <div class="row-search">
            <?php foreach ($allAirData as $key => $value): ?>
            <div class="col-2">
                <img src="images/<?php print $value['vehicle_picture']; ?>" width="75%">
            </div>

            <div class="col-2">
                <!-- General Vehicle Data -->
                <h2>
                    <?php print $value['vehicle_name']; ?>
                    <img src="images/<?php
                        if($value['vehicle_origin'] == 'United States')
                        {
                            print 'UnitedStates';
                        }
                        else if($value['vehicle_origin'] == 'United Kingdom')
                        {
                            print 'UnitedKingdom';
                        }
                        else if($value['vehicle_origin'] == 'Germany')
                        {
                            print 'Germany';
                        }
                        else if($value['vehicle_origin'] == 'Russia')
                        {
                            print 'Russia';
                        }
                        else if($value['vehicle_origin'] == 'China')
                        {
                            print 'China';
                        }
                        else
                        {
                            "";
                        }
                ?>.png" width="40px">
                </h2>
                <p><?php print $value['vehicle_origin']; ?></p>
                <br>
                <p><img src="images/Calibre.png" width="35px">&emsp;<?php print $value['vehicle_weapon']; ?></p>
                <p><img src="images/Speed.png" width="35px">&emsp;<?php print $value['vehicle_speed']; ?> km/h</p>
                <p><img src="images/Gun.png" width="35px">&emsp;<?php print $value['vehicle_guide']; ?></p>
                <p><img src="images/Ammo.png" width="35px">&emsp;x<?php print $value['vehicle_ammo']; ?></p>
                <!-- <p><img src="images/Stabiliser.png" width="35px">&emsp;<?php print $value['vehicle_stabliliser']; ?>%</p> -->
            </div>
            <?php endforeach ?>
        </div>
    </div>

    <!-------------------- Footer -------------------->
    <?php include ('footer.php') ?>
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