 <?php
    session_start();
    include_once("db_conn.php");
    # if user clicks purchace button it adds the users details and the product detials and there bank details to the orders table
    if (isset($_POST['purchase'])) {
        $nameoncard = $_POST['nameoncard'];
        $cardnumber = $_POST['cardnumber'];
        $expiringdate = $_POST['expiringdate'];
        $cvc = $_POST['cvc'];
        $productid = $_SESSION["prodid"];
        $customerid = $_SESSION['CustomerID'];



        $sql = "INSERT INTO orders (CustomerID,ProductID,NameOnCard,CardNumber,ExpiringDate,CVC) values ('$customerid', '$productid', '$nameoncard', '$cardnumber','$expiringdate', '$cvc')";
        $result = $conn->query($sql);

        if ($result) {
            echo " Successfully Purchased";
            session_destroy();
            header("Location: index.php");
        } else {
            header("Location: index.php");
        }
    } else {
        header("Location: checkout.php");
    }

    ?>

    