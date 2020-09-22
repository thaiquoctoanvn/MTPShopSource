<?php

// http://localhost/live/Home/Show/1/2

class Home extends Controller{

    // Must have SayHi()
    function SayHi(){
        //model xuất sản phẩm
        $info = $this->model("SanPhamModel");
      
        //view sản phẩm
        $this->view("HomeView",[
            "SP"=>  $info->GetSP(),
            "SPGG" => $info->GetSPGG(),
            "BRAND" => $info->GetBrand()
            ]);    

    }




    function Show(){        
        // Call Views
     // $this->hview("HomeView");
    }
}
?>