<?php
    require "connect.php";
    $id = $_POST['Id'];

    $query = "SELECT price FROM tbl_product WHERE productId = '$id'";
    $data = mysqli_query($con, $query);

    class ProductPrice {
        function ProductPrice($id, $price) {
            $this->Id = $id;
            $this->Price = $price;
        }
    }

    $row = mysqli_fetch_assoc($data);
    echo json_encode(new ProductPrice($id, $row['price']));
?>