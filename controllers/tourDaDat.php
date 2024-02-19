<?php
class tourDaDat extends connectDB{
    public function index(){
        $idTour = $this->getDatTour($_SESSION['user']['id']);
        require_once __DIR__. '/../views/tourDaDat.php';
        if(isset($_POST["cancel"])){
            $sql = "UPDATE dattour SET trangThai = 'daHuy' WHERE id = ". $_POST["cancel"];
            $this->connect()->query($sql);
            $sql1 = "UPDATE lichtrinh SET khachToiDa = khachToiDa + ". $_POST["soluongkhachdi"]." WHERE id = ". $_POST["lichtrinh"];
            $this->connect()->query($sql1);
            echo "<script>alert('Hủy tour thành công'); location.href='?page=tourDaDat';</script>";
        }
    }
    public function getDatTour($id){
        $sql = "SELECT * FROM `dattour` WHERE idKhachHang = $id ORDER BY id DESC";
        $result = $this->connect()->query($sql);
        return $result;
    }
    public function getHopDong($id){
        $sql = "SELECT * FROM `hopdong` WHERE id = $id";
        $result = $this->connect()->query($sql);
        return $result;
    }
    public function getChiTietHopDong($id){
        $sql = "SELECT * FROM `chitiethopdong` WHERE idHopDong = $id";
        $result = $this->connect()->query($sql);
        return $result;
    }
    public function countChiTiet($id){
        $sql = "SELECT COUNT(*) as `count` FROM `chitiethopdong` WHERE idHopDong = $id";
        $result = $this->connect()->query($sql);
        return $result;
    }
    public function getLichTrinh($id){
        $sql = "SELECT ngayDi from lichtrinh where id = $id";
        $result = $this->connect()->query($sql);
        return $result;
    }
    public function getStatus($key){
        switch($key){
            case "daHuy":
                return array("Đã hủy", "red");

            case "dangXuLy":
                return array("Đang xử lý", "rgb(6, 100, 240)");

            case "thanhCong":
                return array("Thành công", "green");
        }
    }
}
 ?>