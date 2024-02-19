<div class="container-danhmuc">
    <div class="danhmuc">
        <ul>
            <li><a href="?page=tour">Tất cả</a></li>
            <?php while ($row = $danhmuc->fetch_assoc()){ ?>
            <li  ><a href="?page=tour&action=theloai&idTheLoai=<?php echo $row["idTheLoai"] ?>" <?php
                if(isset($_GET["idTheLoai"]) && $_GET["idTheLoai"] == $row["idTheLoai"]){
                    echo 'style="color: rgb(249, 128, 188);"';
                } ?>><?php echo $row["tenTheLoai"] ?></a></li>
            <?php } ?>
        </ul>
    </div>
</div>

