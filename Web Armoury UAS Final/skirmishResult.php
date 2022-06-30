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
    <div class="small-container single-product">
        <h2 class="title">Ups... This page is under development, we apologise :)
            <p>Coming Soon</p>
        </h2>
        <center>
        <div class="row">
            <img class="wanwan" src="images/WanWan.png" alt="">
        </div>
        
        </center>
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