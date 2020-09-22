<?php

// http://localhost/live/Home/Show/1/2

class Bill extends Controller{

    // Must have SayHi()
    function SayHi(){
        //model xuất sản phẩm
        $info = $this->model("SanPhamModel");
      
        //view sản phẩm
        $this->view("BillView",[
            "SP"=>  $info->GetSP(),
            
            ]);    

    }




    function Show(){        
        // Call Views
     // $this->hview("HomeView");
    }
}
?>