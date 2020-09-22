<?php
    require "connect.php";
    $emaill = $_POST['Email'];
    $passwordd = $_POST['Password'];

    class Customer {
        function Customer($id, $username, $name, $email) {
            $this->Id = $id;
            $this->Username = $username;
            $this->Name = $name;
            $this->Email = $email;
        }
    }
    $passwordd = md5($passwordd).$passwordd;
    

    $queryCheck = "SELECT * FROM tbl_customer WHERE email = '$emaill' AND password = '$passwordd'";

    $dataLogin = mysqli_query($con,$queryCheck);
    
    if($dataLogin -> num_rows > 0) {
        while($row = mysqli_fetch_assoc($dataLogin)) {
            $cus = new Customer($row['id'],$row['userName'],$row['nameCustomer'],$row['email']);
        }
        echo json_encode($cus);
    } else {
        echo "account-not-existed";
    }
    
?>