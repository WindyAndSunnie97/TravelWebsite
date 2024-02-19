<div class="container-listTour">
    <div class="list-tour">
        <?php while ($row = $theloai->fetch_assoc()){ ?>
         <div class="item">
            <div class="inner-item">
                <div class="img-tour">
                    <a href="?page=tour&action=detail&id=<?php echo $row["id_tour"] ?>"> <img src="/images/hinhanh_tour/<?php echo $row["hinhAnh"] ?>" alt="hình ảnh tour"></a>
                </div>
                <div class="name-tour">
                    <h3>
                        <a href="?page=tour&action=detail&id=<?php echo $row["id_tour"] ?>"><?php echo $name = "Tour " . $row["tenDiaDiem"] . " _ " . $row["tenDiaDanh"]." _ ". $row["thoiHan"]; ?></a>
                    </h3> 
                </div>
                <div class="price-tour" <?php if((int)$row["giamGia"] > 0) echo 'style="text-decoration: line-through; color:black; font-size:25px;"'; ?>>
                    <?php $price = (int)$row["donGia"];?>
                    <span style="font-size:25px;">Giá: <?php echo number_format((int)$row["donGia"]) ?>đ</span>
                </div>
            
                <div class="giamgia">
                   <p>
                   <?php 
                       
                       if($row["giamGia"]==NULL || $row["giamGia"]==0){
                        // echo number_format($price);
                       }
                       else{
                       $price = (int)($row["donGia"] -($row["donGia"]*$row["giamGia"]/100));
                      ?>
                       <span style="color:red; font-size:25px;">Giá đã giảm: <?php echo number_format($price) ?>đ</span>
                    
                    <?php  }
                    ?>

                  </p>
                </div>

                <div class="order-tour">
                   <button onclick="location.href='?page=tour&action=detail&id=<?php echo $row['id_tour'] ?>'">Xem chi tiết</button>
                    
                    
                </div>
            </div>
        </div>
        <?php } ?>
    </div>

</div>