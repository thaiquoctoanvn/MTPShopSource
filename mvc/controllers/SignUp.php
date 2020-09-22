<?php

// http://localhost/live/Home/Show/1/2

class SignUp extends Controller{

    // Must have SayHi()
    function SayHi(){
        //model xuất sản phẩm
        $info = $this->model("UserModel");
      
        //view sản phẩm
        $this->view("SignUpViews",[
            
            ]);    

    }




    function Show(){        
        // Call Views
     // $this->hview("HomeView");
    }
}
?>