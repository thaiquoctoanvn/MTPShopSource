<?php
    require "connect.php";

    $password = $_POST['Password'];
    $id=$_POST['ID'];
     $password = md5($password).$password;
    
    $query = "UPDATE tbl_customer SET password='$password' WHERE id='$id' ";
     $data = mysqli_query($con,$query);
        if($data) {
            echo "edit-ok";
        } else {
            echo "edit-failed";
        }
    
    
?>