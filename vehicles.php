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

<body class="carpage">
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
    <div class="vehiclecont">
        <?php
        include "db_conn.php";
        # Selects elements from product table and portrays it to the user
        $sql = "SELECT ProductID,Image, CarMake, CarModel, CarYear, CarReg, Price from product ORDER BY ProductID";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {

        ?>

                <div class="car_card">
                    <form method="post" action="basket.php">
                        <img src=<?php echo $row["Image"] ?> alt="" width="450px" height="300px">
                        <table>
                            <tr>
                                <td><b>Car Make:</b></td>
                                <td><b>Car Model:</b></td>
                                <td>Car Year:</td>
                                <td>Car Reg:</td>
                                <td>Price:</td>
                            </tr>
                            <tr>

                                <td><?php echo $row["CarMake"]; ?></td>
                                <td><?php echo $row["CarModel"]; ?></td>
                                <td><?php echo $row["CarYear"]; ?></td>
                                <td><?php echo $row["CarReg"]; ?></td>
                                <td><?php echo $row["Price"]; ?></td>
                            </tr>

                        </table>
                        <input type="text" name="quantity" class="vehform" value="1">
                        <input type="hidden" name="hiddenid" value="<?php echo $row["ProductID"]; ?>">
                        <input type="hidden" name="hiddenname" value="<?php echo $row["CarMake"]; ?>">
                        <input type="hidden" name="hidden_price" value="<?php echo $row["Price"]; ?>">

                        <input type="submit" name="addtocart" class="vehbtn btnsuccess" value="Add to Cart">
                    </form>
                </div>

        <?php
            }
        }
        ?>
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