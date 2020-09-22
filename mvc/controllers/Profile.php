<?php

// http://localhost/live/Home/Show/1/2

class Profile extends Controller{

    // Must have SayHi()
    function User(){
        //model xuất sản phẩm
        $info = $this->model("UserModel");
      
        //view sản phẩm
        $this->view("ProfileView",[
                 
            ]);    

    }




    function Show(){        
        // Call Views
     // $this->hview("HomeView");
    }
}
?>