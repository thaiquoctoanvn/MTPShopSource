<?php

// http://localhost/live/Home/Show/1/2

class Search extends Controller{

    // Must have SayHi()
    function Product($nameSP){
        //model xuất sản phẩm
        $info = $this->model("SanPhamModel");
      
        //view sản phẩm
        $this->view("SearchView",[
            "SP"=>  $info->SearchSP($nameSP)
           
            ]);    

    }




    function Show(){        
        // Call Views
     // $this->hview("HomeView");
    }
}
?>