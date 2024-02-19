<?php
class themTheLoai extends connectDB{
    public function index(){
        $theLoai = $this->getTheLoai();
        require_once __DIR__. "/../views/themTheLoai.php";
        $this->themTheLoai();
    }
    public function getTheLoai(){
        $sql = "SELECT * from theloai";
        $result = $this->connect()->query($sql);
        return $result;
    }
    public function themTheLoai(){
        if(isset($_POST['them_tour'])){
            $sql= "INSERT INTO `theloai`(`idTheLoai`, `tenTheLoai`) VALUES (null,'". $_POST["tenTheLoai"] ."')";
            $this->connect()->query($sql);
        }
    }
}

?>