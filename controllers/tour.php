<?php 
class tour extends connectDB {
    public function getTour(){
        if(isset($_GET["timdiadiem"])){
            $sql = "SELECT *
        FROM diadiem
        JOIN diadanh ON diadiem.id = diadanh.idDiaDiem
        JOIN tour ON diadiem.id = tour.idDiaDiemDen
        JOIN lichtrinh ON tour.maLichTrinh = lichtrinh.id
        WHERE diadiem.tenDiaDiem LIKE '%". $_GET['timdiadiem'] ."%';";
        }else{
           
            if(isset($_GET['trangso'])){
                $trangHienTai = $_GET["trangso"];
                $trangHienTai = $trangHienTai < 1 ? 1: $trangHienTai;
                
            }else{
                $trangHienTai = 1;
            }
            $start = ($trangHienTai - 1) * LIMIT;
            $sql = "SELECT *, tour.id AS id_tour FROM tour JOIN diadiem ON tour.idDiaDiemDen = diadiem.id JOIN diadanh ON tour.idDiaDiemDen = diadanh.idDiaDiem limit $start," . LIMIT;
        }
        
        
        $result = $this->connect()->query($sql);
        return $result;
    }
    public function getSoTrang(){
        $sql = "SELECT count(*) as `count` FROM tour";
        $kq = $this->connect()->query($sql);
        return ceil($kq->fetch_assoc()["count"]/LIMIT);
    }
    
    public function getDanhMuc(){
        $sql = "SELECT * FROM theloai";
        $result = $this->connect()->query($sql);
        return $result;
    }
    public function getTheLoai(){
        $idDanhMuc = $_GET["idTheLoai"];
        $sql = "SELECT *, tour.id AS id_tour FROM tour JOIN diadiem ON tour.idDiaDiemDen = diadiem.id
        JOIN diadanh ON tour.idDiaDiemDen = diadanh.id WHERE matheloai = $idDanhMuc";
        $result = $this->connect()->query($sql);
        return $result;
    }
    public function getChiTiet(){
        $sql = "SELECT * FROM tour
        JOIN diadiem ON tour.idDiaDiemDen = diadiem.id
        JOIN diadanh ON tour.idDiaDiemDen = diadanh.id
        WHERE tour.id =".$_GET["id"];
        $result = $this->connect()->query($sql);
        return $result;
    }
    public function getKhachToiDa(){
        $sql = "SELECT * from lichtrinhtour
        join lichtrinh on lichtrinhtour.idlichTrinh = lichtrinh.id
        where lichtrinhtour.idTour=".$_GET['id'];
        return $this->connect()->query($sql);
    }
    public function getLichTrinh(){
        $sql = "SELECT * from lichtrinhtour join lichtrinh on lichtrinhtour.idlichTrinh = lichtrinh.id
        where lichtrinhtour.idTour =". $_GET['id'];
        $result = $this->connect()->query($sql);
        return $result;
    }
    public function getTimKiem(){
        $sql = "SELECT * FROM diadiem
        JOIN diadanh ON diadiem.id = diadanh.idDiaDiem
        JOIN tour ON diadiem.id = tour.idDiaDiemDen
        JOIN lichtrinh ON tour.maLichTrinh = lichtrinh.id
        WHERE diadiem.tenDiaDiem LIKE '%địa điểm cần tìm kiếm%' ";
        $result = $this->connect()->query($sql);
        return $result;
    }
    public function dattour(){
        if(isset($_POST["soluongkhachdi"])){
            if(!isset($_SESSION["dattour"]["soluongkhachdi"])){
                $_SESSION["dattour"]["soluongkhachdi"] = $_POST["soluongkhachdi"];
                $_SESSION["dattour"]["lichtrinh"] = $_POST["lichtrinh"];
                $_SESSION["dattour"]["dongiatour"] = $_POST["dongiatour"];
                $_SESSION["dattour"]["nameTour"] = $_POST["nameTour"];
                echo '<script>location.href="?page=dattour"</script>';
            }
           
        }
    }
}
?>