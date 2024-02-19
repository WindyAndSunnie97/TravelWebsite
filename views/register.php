<div class="register-content-items">
 <div class="register">
  <form action='' method="post">
    <div class="form">
         <h1>Đăng kí tài khoản</h1>
        <div class="input">
          <label>Tên khách hàng</label>
          <input type="text" name="tenkhachhang"/>
        </div>
        <div class="input">
          <label>Giới tính</label>
          <input type="text" name="gioitinh"/>
        </div>
        <div class="input">
          <label>Năm sinh</label>
          <input type="text" name="namsinh"/>
        </div>
        <div class="input">
          <label>Số điện thoại</label>
          <input type="text" name="sdt"/>
        </div>
        <div class="input">
          <label>Email</label>
          <input type="text" name="email"/>
        </div>
        <div class="input">
          <label>Tên đăng nhập</label>
          <input type="text" name="tendangnhap"/>
        </div>
        <div class="input">
          <label>Password</label>
          <input type="password" name="password"/>
        </div>
        
        <div>
                <button>Đăng ký</button>
        </div>
    </div>
</div>
  </form>
  <?php
  if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"]=="POST"){
    $Tenkhachhang = htmlspecialchars($_POST["tenkhachhang"]);
    $Gioitinh = htmlspecialchars($_POST["gioitinh"]);
    $Namsinh = htmlspecialchars($_POST["namsinh"]);
    $Sdt = htmlspecialchars($_POST["sdt"]);
    $Email = htmlspecialchars($_POST["email"]);
    $Tendangnhap = htmlspecialchars($_POST["tendangnhap"]);
    $Password = htmlspecialchars($_POST["password"]);
    $sql="INSERT INTO `khachhang`(`id`, `tenKhacHhang`, `gioiTinh`, `namSinh`, `sdt`, `cccd/cmnd`, `email`, `tenDangNhap`, `passWord`) VALUES 
     (NULL, '$Tenkhachhang', '$Gioitinh', '$Namsinh', $Sdt, 0, '$Email', '$Tendangnhap', '$Password')";
    $connect = new connectDB();
    $connect = $connect->connect();
    $result = $connect->query($sql);
  
    if($result){
      $_SESSION["user"] = [];
      $_SESSION["user"]["tenkhachhang"] = $Tenkhachhang;
      $_SESSION["user"]["sdt"] = $Sdt;
      $_SESSION["user"]["id"] = $connect->insert_id;
      $_SESSION["user"]["gioiTinh"] = $Gioitinh;
      $_SESSION["dattour"] = [];
      echo '<script>alert("Đăng kí thành công"); location.href="?page=trangchu"</script>';

      
    }
    else{
      echo '<script>alert("Đăng kí thất bại");</script>';
    }

  }
  ?>
</div>