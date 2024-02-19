<?php
 class themTour extends connectDB{
    public function index(){
        $diaDiem = $this->getDiaDiem();
        $diaDiem1 = $this->getDiaDiem();
        $diaDanh= $this->getDiaDanh();
        $ngayDi = $this->getLichTrinh();
        require_once __DIR__ . "/../views/themTour.php";
        $this->themTour();
    }


    public function themTour(){
       if(isset($_POST['them_tour']) ){
        $sql= "INSERT INTO `diadanh`(`id`, `tenDiaDanh`, `idDiaDiem`, `moTaDiaDanh`, `hinhanh`) VALUES (null,'". $_POST["diaDanh"] ."','". $_POST["diemDen"] ."','abcxyz','url hinh anh') ";
        $sql1 = "INSERT INTO `tour`(`id`, `donGia`, `idDiaDiemDi`, `idDiaDiemDen`, `maLichTrinh`, `maTheLoai`, `thoiHan`, `hinhAnh`, `giamGia`, `noibat`) VALUES (null,".$_POST["donGia"] .",". $_POST["diemDi"] .",". $_POST["diemDen"] .",". $_POST["ngayDi"] .",2,'(3N2Đ)','url hình ảnh',". $_POST["giamGia"] .",'". $_POST["noiBat"] ."')"; 
        $this->connect()->query($sql);
        $this->connect()->query($sql1);
       }
    }
    public function getDiaDiem(){
        $sql="SELECT * from diadiem ";
        $result = $this->connect()->query($sql);
        return $result;    
    }
    public function getDiaDanh(){
        $sql="SELECT * from diadanh ";
        $result = $this->connect()->query($sql) ; 
        return $result;  
    }
    public function getLichTrinh(){
        $sql="SELECT * FROM `lichtrinh`";
        $result = $this->connect()->query($sql);
        return $result;

    }
    
    
 }

?>