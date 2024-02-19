<?php
class connectDb{
    private $connect;
    public function __construct()
    {
        $this->connect = new mysqli("localhost", "root", "", "quanlytourdulich");
    }
    public function connect()  {
        return $this->connect;
    }
}
 ?>
