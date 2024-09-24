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

    <?php include "basketscript.php"; ?>

    <div class="basketcont">
        <div class="car_card">
            <h3>Basket</h3>
            <table>
                <tr>
                    <td><b>Car Make:</b></td>
                    <td>Quantity</td>
                    <td>Price:</td>
                    <td>Total Price</td>
                </tr>
                <?php
                #Checks if there are items in the basket and displays it to the user
                if (!empty($_SESSION["basketcart"])) {
                    $total = 0;

                    foreach ($_SESSION['basketcart'] as $keys => $val) {

                ?>
                        <tr>

                            <td><?php echo $val['CarMake']; ?></td>
                            <td><?php echo $val['Quantity']; ?></td>
                            <td><?php echo $val['Price']; ?></td>
                            <td><?php echo number_format($val['Quantity'] * $val['Price'], 2) ?></td>
                        </tr>
                <?php
                        $total = $total + ($val['Quantity'] * $val['Price']);
                    }
                }

                ?>
            </table>
        </div>
    </div>
    <div class="check_cont">

        <form action="checkoutscript.php" method="post" class="checkout">

            <h2 class="check_title">Payment Details:</h2>
            <div class="check_input">
                <label for="name">Name on card</label>
                <input type="text" name="nameoncard" id="name">
            </div>

            <div class="check_input">
                <label for="card">Card Number</label>
                <input type="text" name="cardnumber" id="card">
            </div>

            <div class="inputcont">
                <div class="check_input">
                    <label for="Date">Expiring Date</label>
                    <input type="date" name="expiringdate" id="date">
                </div>

                <div class="check_input">
                    <label for="cvc">CVC</label>
                    <input type="text" name="cvc" id="cvc">
                </div>
            </div>

            <?php if (!isset($_SESSION["emaila"])) {
                # Checks to see if user has logged in to make a purchase
                echo '<input type="submit" name="" value="Log in to make a purchase">';
            } else {
                echo '<input type="submit" name="purchase" value="Purchase">';
            } ?>

        </form>
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