<?php  
session_start();
#If the user has requested to change there details it will get the information that they change and update the customer table accordingly
include "db_conn.php";
if(isset($_POST['update'])) {
    $customerid = $_POST['CustomerID'];
    $firstname = $_POST['FirstName'];
    $lastname = $_POST['LastName'];
    $address = $_POST['Address'];
    $postcode = $_POST['PostCode'];
    $country = $_POST['Country'];
    $dob = $_POST['DateOfBirth'];
    $email = $_POST['EmailAddress'];

    $sql = ("UPDATE customer SET FirstName='$firstname', LastName='$lastname', Address='$address', PostCode='$postcode', Country='$country', DateOfBirth='$dob', EmailAddress='$email' WHERE CustomerID='$customerid'");

    $result = $conn->query($sql);
    header("Location: index.php");
    session_destroy();
}
