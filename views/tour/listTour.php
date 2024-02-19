<div class="container-listTour">
    <div class="list-tour">
        <?php while ($row = $listTour->fetch_assoc()){ ?>
        <div class="item">
            <div class="inner-item">
                <div class="img-tour">
                     <img src="/images/hinhanh_tour/<?php echo $row["hinhAnh"] ?>" alt="hình ảnh tour"></a>
                </div>
                <div class="name-tour">
                    <h3>
                        <?php echo $name = "Tour " . $row["tenDiaDiem"] . " _ " . $row["tenDiaDanh"]." _ ". $row["thoiHan"]; ?></a>
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
    <div class="so-trang">
    <div class="st">
        <div style="clear:both;"></div>

         <?php 
        
        for($i=1; $i<= $tongtrang;$i++){
            echo '<a href ="?page=tour&trangso='.$i.'"style="padding: 10px;font-size: 20px;background-color: #f9dfff;margin-right: 5px;text-decoration: none;">'.$i.'</a>';
        }
         ?> 

        </div>

        <!-- <a href="page=tour&p=1?page=tour&p=1"style=" padding: 10px;font-size: 20px;background-color: #f9dfff;margin-right: 5px;">1</a>
        <a href="page=tour&p=1?page=tour&p=2"style="padding: 10px;font-size: 20px;background-color: #f9dfff;margin-right: 5px;">2</a>
        <a href="page=tour&p=1?page=tour&p=3"style="padding: 10px;font-size: 20px;background-color: #f9dfff;margin-right: 5px;">3</a>
        <a href="page=tour&p=1?page=tour&p=4"style="padding: 10px;font-size: 20px;background-color: #f9dfff;margin-right: 5px;">4</a> -->
    </div> 
   
</div>
