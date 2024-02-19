<?php
class login extends connectDB {
    public function login(){
        if (isset($_POST["tenkhachhang"])){
            $tenkhachhang = $_POST["tenkhachhang"];
            $password = $_POST["password"];
            $sql = "SELECT * FROM khachhang WHERE tenDangNhap = '$tenkhachhang' AND passWord = '$password'";
            $kq = $this->connect()->query($sql);
            
            $row = $kq->fetch_assoc();
            if(isset($row['tenKhacHhang'])){
            $_SESSION["user"] = [];
            $_SESSION["user"]["tenkhachhang"] = $row["tenKhacHhang"];
            $_SESSION["user"]["sdt"] = $row["sdt"];
            $_SESSION["user"]["id"] = $row["id"];
            $_SESSION["user"]["gioiTinh"] = $row["gioiTinh"];
            $_SESSION["dattour"] = [];
            echo '<script>location.href="?page=trangchu"</script>';}
         }
        }  
    }