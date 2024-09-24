<?php  
#connects to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "21183577";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    echo "Connection Failed";
}
