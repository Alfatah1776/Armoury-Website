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
    <div class="header">
        <div class="container">
            <div class="row">
                    <div class="col-2">
                        <h1>Welcome to "Armoury"<br></h1>
                        <p>Compare various combat vehicle from around the World.
                            Including<br>United States, United Kingdom, Germany, Russia and China!</p>
                        </p>
                        <a href="#search" class="btn">Explore Now &#8594;</a>
                    </div>
                    <div class="col-2">
                        <img src="images/BG.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-------------------- Featured Products -------------------->
    <div class="small-container">
        <h2 class="title">Featured Category</h2>
        <div class="row">
            <div class="col-4">
                <img src="images/Tank.jpg" alt="">
                <h4><a href="indexArmoured.php" class="btn">Tanks and Armoured Vehicle</a></h4>
            </div>
            <div class="col-4">
                <img src="images/Support.jpg" alt="">
                <h4><a href="indexSupport.php" class="btn">Support Assets and Units</a></h4>
            </div>
            <div class="col-4">
                <img src="images/Jet.jpg" alt="">
                <h4><a href="indexAirUnits.php" class="btn">Jet and Airborne Units</a></h4>
            </div>
            <div class="col-4">
                <img src="images/Skirmish.jpg" alt="">
                <h4><a href="skirmish.php" class="btn">Skirmish Mode!</a></h4>
            </div>
        </div>
    </div>

    <!-------------------- Offer -------------------->
    <div class="offer" id="search">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="images/COHAirborne.png" class="offer-img">
                </div>
                <div class="col-2">
                    <p>Special Feature &#8594;</p>
                    <h1>Search any Units!</h1>
                    <small>
                        Search any combat vehicle including
                        Tanks, Support Units, Jets, Helicopter, etc <br>
                        From various faction and Countries.<br>
                    </small>
                    <form action="search.php" method="get" class="search-bar">
                        <input type="text" class="search " name="keyword" value="Leopard 2A4" required>
                        <button class="button" id="button">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-------------------- Testimonial -------------------->
    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                    <p>Sweat saves blood, blood saves lives, <br> but brains saves both.</p>
                    <!-- <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div> -->
                    <img src="images/Rommel.png" alt="">
                    <h3>Erwin Rommel</h3>
                    <p>German Field Marshal</p>
                </div>

                <div class="col-3">
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                    <p>Whatever America hopes to bring to pass in the world 
                        must first come to pass in the heart of America.</p>
                    <!-- <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div> -->
                    <img src="images/Eisenhower.png" alt="">
                    <h3>Dwight D. Eisenhower</h3>
                    <p>U.S General of the Army</p>
                </div>

                <div class="col-3">
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                    <p>You cannot invade mainland United States. <br> There would be a rifle behind each blade of grass.</p>
                    <!-- <div class="rating">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                    </div> -->
                    <img src="images/Yamamoto.png" alt="">
                    <h3>Isoroku Yamamoto</h3>
                    <p>Japanese Marshal Admiral</p>
                </div>
            </div>
        </div>
    </div>

    <!-------------------- Brands -------------------->
    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="images/Wargame.png" alt="">
                </div>
                <div class="col-5">
                    <img src="images/AceCombat.png" alt="">
                </div>
                <div class="col-5">
                    <img src="images/Warthunder.png" alt="">
                </div>
                <div class="col-5">
                    <img src="images/COH.png" alt="">
                </div>
                <div class="col-5">
                    <img src="images/EA.png" alt="">
                </div>
            </div>
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