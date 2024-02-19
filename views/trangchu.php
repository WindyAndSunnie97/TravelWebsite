<style>
    @import url('/css/home.css');
</style>
<div class="container-trang-chu">
    <div class="trang-chu">
        <div class="container-giam-gia">
            <div class="title-giam-gia">
                <h2>Các Tour đang giảm giá</h2>
            </div>
            <div class="container-tour-giam-gia">
                <div class="tour-giam-gia">
                <?php while ($row = $giamGia->fetch_assoc()){ ?>
         <div class="t-giam-gia">
            <div class="inner-t-giam-gia">
                <div class="img-giam-gia">
                     <img src="/images/hinhanh_tour/<?php echo $row["hinhAnh"] ?>" alt="hình ảnh tour">
                </div>
                <div class="name-giam-gia">
                    <div class="ten">
                    <h3>
                        <?php echo $name = "Tour " . $row["tenDiaDiem"] . " _ " . $row["tenDiaDanh"]." _ ". $row["thoiHan"]; ?>
                    </h3> 
                    </div>
                </div>
                <div class="price-giam-gia" <?php if((int)$row["giamGia"] > 0) echo 'style="text-decoration: line-through; color:black; font-size:20px;"'; ?>>
                    <?php $price = (int)$row["donGia"];?>
                    <span style="font-size:17px;">Giá: <?php echo number_format((int)$row["donGia"]) ?>đ</span>
                </div>
                
                <span style="color:red;font-size:18px;">Giảm <?php echo ((int)$row["giamGia"]) ?>%</span>
                <div class="giamgia">
                   <p>
                   <?php 
                       
                       if($row["giamGia"]==NULL || $row["giamGia"]==0){
                        // echo number_format($price);
                       }
                       else{
                       $price = (int)($row["donGia"] -($row["donGia"]*$row["giamGia"]/100));
                      ?>
                       <span style="color:red; font-size:20px;">Giá đã giảm: <?php echo number_format($price) ?>đ</span>
                    
                    <?php  }
                    ?>

                  </p>
                </div>
                
                <div class="details-giam-gia">
                   <button onclick="location.href='?page=tour&action=detail&id=<?php echo $row['id_tour'] ?>'">Xem chi tiết</button>
                    
                    
                </div>
            </div>
        </div>
        <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container-trang-chu">
    <div class="trang-chu">
        <div class="container-giam-gia">
            <div class="title-giam-gia">
                <h2>Các Tour nổi bật</h2>
            </div>
            <div class="container-tour-giam-gia">
                <div class="tour-giam-gia">
                <?php while ($row1 = $noibat->fetch_assoc()){ ?>
         <div class="t-giam-gia">
            <div class="inner-t-giam-gia">
                <div class="img-giam-gia">
                     <img src="/images/hinhanh_tour/<?php echo $row1["hinhAnh"] ?>" alt="hình ảnh tour">
                </div>
                <div class="name-giam-gia">
                    <div class="ten">
                    <h3>
                        <?php echo $name = "Tour " . $row1["tenDiaDiem"] . " _ " . $row1["tenDiaDanh"]." _ ". $row1["thoiHan"]; ?>
                    </h3> 
                    </div>
                </div>
                <div class="price-giam-gia" <?php if((int)$row1["giamGia"] > 0) echo 'style="text-decoration: line-through; color:black; font-size:20px;"'; ?>>
                    <?php $price = (int)$row1["donGia"];?>
                    <span style="font-size:17px;">Giá: <?php echo number_format((int)$row1["donGia"]) ?>đ</span>
                </div>
                <div class="giamgia">
                   <p>
                   <?php 
                       
                       if($row1["giamGia"]==NULL || $row1["giamGia"]==0){
                        // echo number_format($price);
                       }
                       else{
                       $price = (int)($row1["donGia"] -($row1["donGia"]*$row1["giamGia"]/100));
                      ?>
                       <span style="color:red; font-size:20px;">Giá đã giảm: <?php echo number_format($price) ?>đ</span>
                    
                    <?php  }
                    ?>

                  </p>
                </div>
                
                <div class="details-giam-gia">
                   <button onclick="location.href='?page=tour&action=detail&id=<?php echo $row1['id_tour'] ?>'">Xem chi tiết</button>
                    
                    
                </div>
            </div>
        </div>
        <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

