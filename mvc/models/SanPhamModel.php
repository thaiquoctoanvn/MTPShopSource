<?php
class SanPhamModel extends DB{
	

    public function GetSP(){
        $qr = "SELECT DISTINCT * FROM tbl_product ORDER BY rand(".date("Ymd").") LIMIT 8";
        return mysqli_query($this->con, $qr);
    }
    public function GetSPGG(){
        $qr = "SELECT * FROM sanpham_giamgia";
        return mysqli_query($this->con, $qr); 
    }
    public function GetCTSP($id){
        $qr = "SELECT * FROM tbl_product WHERE productId = '$id'";
        return mysqli_query($this->con, $qr);
    }
    public function GetAllImage($id) {
        $qr = "SELECT path FROM image_library WHERE product_id = '$id'";
        return mysqli_query($this->con, $qr);
    }
    public function GetBrand() {
        $qr = "SELECT * FROM tbl_brand";
        return mysqli_query($this->con, $qr);
    }
    public function GetAllProduct() {
        $qr = "SELECT * FROM tbl_product";
        return mysqli_query($this->con, $qr);
    }
       public function SearchSP($nameSP){
        $qr = "SELECT * FROM tbl_product WHERE productName LIKE '%".$nameSP."%'";
        return mysqli_query($this->con, $qr);
    }
    
}
?>