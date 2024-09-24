<?php
session_start();
include "db_conn.php";
#Checks to see if the users entered details matches the details of a user in the database if so it succerssfully logs in.

if (isset($_POST["email"]) && isset(($_POST["password"]))) {
    $email = $_POST["email"];
    $pass = ($_POST["password"]);

    if (empty($email)) {
        header("Location: login.php");
        exit();
    } else if (empty($pass)) {
        header("Location: login.php");
        exit();
    } else {
        $sql = "SELECT * FROM customer WHERE EmailAddress='$email' AND password='$pass'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['EmailAddress'] === $email && $row['password'] === $pass) {
                $_SESSION['CustomerID'] = $row['CustomerID'];
                $_SESSION['FirstName'] = $row['FirstName'];
                $_SESSION['LastName'] = $row['LastName'];
                $_SESSION['Address'] = $row['Address'];
                $_SESSION['PostCode'] = $row['PostCode'];
                $_SESSION['Country'] = $row['Country'];
                $_SESSION['DateOfBirth'] = $row['DateOfBirth'];
                $_SESSION['EmailAddress'] = $row['EmailAddress'];
                $_SESSION["emaila"] = $email;
                header("Location: index.php");
                exit();
            } else {
                header("Location: login.php");
            }
        } else {
            header("Location: login.php");
            exit();
        }
    }
}
