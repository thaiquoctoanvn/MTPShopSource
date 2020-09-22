<?php

// http://localhost/live/Home/Show/1/2

class Bama extends Controller{

    // Must have SayHi()
    function SayHi(){
        //model xuất sản phẩm
        $info = $this->model("SanPhamModel");
      
        //view sản phẩm
        $this->view("BamaView",[
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