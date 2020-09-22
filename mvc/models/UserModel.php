<?php
class UserModel extends DB{
	
    public function GetUser($id){
        $qr = "SELECT * FROM tbl_customer WHERE id='$id'";
        return mysqli_query($this->con, $qr);
    }
}
?>