<h2 style="    margin: 30px 0px;
    margin-left: 300px;
    font-size: 30px;
    background: linear-gradient(to left, rgb(255, 255, 255), rgba(255, 218, 239, 0.799), rgb(170 51 135));
    border-radius: 10px;
    padding: 10px;
    color: white;">THÔNG TIN NGƯỜI ĐI</h2>
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
<div class="table">
    <table class="table">
        <thead>
            <tr>
                <th>STT</th>
                <th>TÊN NGƯỜI ĐI</th>
                <th>GIỚI TÍNH</th>
                <th>CHI TIẾT</th>
                <th>ID HỢP ĐỒNG</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include_once __DIR__ .("/../includes/db.php");
            $get_cthp = "select * from chitiethopdong";
            $run_cthp = mysqli_query($con, $get_cthp);
            while($row_cthd = mysqli_fetch_array($run_cthp)){
                $cthd_id = $row_cthd['id'];
                $cthd_ten = $row_cthd['tenNguoiDi'];
                $cthd_gioiTinh = $row_cthd['gioitinh'];
                $cthd_chitiet = $row_cthd['chiTiet'];
                $cthd_idHopDong=$row_cthd['idHopDong'];

            ?>
            <tr>
                <td ><?php  echo $cthd_id ;?></td>
                <td ><?php  echo $cthd_ten;?></td>
                <td ><?php  echo $cthd_gioiTinh;?></td>
                <td ><?php  echo $cthd_chitiet;?></td>
                <td ><?php  echo $cthd_idHopDong;?></td>
                             
            </tr>
            <?php }?>
        </tbody>
    </table>
</div>