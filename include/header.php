<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tour du lịch</title>
   
    <script
      src="https://kit.fontawesome.com/0a37ab2a11.js"
      crossorigin="anonymous"
    ></script>
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
  />
  <script
    src="https://kit.fontawesome.com/kitcode.js"
    crossorigin="anonymous"
  ></script>
    <?php require_once "configs/scripts.php";?>
    <link rel="stylesheet" href="/css/register.css">
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="/css/introducetour.css">
    <link rel="stylesheet" href="/css/detailtour.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/tour.css">
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/main.css">
  </head>
  <body>
    <header>
    <div class="contaier-header">
        <img id="logo" src="/images/logo1.jpg" alt="#" />
        <div class="search">
          <div class="search-content-items row">
            <form action="/index.php/?page=tour/" method="get">
              <input type="text" name="page" value="tour" style="display:none;">
              <div>
                <input type="text" placeholder="Nhập địa điểm muốn đi"  name="timdiadiem"/>
              </div>
              <div>
                <input type="text" placeholder="Nhập thời hạn đi" />
              </div>
              <div>
                <input type="text" placeholder="Nhập ngày đi" />
              </div>
              <div>
                <button>Tìm kiếm</button>
              </div>
            </form>
          </div>
        </div>
            </form>
          </div>
        </div>
      </div>
<div class="menubar">
    <ul id="menu">
        <li><a href="?page=trangchu">Trang chủ</a></li>
        <li><a href="?page=introducetour">Giới thiệu</a></li>
        <li><a href="?page=tour">Tours</a></li>
        <?php if(!isset($_SESSION["user"])){ ?>
        <li><a href="?page=register">Đăng ký</a></li>
        <li><a href="?page=login">Đăng nhập</a></li>
          <?php }else{?>
            <li><a href="?page=dattour">Đặt tour</a></li>
            <li><a href="?page=logout">Đăng xuất</a></li>
            <li><a href="?page=tourDaDat">Tour đã đặt</a></li>
          <?php }?>
        
    </ul>
    
</div>

    </header>
    <main>