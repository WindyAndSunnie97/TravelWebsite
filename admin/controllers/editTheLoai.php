<?php
class editTheLoai extends connectDB{
    public function index(){      
    if(!isset($_GET["action"])){
        $kq = $this->getTheLoai();
        require_once __DIR__. "/../views/viewTheLoai.php";

    }else{
        $kq = $this->getTLById($_GET["edit_tl"]);
        require_once __DIR__ . "/../views/viewSuatheloai.php";
        if(isset($_POST['update_tl'])){
            $this->update($_POST["tenTheLoai"], $_GET["edit_tl"]);
            echo "<script>location.href='?pageAdmin=editTheLoai&action=chinhsua&edit_tl=". $_GET["edit_tl"] ."'</script>";
        }  elseif(isset($_POST['delete_tl'])){
            $this->delete($_GET["edit_tl"]);
            echo "<script>location.href='?pageAdmin=editTheLoai'</script>";
        }
        
    }    
    
    
    
}

public function getTheLoai(){
    $sql = "SELECT * FROM theloai";
    $result=$this->connect()->query($sql);
    return $result;
}
public function getTLById($idTheLoai){
    $sql = "SELECT * FROM theloai where theloai.idTheLoai=".$idTheLoai;
    $result=$this->connect()->query($sql);
    return $result;
}
private function update($tenTheLoai, $idTheLoai):void{
    $sql = "UPDATE theloai SET tenTheLoai=$tenTheLoai where theloai.idTheLoai =".$idTheLoai;
    $this->connect()->query($sql);
}
private function delete($idTheLoai):void{
    $sql = "DELETE FROM theloai where theloai.idTheLoai =$idTheLoai";
    $this->connect()->query($sql);
}

}
?>



