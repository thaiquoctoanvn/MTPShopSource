<?php
    require "connect.php";
    // Lay ID moi nhat duoc tao tu tbl order
    $query =  mysqli_query($con, "SELECT id FROM `tbl_order` ORDER BY `id` DESC");
    $row = mysqli_fetch_assoc($query);
    $get_id = $row['id'];
    // Lay du lieu tu custominfovalidate.js
    $product_id = $_POST['IdProduct'];
    $product_name = $_POST['NameProduct'];
    $quantity = $_POST['Quantity'];
    $price = $_POST['Price'];
    $img = $_POST['Image'];
    $sql="INSERT INTO tbl_order_detail VALUES (null,'$get_id','$product_id','$product_name','$quantity','$price','$img',". time() .", " . time() . ")";
    //$sql="INSERT INTO tbl_order VALUES (null,'$idproduct','xxx',3,4,100,'yyy',0,'dateorder')";

    $result=mysqli_query($con,$sql);
    if($result) {
        echo "data inserted";
    } else {
        echo "failed";
    }
?>