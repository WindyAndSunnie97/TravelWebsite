<?php
class dattour extends connectDB{
    private $conn;
    public function getLichTrinh($id){
        $sql = "SELECT ngayDi from lichtrinh where id = $id";
        $result = $this->connect()->query($sql);
        return $result;
    }
    public function dattour(){
        
        $this->conn = $this->connect();
        if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST"){
            
            // $sql1 = "INSERT into `dattour` (`id`, `idKhachHang`, `idTour`, `ngayDat`, `trangThai`, `idHopDong`) VALUES
            // (null, ".$_SESSION['user']['id']. ")";
            $sql1 = "INSERT INTO `hopdong`(`id`, `tenHopDong`, `ngayHoanThanh`, `Noidung`, `tongGia`, `hinhThucThanhToan`) VALUES 
            (null, '". $_SESSION['dattour']['nameTour'] ."', '2023-12-03', '". $_SESSION['dattour']['nameTour'] ."', ". $_SESSION["dattour"]["dongiatour"] * $_SESSION["dattour"]["soluongkhachdi"] .", 'cash')";
            $this->conn->query($sql1);
            $idhopdong = $this->conn->insert_id;
            $sql2 = "INSERT INTO `dattour`(`id`, `idKhachHang`, `ngayDat`, `trangThai`, `idHopDong`, `idlichtrinhtour`) VALUES 
            (null,".  $_SESSION['user']['id'].",'".date("Y-m-d")."', 'dangXuLy', $idhopdong, ". $_SESSION["dattour"]["lichtrinh"] .")";
            $this->connect()->query($sql2);
            for($i = 1; $i < $_SESSION["dattour"]["soluongkhachdi"]; $i++){
                $sql3 = "INSERT INTO `chitiethopdong`(`id`, `tenNguoiDi`, `gioitinh`, `chiTiet`, `idHopDong`) VALUES(null, '". $_POST["tennguoidi$i"] ."', '". $_POST["gioitinh$i"] ."', 'hihi', $idhopdong)";
                $this->connect()->query($sql3);
            }

            $sql3 = "UPDATE lichtrinh SET khachToiDa = khachToiDa - ". $_SESSION["dattour"]["soluongkhachdi"]." WHERE id = ". $_SESSION["dattour"]["lichtrinh"]; 
            $this->connect()->query($sql3);
            $_SESSION["dattour"] = [];
            echo "<script>alert('Đặt thành công')</script>";
            echo '<script>location.href="?page=tour"</script>';;
        }
    }
}
 ?>