<?php
    class AllProduct extends Controller {
        function SayHi() {
            $info = $this->model("SanPhamModel");

            $this->view("AllProductView", [
                "All"=>$info->GetAllProduct()
            ]);
        }
    }
?>