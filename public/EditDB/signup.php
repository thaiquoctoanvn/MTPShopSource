<?php
    require "connect.php";

    $userName = $_POST['Username'];
    $name = $_POST['Name'];
    $phoneNumber = $_POST['Phone'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];

    $password = md5($password).$password;

    $queryCheck = "SELECT * FROM tbl_customer WHERE userName = '$userName' OR email = '$email'";

    $dataCheck = mysqli_query($con,$queryCheck);

    if($dataCheck -> num_rows > 0) {
        echo "account-duplicated";
    } else {
        $query = "INSERT INTO tbl_customer VALUES(null,'$userName','$name','$email','$password','$phoneNumber')";
        //$query = "INSERT INTO tbl_customer VALUES(null,'$userName','Minh Loz','$emai','$password','0901')";
        $data = mysqli_query($con,$query);
        if($data) {
            echo "sign-up-ok";
        } else {
            echo "sign-up-failed";
        }
    }
    
?>