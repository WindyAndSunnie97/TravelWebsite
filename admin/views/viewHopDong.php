<h2 style="    margin: 30px 0px;
    margin-left: 300px;
    font-size: 30px;
    background: linear-gradient(to left, rgb(255, 255, 255), rgba(255, 218, 239, 0.799), rgb(170 51 135));
    border-radius: 10px;
    padding: 10px;
    color: white;">HỢP ĐỒNG</h2>
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
                <th>ID HƠP ĐỒNG</th>
                <th>TÊN HỢP ĐỒNG</th>
                <th>NGÀY HOÀN THÀNH</th>
                <th>NỘI DUNG</th>
                <th>TỔNG GIÁ TIỀN</th>
                <th>HÌNH THỨC THANH TOÁN</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include_once __DIR__.("/../includes/db.php");
            $get_hd = "select * from hopdong";
            $run_hp = mysqli_query($con, $get_hd);
            $i = 0;
            while($row_hd = mysqli_fetch_array($run_hp)){
                $hd_id = $row_hd['id'];
                $hd_name = $row_hd['tenHopDong'];
                $hd_ngayHoanThanh = $row_hd['ngayHoanThanh'];
                $hd_noidung=$row_hd['Noidung'];
                $hd_tongGia = $row_hd['tongGia'];
                $hd_thanhToan = $row_hd['hinhThucThanhToan'];
            
               ?>
            <tr>
                <td ><?php echo $hd_id;?></td>
                <td ><?php echo $hd_name;?></td>
                <td ><?php echo $hd_ngayHoanThanh;?></td>
                <td ><?php echo $hd_noidung;?></td>
                <td ><?php echo $hd_tongGia;?></td>
                <td ><?php echo  $hd_thanhToan;?></td>             
            </tr>
            <?php  }?>
        </tbody>
    </table>
</div>
