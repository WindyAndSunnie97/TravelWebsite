<?php
class trangchu extends connectDB {
    public function hienThi(){
        $giamGia = $this->getGiamGia();
        $noibat = $this->getnoibat();
        require_once __DIR__ . "/../views/trangchu.php";
    }
    public function getGiamGia(){
        $sql = "SELECT *, tour.id AS id_tour FROM tour JOIN diadiem ON tour.idDiaDiemDen = diadiem.id JOIN diadanh ON tour.idDiaDiemDen = diadanh.id WHERE tour.giamGia > 0 ORDER BY tour.giamGia DESC LIMIT 0,5";
        $kq = $this->connect()->query($sql);
        return $kq;
    }
    public function getnoibat(){
            $sql = "SELECT *, tour.id AS id_tour FROM tour JOIN diadiem ON tour.idDiaDiemDen = diadiem.id JOIN diadanh ON tour.idDiaDiemDen = diadanh.id WHERE tour.noibat = 1 ORDER BY tour.noibat LIMIT 0,5";
            $kq1 = $this->connect()->query($sql);
            return $kq1;
        }
    }
?>
