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
    <nav class="navbar">
        <div class="navbarcont">
            <a href="index.php" id="logo">Logo</a>
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
    <div class="logincont">
        <h1>Login</h1>
        <form method="post" action="loginscript.php" class="regform">
            <label for="email">Email: </label>
            <input type="email" name="email">

            <label for="password"> Password:</label>
            <input type="password" name="password">

            <button class="regbtn">Login</button>

        </form>
        <p>Dont have an Account? <a href="signup.php" class="linkform">Sign Up here</a></p>

        <img src="images/Asset-10.png" alt="">
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


    <script src="scripts/navbar.js"></script>
</body>

</html>