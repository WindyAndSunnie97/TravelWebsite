
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2 style="    margin: 30px 0px;
    margin-left: 300px;
    font-size: 30px;
    background: linear-gradient(to left, rgb(255, 255, 255), rgba(255, 218, 239, 0.799), rgb(170 51 135));
    border-radius: 10px;
    padding: 10px;
    color: white;">XÓA THỂ LOẠI</h2>
        </div>
        <div class="card-body">
            <?php
              include('/XAMPP/htdocs/quanlytourdulich/admin/includes/db.php');
              if(isset($_GET['edit_tl'])) {
                   $get_id = $_GET['edit_tl'];
                   $get_tl = "select * from theloai where idTheLoai='$get_id' ";
                   $run_tl = mysqli_query($con, $get_tl);

                   $row_tl = mysqli_fetch_array($run_tl);
                   $tl_id = $row_tl['idTheLoai'];
                   $tl_tenTheLoai = $row_tl['tenTheLoai'];
               }
             ?>
            <form  method="post" enctype="multipart/form-data">

                <div style="font-size:23px;padding-bottom: 15px;">
                    <label for="">Tên thể loại: </label>
                    <input type="text" name="tenTheLoai" style="font-size:23px;padding-bottom: 15px;"value="<?php echo $tl_tenTheLoai;  ?>">
                </div>

                <input type="submit" name="delete_tl" value="Xóa thể loại" style="width: 150px;
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

