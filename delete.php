<?php  
#deletes an users account
session_start();
include "db_conn.php";
$customerid = $_POST['CustomerID'];
$sql = "DELETE FROM customer WHERE CustomerID='$customerid'";
if ($conn->query($sql) === true) {
    
    header("Location: index.php");
    session_destroy();
}else {
    header("Location: index.php");
}
