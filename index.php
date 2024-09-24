<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>CarDealership</title>
</head>

<body>
    <header>

        <nav class="navbar">
            <div class="navbarcont">
                <a href="index.php" id="logo">AadilsCar</a>
                <div class="navmobile" id="mobile">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
                <ul class="navEls">
                    <li class="el"><a href="index.php" class="navlink">Home</a></li>
                    <li class="el"><a href="vehicles.php" class="navlink">Our Vehicles</a></li>
                    <li class="el"><a href="checkout.php" class="navlink">Checkout</a></li>
                    <?php
                    # Checks if the user has added anything to the basket then displays it #
                    if (!isset($_SESSION["emaila"])) {
                        echo '<li class="el"><a href="signup.php" class="navlink">Sign Up</a></li>';
                        echo '<li class="el"><a href="login.php" class="navlink">Login</a></li>';
                    } else {
                        echo '<li class="el"><a href="logout.php" class="navlink">LogOut</a></li>';
                    ?>
                        <li class="dropdownli"><a href="#" class="navlink">Test ▾</a>
                            <ul class="dropdown">
                                <li><a class="navlink" href="profile.php">Profile</a></li>
                                <li><a class="navlink" href="setting.php">Settings</a></li>
                            </ul>
                        </li>
                    <?php } ?>



                    <li class="el"><a href="basket.php" class="navlink">Basket</a></li>
                </ul>
            </div>
        </nav>
    </header>



    <div class="content">
        <div class="slogan">
            <h1>Everything We Do is Driven by You</h1>
            <h3>Every Car Sold comes with 2 Year warranty + Three services for no Additonal Cost</h3>
        </div>
        <div class="carcont">
            <div class="imgcont">
                <img class="image" src="images/a35.jpg" alt="A35 2022" height=300px width=500px>
                <img class="image" src="images/bmw1series.jpg" alt="BMW 1 SERIES 2022" height=300px width=500px>
                <img class="image" src="images/golfr.jpg" alt="VW GOLF R 2022" height=300px width=500px>
                <img class="image" src="images/rs3.jpg" alt="Audi RS3 2022" height=300px width=500px>

            </div>
            <i class="fa-solid fa-angles-left btn prev"></i>
            <i class="fa-solid fa-angles-right btn next"></i>

        </div>
    </div>
    <footer class="footcont">
        <div class="footeritems">
            <div class="footeritem">
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-linkedin"></i>
                <i class="fa-brands fa-instagram"></i>

            </div>
            <div class="footeritem">
                <a href="index.php">Home</a>
                <a href="#">About</a>
                <a href="#">Services</a>
                <a href="#">Team</a>
                <a href="#">Contact</a>
            </div>

            <div class="footeritem">
                <p>(c)2022 Aadil Ali | All Rights Reserved</p>
            </div>
        </div>
    </footer>

    <script src="scripts/index.js"></script>
    <script src="scripts/navbar.js"></script>
</body>

</html>