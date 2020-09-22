<?php
    class InsertOrder extends DB{
        
        public function SetOrder($session) {
            $data = json_decode($session, TRUE);
            return $data;
        }
    }
?>