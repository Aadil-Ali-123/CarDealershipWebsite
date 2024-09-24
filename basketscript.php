    <?php
    # Connects to the database and adds all of the basket items into and array #
    include "db_conn.php";
    if (isset($_POST["addtocart"])) {
        $_SESSION['prodid'] = $_POST['hiddenid'];
        if (isset($_SESSION["basketcart"])) {
            $arrayid = array_column($_SESSION['basketcart'], $_POST['hiddenid']);
            if (!in_array($_POST["hiddenid"], $arrayid)) {
                $count = count($_SESSION["basketcart"]);
                $item = array(
                    'ProductID' => $_POST["hiddenid"],
                    'CarMake' => $_POST["hiddenname"],
                    'Price' => $_POST["hidden_price"],
                    'Quantity' => $_POST['quantity']
                );
                $_SESSION["basketcart"][$count] = $item;
            } else {
            }
        } else {
            $item = array(
                'productid' => $_POST["hiddenid"],
                'CarMake' => $_POST["hiddenname"],
                'Price' => $_POST["hidden_price"],
                'Quantity' => $_POST['quantity']
            );
            $_SESSION['basketcart'][0] = $item;
        }
    }


    ?>