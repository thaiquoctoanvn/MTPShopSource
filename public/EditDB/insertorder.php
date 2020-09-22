<?php
    require "connect.php";
    $name = $_POST['nameCustomer'];
    $phone = $_POST['phoneCustomer'];
    $address = $_POST['addressCustomer'];
    $note = $_POST['note'];
    $total=$_POST['total'];
    $status=$_POST['Status'];
    $sql="INSERT INTO tbl_order VALUES (null,'$name','$phone','$address','$note','$total','$status', " . time() . ")";
    //$sql="INSERT INTO tbl_order VALUES (null,'$idproduct','xxx',3,4,100,'yyy',0,'dateorder')";

    $result=mysqli_query($con,$sql);
    if($result) {
        echo "data inserted";
    } else {
        echo "failed";
    }
?>