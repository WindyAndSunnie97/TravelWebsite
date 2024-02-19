<h2 style="    margin: 30px 0px;
    margin-left: 300px;
    font-size: 30px;
    background: linear-gradient(to left, rgb(255, 255, 255), rgba(255, 218, 239, 0.799), rgb(170 51 135));
    border-radius: 10px;
    padding: 10px;
    color: white;">THÔNG TIN KHÁCH HÀNG</h2>
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
                <th>TÊN KHÁCH HÀNG</th>
                <th>GIỚI TÍNH</th>
                <th>NĂM SINH</th>
                <th>SĐT</th>
                <th>EMAIL</th>
                <th>TÊN ĐĂNG NHẬP</th>
                <th>PASSWORD</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include_once __DIR__ .("/../includes/db.php");
            
            $get_k = "select * from khachhang";
            $run_k = mysqli_query($con, $get_k);
            
            while($row_k = mysqli_fetch_array($run_k)){
                $k_id = $row_k['id'];
                $k_name = $row_k['tenKhacHhang'];
                $k_gioitinh = $row_k['gioiTinh'];
                $k_namsinh = $row_k['namSinh'];
                $k_sdt = $row_k['sdt'];
                $k_email = $row_k['email'];
                $k_taikhoan = $row_k['tenDangNhap'];
                $k_matkhau = $row_k['passWord'];

            
            ?>
            <tr>
                <td ><?php echo $k_id;?></td>
                <td ><?php echo $k_name;?></td>
                <td ><?php echo $k_gioitinh;?></td>
                <td ><?php echo $k_namsinh;?></td>
                <td ><?php echo $k_sdt;?></td>
                <td ><?php echo $k_email;?></td>     
                <td ><?php echo $k_taikhoan;?></td>  
                <td><?php echo $k_matkhau;?></td>        
            </tr>
            <?php  }?>
        </tbody>
    </table>
</div>