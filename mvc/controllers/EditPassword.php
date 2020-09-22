<?php

// http://localhost/live/Home/Show/1/2

class EditPassword extends Controller{

    // Must have SayHi()
    function User($id){
        //model xuất sản phẩm
        $info = $this->model("SanPhamModel");
      
        //view sản phẩm
        $this->view("EditPasswordView",[
            "user"=>  $info->GetUser($id),     
            ]);    

    }




    function Show(){        
        // Call Views
     // $this->hview("HomeView");
    }
}
?>