<?php

// http://localhost/live/Home/Show/1/2

class Login extends Controller{

    // Must have SayHi()
    function SayHi(){
        //model xuất sản phẩm
        $info = $this->model("UserModel");
      
        //view sản phẩm
        $this->view("LoginViews",[
            
            ]);    

    }




    function Show(){        
        // Call Views
     // $this->hview("HomeView");
    }
}
?>