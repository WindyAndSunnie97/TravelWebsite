<h2 style="    margin: 30px 0px;
    margin-left: 300px;
    font-size: 30px;
    background: linear-gradient(to left, rgb(255, 255, 255), rgba(255, 218, 239, 0.799), rgb(170 51 135));
    border-radius: 10px;
    padding: 10px;
    color: white;">TẤT CẢ TOUR</h2>
<style>
table, th, td {
  border: 1px solid;
  margin-top: 30px;
  margin-right: 30px;
}
td {
  text-align: center;
  padding: 15px;
  font-size: 20px;
  
}
th {
  text-align: center;
  padding: 15px;
  font-size: 18px;
  background-color:#bde2f59e;
}

</style>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>STT</th>
                <th>TÊN ĐỊA DANH</th>
                <th>TÊN ĐỊA ĐIỂM</th>
                <th>ĐƠN GIÁ</th>
                <th>THỜI HẠN ĐI</th>
                <th>GIẢM GIÁ</th>
                <th>MÔ TẢ</th>
                <th>NỔI BẬT</th>
                <th>HÌNH ẢNH</th>
                <th>EDIT</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row_t = $kq->fetch_assoc()){
                  $t_stt = $row_t['id_tour'];
                  $t_tendiadanh = $row_t['tenDiaDanh'];
                  $t_tendiadiem = $row_t['tenDiaDiem'];
                  $t_dongia = $row_t['donGia'];
                  $t_thoihan = $row_t['thoiHan'];
                  $t_giamgia = $row_t['giamGia'];
                  $t_mota = $row_t['moTaDiaDanh'];
                  $t_noibat = $row_t['noibat'];
                  $t_hinhanh = $row_t['hinhanh'];
                
                
                
                ?>
            <tr>
                <td ><?php echo $t_stt;?></td>
                <td ><?php echo $t_tendiadanh;?></td>
                <td ><?php echo $t_tendiadiem;?></td>
                <td ><?php echo $t_dongia;?></td>
                <td ><?php echo $t_thoihan;?></td>
                <td ><?php echo $t_giamgia;?></td>
                <td ><?php echo $t_mota;?></td>
                <td ><?php echo $t_noibat;?></td>
                <td ><?php echo $t_hinhanh;?></td>  
                <td><a href="?pageAdmin=editTour&action=chinhsua&edit_tour=<?php echo $t_stt  ?>">edit</a></td> 
            </tr>
            
            <?php } ?>

            
        </tbody>
    </table>
</div>