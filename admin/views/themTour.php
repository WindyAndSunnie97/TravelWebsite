<?php

  

?>


<div class="container">
    <div class="card">
        <div class="card-header">
            <h2 style="    margin: 30px 0px;
    margin-left: 300px;
    font-size: 30px;
    background: linear-gradient(to left, rgb(255, 255, 255), rgba(255, 218, 239, 0.799), rgb(170 51 135));
    border-radius: 10px;
    padding: 10px;
    color: white;">THÊM TOUR DU LỊCH</h2>
        </div>
        <div class="card-body">
            <form  method="post" enctype="multipart/form-data">
                <div style=" font-size: 23px;padding-bottom: 15px;margin-left: 300px;">
                    <label for="">Chọn địa điểm đi: </label>
                    <select name="diemDi" id="" style=" font-size: 18px;padding-bottom: 15px;">
                        <?php while ($row1 =$diaDiem->fetch_assoc()){ ?>
                        <option  value="<?php echo $row1["id"]?>" style=" font-size: 18px;padding-bottom: 15px;"><?php echo $row1["tenDiaDiem"]?></option>

                      <?php  } ?>
                    </select>
                </div>
                <div style=" font-size: 23px;padding-bottom: 15px;margin-left: 300px;">
                    <label for="">Chọn địa điểm đến: </label>
                    <select name="diemDen" id="" style=" font-size: 18px;padding-bottom: 15px;">
                        <?php while ($row2 =$diaDiem1->fetch_assoc()){ ?>
                        <option value="<?php echo $row2["id"]?>"><?php echo $row2["tenDiaDiem"]?></option>

                      <?php  } ?>
                    </select>
                   
                </div>
                <div style="  font-size: 23px;padding-bottom: 15px;margin-left: 300px;">
                    <label for="">Nhập tên địa danh: </label>                       
                    <input type="text" name="diaDanh" style=" font-size: 18px;padding-bottom: 15px;" >
                </div>
                <div style=" font-size: 23px;padding-bottom: 15px;margin-left: 300px;">
                    <label for="">Mô tả địa danh: </label>                       
                    <input type="text" name="moTaDiaDanh" style=" font-size: 18px;padding-bottom: 15px;" >
                </div>
                <div style=" font-size: 23px;padding-bottom: 15px;margin-left: 300px;">
                    <label for="">Hình ảnh địa danh</label>
                    <input type="file" name="hinhanh" style=" font-size: 18px;padding-bottom: 15px;" value="" >
                </div>
                <div style=" font-size: 23px;padding-bottom: 15px;margin-left: 300px;">
                    <label for="">Hình ảnh tour: </label>
                    <input type="file" name="hinhAnh" style=" font-size: 18px;padding-bottom: 15px;" value="">
                </div>
                <div style=" font-size: 23px;padding-bottom: 15px;margin-left: 300px;">
                    <label for="">Ngày đi: </label>
                    <input type="date" name="ngayDi" style=" font-size: 18px;padding-bottom: 15px;" value="">
                </div>
                <div style=" font-size: 23px;padding-bottom: 15px;margin-left: 300px;">
                    <label for="">Đơn giá: </label>                       
                    <input type="number" name="donGia" style=" font-size: 18px;padding-bottom: 15px;">
                </div>
                <div style=" font-size: 23px;padding-bottom: 15px;margin-left: 300px;">
                    <label for="">Giảm giá: </label>
                    <input type="number" name="giamGia" value="" style=" font-size: 18px;padding-bottom: 15px;">
                </div>
                <div style=" font-size: 23px;padding-bottom: 15px;margin-left: 300px;">
                    <label for="">Nổi bật: </label>
                    <input type="number" name="noiBat" value="" style=" font-size: 18px;padding-bottom: 15px;">
                </div>
                <input type="submit" name="them_tour" value="Thêm tour" style="margin-left: 300px;width: 110px;
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