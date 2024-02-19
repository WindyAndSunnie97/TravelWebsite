<style>
    @import url('/css/tourDaDat.css');
</style>
<div class="container-tour-da-dat">
    <?php while($datour = $idTour->fetch_assoc()){ 
        $hopDong = $this->getHopDong($datour['idHopDong'])->fetch_assoc();?>
    <div class="tdd">
        <div class="t-tdd">
            <p>Mã hợp đồng: ID1000<?php echo $datour["id"] ?></p>
        </div>
        <div class="info-tdd">
            <div class="info-nd">
                <div class="t-i">
                    <p>Danh sách người đi:</p>
                </div>
                <ul class="n-i">
                    <li><?php echo $_SESSION["user"]["tenkhachhang"]." - ". $_SESSION["user"]['gioiTinh'] ?></li>
                    <?php $s = 0; $chiTiet = $this->getChiTietHopDong($hopDong["id"]); while ($nguoiDi = $chiTiet->fetch_assoc()){?>
                    <li><?php echo $nguoiDi["tenNguoiDi"] ?> - <?php echo $nguoiDi["gioitinh"] ?></li>
                    
                    <?php $s+=1; } ?>
                </ul>
            </div>
            <div class="info-t">
                <div class="n-t">
                    <h3><?php echo $hopDong["tenHopDong"] ?></h3>
                </div>
                <div class="ngay-dat">
                    <p>Ngày đặt tour: <span><?php echo $datour["ngayDat"] ?></span></p>
                </div>
                <div class="lich-trinh">
                    <p>Lịch trình: <span><?php echo $this->getLichTrinh($datour["idlichtrinhtour"])->fetch_assoc()["ngayDi"] ?></span></p>
                </div>
                <div class="trang-thai">
                    <?php $status = $this->getStatus($datour["trangThai"]) ?>
                    <p>Trạng thái: <span style="color: <?php echo $status[1] ?>;"><?php echo $status[0] ?></span></p>
                </div>
                <div class="tien">
                    <p>Tổng tiền: <span><?php echo number_format((int)$hopDong["tongGia"]) ?>đ</span></p>
                </div>
            </div>
        </div>
        <div class="ghi-chu">
            <p>Ghi chú: <span>bla bla bla</span></p>
        </div>
        <?php if($datour["trangThai"] === "dangXuLy"){?>
        <form action="" method="post">
            <input type="text" name="cancel" value="<?php echo $datour["id"] ?>" style="display: none;">
            <input type="text" name="lichtrinh" value="<?php echo $datour["idlichtrinhtour"] ?>" style="display: none;">
            <input type="text" name="soluongkhachdi" value="<?php echo $s + 1; ?>" style="display: none;">
            <button type="submit">Hủy tour này</button>
        </form>
        <?php } ?>
    </div>
    <?php } ?>
</div>