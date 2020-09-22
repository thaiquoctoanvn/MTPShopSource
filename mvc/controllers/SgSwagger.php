<?php

// http://localhost/live/Home/Show/1/2

class SgSwagger extends Controller{

    // Must have SayHi()
    function SayHi(){
        //model xuất sản phẩm
        $info = $this->model("SanPhamModel");
      
        //view sản phẩm
        $this->view("SgSwaggerView",[
            "SP"=>  $info->GetSP(),
            "SPGG" => $info->GetSPGG()
            ]);    

    }




    function Show(){        
        // Call Views
     // $this->hview("HomeView");
    }
}
?>