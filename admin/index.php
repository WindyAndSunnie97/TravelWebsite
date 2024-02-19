
<?php session_start();
 require_once __DIR__ . "/models/connectDb.php";
  if (!isset($_SESSION["admin"]['user_email'])) {

    require_once __DIR__ . "/login.php";
  } else {
    ?>
     <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Admin</title>
        
    </head>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
#header{ 
    background-color: #951670c7;
    background-image: url(/images/anhnen1.jpg);
    opacity: 0.8;  filter: alpha(opacity=80);
    background-size: cover;
    height: 300px;
    width: 100%;
    background-position: center;
    padding: 43px;
    margin: 0px;
}
#right{
    width: 250px;
    background-color: rgb(244 182 226);
    float:left;
    margin: 7px 36px 0 9px;
    border: 2px solid #951670c7;
    border-radius:25px;
}
#right li{
    display: list-item;
    text-align: -webkit-match-parent;
}
#right a{
    display: block;
    padding: 15px 10px;
    line-height: 30px;
    border: 10px;
    text-decoration: none;
    color: rgb(16, 16, 16);
    text-align: center;
    font-size: 28px ;
}

    </style>
    <body>

        <div class="main_wrapper">
            <div id="header">
            <h1 style="text-align: center; 
            margin-top: 50px;
            font-size:100px; 
            text-shadow: -1px 0 20px white, 0 1px 20px white, 1px 0 20px white, 0 -1px 20px white;
            font-family: Cambria;color:#950069;">MANAGE CONTENT</h1>

            </div>
            <div id="right">
                
                <ul class="sidebar">
                    
                    <a href="index.php">Trang chủ</a>
                    <a href="?pageAdmin=editTheLoai">Tất cả thể loại</a>
                    <a href="?pageAdmin=themTheLoai">Thêm thể loại</a>
                    <a href="?pageAdmin=editTour">Tất cả các tour</a>
                    <a href="?pageAdmin=themTour">Thêm tour</a>
                    <a href="?pageAdmin=viewKhachHang">Khách hàng</a>
                    <a href="?pageAdmin=viewChiTietHopDong">Thông tin người đi</a>
                    <a href="?pageAdmin=viewHopDong">Hợp đồng</a>
                    <a href="?pageAdmin=logout">Đăng xuất</a>
                 
                </ul>
            </div>
            <div id="left">
                <?php
                if(isset($_GET["pageAdmin"])){
                    require_once __DIR__ . "/controllers/" . $_GET["pageAdmin"] .".php";
                    $admin = new $_GET["pageAdmin"];
                    $admin->index();


                }
                ?>
            </div>
        </div>
    </body>
    </html>
    <?php
}
?>
