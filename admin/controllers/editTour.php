<?php
class editTour extends connectDb{
    public function index(){
        if(!isset($_GET["action"])){
            $kq = $this->getTour();
            require_once __DIR__ . "/../views/viewEditTour.php";

        }else{
            if(isset($_GET["edit_tour"])){
                $kq = $this->getTourById($_GET["edit_tour"]);
                require_once __DIR__ . "/../views/viewSuaTour.php";
                if(isset($_POST['update_tour'])){
                    $this->update($_POST["donGia"],$_POST["giamGia"], $_POST["noiBat"], $_GET["edit_tour"]);
                    echo "<script>alert('Update success');location.href='?pageAdmin=editTour&action=chinhsua&edit_tour=". $_GET["edit_tour"] ."'</script>";
                }  elseif(isset($_POST['delete_tour'])){
                    $this->delete($_GET["edit_tour"]);
                    echo "<script>location.href='?pageAdmin=editTour'</script>";
                }
            }else{
                echo "View not found";
            }
        }    
        
        
        
    }

    public function getTour(){
        $sql = "SELECT *, tour.id AS id_tour FROM tour JOIN diadiem ON tour.idDiaDiemDen = diadiem.id JOIN diadanh ON tour.idDiaDiemDen = diadanh.idDiaDiem";
        $result=$this->connect()->query($sql);
        return $result;
    }
    public function getTourById($id){
        $sql = "SELECT *, tour.id AS id_tour FROM tour JOIN diadiem ON tour.idDiaDiemDen = diadiem.id JOIN diadanh ON tour.idDiaDiemDen = diadanh.idDiaDiem where tour.id=".$id;
        $result=$this->connect()->query($sql);
        return $result;
    }
    private function update($dongia, $giamGia, $noiBat, $id){
        $sql = "UPDATE tour SET donGia=$dongia, giamGia=$giamGia, noibat=$noiBat where tour.id =$id";
        $this->connect()->query($sql);
    }
    private function delete($id):void{
        $sql = "DELETE FROM tour where tour.id =$id";
        $this->connect()->query($sql);
    }

}
 ?>