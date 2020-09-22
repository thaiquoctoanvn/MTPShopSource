<?php
    require "connect.php";

    $phoneNumber = $_POST['Phone'];
    $email = $_POST['Email'];
    $id=$_POST['ID'];
    $query = "UPDATE tbl_customer SET email='$email',phoneNumber='$phoneNumber' WHERE id='$id' ";
     $data = mysqli_query($con,$query);
        if($data) {
            echo "edit-ok";
        } else {
            echo "edit-failed";
        }
    
    
?>