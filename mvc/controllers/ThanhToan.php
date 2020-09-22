<?php

// http://localhost/live/Home/Show/1/2

class ThanhToan extends Controller{

    // Must have SayHi()
    function SayHi(){
        //model xuất sản phẩm
        $info = $this->model("SanPhamModel");
        //view sản phẩm
        $this->view("ThanhToanView",[
            
            ]);    

    }

    function InsertOrder($session){
        echo $info = $this->model("InsertOrderModel");
        
    }
   
}
?>