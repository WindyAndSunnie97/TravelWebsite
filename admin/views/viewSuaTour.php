
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2 style="    margin: 30px 0px;
    margin-left: 300px;
    font-size: 30px;
    background: linear-gradient(to left, rgb(255, 255, 255), rgba(255, 218, 239, 0.799), rgb(170 51 135));
    border-radius: 10px;
    padding: 10px;
    color: white;">EDIT</h2>
        </div>
        <div class="card-body">
            <?php
              include('/XAMPP/htdocs/quanlytourdulich/admin/includes/db.php');
              if(isset($_GET['edit_tour'])) {
                   $get_id = $_GET['edit_tour'];
                   $get_tour = "select * from tour where id='$get_id' ";
                   $run_tour = mysqli_query($con, $get_tour);

                   $row_tour = mysqli_fetch_array($run_tour);
                   $tour_id = $row_tour['id'];
                   $tour_dongia = $row_tour['donGia'];
                   $tour_thoihan = $row_tour['thoiHan'];
                   $tour_giamgia = $row_tour['giamGia'];
                   $tour_noibat = $row_tour['noibat'];
                   

               }
             ?>
            <form  method="post" enctype="multipart/form-data">

                <div style="font-size:23px;padding-bottom: 15px;">
                    <label for="">Đơn giá: </label>
                    <input type="number" name="donGia" style="font-size:23px;padding-bottom: 15px;"value="<?php echo $tour_dongia;  ?>">đ
                </div>
                <div style="font-size:23px;padding-bottom: 15px;">
                    <label for="">Thời hạn đi: </label>
                    <input type="date" name="thoiHan" style="font-size:23px;padding-bottom: 15px;"<?php echo $tour_thoihan; ?>">
                </div>
                <div style="font-size:23px;padding-bottom: 15px;">
                    <label for="">Giảm giá: </label>
                    <input type="number" name="giamGia" style="font-size:23px;padding-bottom: 15px;"<?php echo $tour_giamgia; ?>"> %
                </div>

                <div style="font-size:23px;padding-bottom: 15px;">
                    <label for="">Nổi bật: </label>
                    <input type="number" name="noiBat" style="font-size:23px;padding-bottom: 15px;" value="<?php echo $tour_noibat; ?>">
                </div>
                <input type="submit" name="update_tour" value="Cập nhật tour" style="width: 110px;
    height: 30px;
    cursor: pointer;
    border-radius: 5px;
    border: none;
    background-color: rgb(249, 128, 188);
    color: white;
    font-size: 15px;">
                <input type="submit" name="delete_tour" value="Xóa tour" style="width: 110px;
    height: 30px;
    cursor: pointer;
    border-radius: 5px;
    border: none;
    background-color: rgb(249, 128, 188);
    color: white;
    font-size: 15px;">

            </form>
        </div>
    </div>
</div>

