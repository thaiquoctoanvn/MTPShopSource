<?php

class DB{

    public $con;
    protected $servername = "localhost";
    protected $username = "id14298698_sterben0205";
    protected $password = "1MinhToanPhuc_";
    protected $dbname = "id14298698_web_mvc";

    function __construct(){
        $this->con = mysqli_connect($this->servername, $this->username, $this->password,$this->dbname);
        mysqli_query($this->con, "SET NAMES 'utf8'");
    }

}

?>