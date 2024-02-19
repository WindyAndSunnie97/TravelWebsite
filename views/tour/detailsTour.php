<div class="details-Tour">
    <div class="details-item">
        <h2>Chi tiết Tour</h2>
       <?php $row = $details->fetch_assoc()?>
       <div class="main-tour">
            <div class ="img-details-tour">
                    <img src="/images/hinhanh_tour/<?php echo $row["hinhAnh"] ?>" alt="hình ảnh tour" >
            </div> 
            <div class="mid-details-tour" >    
                  <div class="name-details-tour">
                       <h1>
                         <?php $name = "Tour " . $row["tenDiaDiem"] . " - " . $row["tenDiaDanh"]  ." ". $row["thoiHan"]; echo $name;?>
                       </h1>
                  </div>
                   <div class="price-details-tour">
                      <span>Giá:<?php if($row["giamGia"] > 0){$price = (int)($row["donGia"] -($row["donGia"]*$row["giamGia"]/100));} else { $price = (int)$row["donGia"]; }   echo number_format($price);?>đ</span>
                   </div>
                  <div class="right-details-tour">
                    <form action="" method="post">
                    <div>
                        <h4>Lịch trình</h4>
                        <select name="lichtrinh" id="lichtrinh">
                            <?php while ($row1 = $lichtrinh->fetch_assoc()){ ?>
                                <option value="<?php echo $row1["id"] ?>"><?php echo $row1["ngayDi"] ?></option>
                            <?php }?>
                        </select>
                        <h4>
                            Số lượng khách tối đa của tour: <?php echo $tour->getKhachToiDa()->fetch_assoc()["khachToiDa"]?>
                        </h4>
                    </div>
                        <div class="nhapnguoidi">
                            <label for="khachdi">Nhập số người đi:</label>
                            <input type="number" id="khachdi" name="soluongkhachdi" value="1" min ="1" max='<?php echo $tour->getKhachToiDa()->fetch_assoc()["khachToiDa"]?>'>
                        </div>
                     </div>
                    <input type="number" value="<?php echo $price ?>" style="display: none;" name="dongiatour">
                    <input type="text" name="nameTour" value="<?php echo $name; ?>" style="display:none;">

                    <div class="order-details-tour">
                        <button type="submit" >Đặt tour ngay</button>
                    </div>
                    </form>
            </div>   
            </div>

            <div class="footer-details-tour">
                    <div class= "images-details-tour">
                     <img src="/images/tour/<?php echo $row["hinhanh"] ?>" alt="hình ảnh địa danh">
                     </div>
                    <div class="share-details-Tour">
                      <ul>
                      <li> <?php echo $name = "Địa điểm:" . $row["tenDiaDanh"] ?></li>
                      <li> <?php echo $name = "Mô tả:" . $row["moTa"] ?></li>
                      </ul>
</div>
                </div> 
            
    </div>
</div>