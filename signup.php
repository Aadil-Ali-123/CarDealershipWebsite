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

    <div class="registercont">
        <h1>Sign Up</h1>
        <form action="signup.php" method="post" name="regform" class="regform">
            <label>First Name</label>
            <input type="text" name="FirstName" placeholder="" required>

            <label>Last Name</label>
            <input type="text" name="LastName" placeholder="" required>

            <label>Address</label>
            <input type="text" name="Address" placeholder="" required>

            <label>Post Code</label>
            <input type="text" name="PostCode" placeholder="" required>

            <label>Country</label>
            <input type="text" name="Country" placeholder="" required>

            <label>Date Of Birth</label>
            <input type="date" name="DateOfBirth" id="" required>

            <label>Email</label>
            <input type="text" name="EmailAddress" placeholder="" required>

            <label>Password</label>
            <input type="password" name="password" placeholder="" required>

            <label>Confirm Password</label>
            <input type="password" name="password" placeholder="" required>

            <input type="submit" name="register" value="Register" class="regbtn">
        </form>
        <p>Already have an account? <a href="login.php" class="linkform">Login Here</a></p>
    </div>
    <?php
    include_once("db_conn.php");

    if (isset($_POST['register'])) {
        $firstname = $_POST['FirstName'];
        $lastname = $_POST['LastName'];
        $address = $_POST['Address'];
        $postcode = $_POST['PostCode'];
        $country = $_POST['Country'];
        $dateofbirth = $_POST['DateOfBirth'];
        $emailaddress = $_POST['EmailAddress'];
        $password = ($_POST['password']);

        $sql = "SELECT EmailAddress from customer WHERE EmailAddress='$emailaddress' AND password='$password'";
        $result = $conn->query($sql);

        $match = mysqli_num_rows($result);

        if ($match > 0) {
            echo "<br/><br/><strong>Error: </strong> User already exists with the email id '$emailaddress'.";
        } else {
            $sql = "INSERT INTO customer (FirstName,LastName,Address,PostCode,Country,DateOfBirth,EmailAddress,password) values ('$firstname', '$lastname', '$address', '$postcode','$country', '$dateofbirth', '$emailaddress', '$password')";
            $result = $conn->query($sql);

            if ($result) {
                echo "Registered Successfully";
            } else {
                echo "Try Again";
            }
        }
    }
    ?>

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