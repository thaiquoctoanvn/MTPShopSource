<?php

// http://localhost/live/Home/Show/1/2

class Chitietsanpham extends Controller{

    // Must have SayHi()
    function Product($id){
        //model xuất sản phẩm
        $info = $this->model("SanPhamModel");
        //view sản phẩm
        $this->view("ChitetsanphamView",[
            "CTSP"=>$info->GetCTSP($id),
            "BonusImage"=>$info->GetAllImage($id)
            ]);    

    }

   
}
?>