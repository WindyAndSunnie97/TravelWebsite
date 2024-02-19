<style>
    @import url("/css/dattour.css");
</style>
<div class="container-dattour">
    <?php if ($_SESSION["dattour"] == null){
        $title = "Hiện chưa có tour nào được chọn";
    } else{
        $title = "Thông tin đặt tour";
    } ?>
    <div class="title">
            <h2><?php echo $title; ?></h2>
    </div>
    <?php if (!$_SESSION["dattour"] == null){ ?>
    <div class="dattour">
        <form action="" method="post">
            <div class="dat-tour-header">
                <div class="image-tour">
                    <div class="t-nguoi-dat">
                        <p>Thông tin người đặt</p>
                    </div>
                    <div class="name-nd">
                        <p>Tên người đặt: <span><?php echo " ".$_SESSION["user"]["tenkhachhang"]; ?></span></p>
                    </div>
                    <div class="sdt-nd">
                        <p>Số điện thoại người đặt: <span><?php echo " ".$_SESSION["user"]["sdt"]; ?></span></p>
                    </div>
                </div>
                <div class="thong-tin">
                    <div class="name-tour">
                        <h2><?php echo $_SESSION["dattour"]["nameTour"]; ?></h2>
                    </div>
                    <div class="lich-trinh">
                        <p> Lịch trình: <span><?php echo $dattour->getLichTrinh($_SESSION["dattour"]["lichtrinh"])->fetch_assoc()["ngayDi"]; ?></span></p>
                    </div>
                    <div class="so-luong">
                        <p>Số lượng khách: <span><?php echo $_SESSION["dattour"]["soluongkhachdi"] ; ?> người</span></p>
                    </div>
                </div>
            </div>
            <hr class="ngang1">
            <div class="dat-tour-body">
            <?php for($i = 1; $i < $_SESSION["dattour"]["soluongkhachdi"]; $i++){ ?>
                <div class="nguoi-di">
                    <div class="name-nguoi-di">
                        <label for="tennguoidi<?php echo $i; ?>">Nhập tên của người đi:</label>
                        <input type="text" id="tennguoidi<?php echo $i; ?>" name="tennguoidi<?php echo $i; ?>">
                    </div>
                    <div class="gioi-tinh-nguoi-di">
                        <input type="radio" id="nam<?php echo $i; ?>" value="nam" name="gioitinh<?php echo $i; ?>" checked>
                        <label for="nam<?php echo $i; ?>">Nam</label>
                        <input type="radio" id="nu<?php echo $i; ?>" value="nữ" name="gioitinh<?php echo $i; ?>">
                        <label for="nu<?php echo $i; ?>">Nữ</label>
                    </div>
                </div>
            <?php } ?>
            </div>
            <hr class="ngang1">
            <div class="thanh-toan">
                <div class="tt-l">

                </div>
                <div class="tt-r">
                    <div class="giam-gia">
                        <p>Giảm giá: <span>0đ</span></p>
                    </div>
                    <div class="tong-tien">
                        <p>Tổng tiền: <span><?php echo number_format($_SESSION["dattour"]["dongiatour"] * $_SESSION["dattour"]["soluongkhachdi"]) ?>đ</span></p>
                    </div>
                    <div class="btn-tt">
                        <button type="submit">Đặt tour</button>
                    </div>
                </div>
            </div>
            <!-- <div class="container-thongtinnguoidat">
                <div class="thongtinnguoidat">
                    <div class="tennguoidat">
                        <h3>Tên người đặt: </h3>
                        <h3><?php echo " ".$_SESSION["user"]["tenkhachhang"]; ?></h3>
                    </div>
                    <div class="sodienthoainguoidat">
                        <h3>Số điện thoại người đặt: </h3>
                        <h3><?php echo " ".$_SESSION["user"]["sdt"]; ?></h3>
                    </div>
                </div>
            </div>
            <?php if(isset($_SESSION["dattour"]["soluongkhachdi"])){ ?>
            <div class="container-thongtinnguoidi">
                <div class="thongtinnguoidi">
                    <?php for($i = 1; $i <= $_SESSION["dattour"]["soluongkhachdi"]; $i++){ ?>
                        <div class="nguoidi">
                            <div class="tennguoidi">
                                <label for="tennguoidi">Nhập tên người đi:</label>
                                <input type="text" id="tennguoidi" name="tennguoidi<?php echo $i; ?>" >
                            </div>
                            <div class="gioitinhnguoidi">
                                <input type="radio" id="nam<?php echo $i; ?>" value="nam" name="gioitinh<?php echo $i; ?>">
                                <label for="nam<?php echo $i; ?>">Nam</label>
                                <input type="radio" id="nu<?php echo $i; ?>" value="nữ" name="gioitinh<?php echo $i; ?>">
                                <label for="nu<?php echo $i; ?>">Nữ</label>
                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>
            <div class="button">
                <button type="submit">Đặt Tour</button>
            </div>
            <?php }?> -->
        </form>
    </div>
    <?php } ?>
</div>