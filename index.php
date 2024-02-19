<?php
session_start();
require_once "configs/config.php";
require_once __DIR__ . "/include/header.php";
require_once __DIR__ . "/controllers/connectDB.php";
if(isset($_GET["page"])){
    switch($_GET["page"]){
        case "tour":
            require_once __DIR__ . "/controllers/tour.php";
            $tour = new tour();
            $listTour = $tour->getTour();
            $danhmuc = $tour->getDanhMuc();
            $tongtrang = $tour->getSoTrang();

            echo '<section><div class="container-tour">';
            require_once __DIR__ . "/views/tour/danhmuc.php";
            // kiểm tra action có tồn tại hay không nếu có thì chuyển hướng đến trang tương ứng
            if(isset($_GET["action"])){
                switch($_GET["action"]){
                    case "detail":
                        $details = $tour->getChiTiet();
                        $lichtrinh = $tour->getLichTrinh();
                        require_once __DIR__ . "/views/tour/detailsTour.php";
                        $tour->dattour();
                        break;
                    case "list":
                        require_once __DIR__ . "/views/tour/listTour.php";
                        break;
                    case "search":
                        $search = $tour->getTimKiem();
                        require_once __DIR__ . "/views/tour/searchTour.php";
                        break;
                    case "theloai":
                        // lấy mã thể loại từ biến GET
                        $theloai = $tour->getTheLoai();
        
                        require_once __DIR__ . "/views/tour/theloaiTour.php";
                        break;
                    default:
                        require_once __DIR__ . "/views/tour/listTour.php";
                        break;
                    
                }
            }else{
                require_once __DIR__ . "/views/tour/listTour.php";
            }
            
            echo '</div></section>';
            break;

        case "register":
    
            require_once __DIR__ . "/views/register.php";
            break;

        case "login":
            require_once __DIR__ . "/views/login.php";
            require_once __DIR__ . "/controllers/login.php";
            $dangnhap = new login();
            $dangnhap->login();
            // mysqli_connect('$localhost', '$root','', '$khachhang');
            // mysqli_set_charset($connect,"utf8");
            break;
            
        case "logout":
            session_destroy();
            echo "<script>location.href='?page=tour'</script>";
            break;
        case "dattour":
            require_once __DIR__ . "/controllers/dattour.php";
            $dattour = new dattour();
            $dattour->dattour();
            require_once __DIR__ . "/views/dattour.php";
            break;
        case "introducetour":
    
                require_once __DIR__ . "/views/introducetour.php";
                break;
        case "tourDaDat":
            require_once __DIR__ . "/controllers/tourDaDat.php";
            $tourDaDat = new tourDaDat();
            $tourDaDat->index();
            break;
        case "trangchu":
            require_once __DIR__ . "/controllers/trangchu.php";
            $trangChu = new trangchu;
            $trangChu->hienThi();

            break;
    }

}
require_once __DIR__ . "/include/footer.php";

?>