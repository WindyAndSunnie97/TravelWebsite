<h2 style="    margin: 30px 0px;
    margin-left: 300px;
    font-size: 30px;
    background: linear-gradient(to left, rgb(255, 255, 255), rgba(255, 218, 239, 0.799), rgb(170 51 135));
    border-radius: 10px;
    padding: 10px;
    color: white;">TẤT CẢ THỂ LOẠI</h2>
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
                <th>TÊN THỂ LOẠI</th>
                <th>CHỨC NĂNG</th>
            </tr>
        </thead>
        <tbody>
        <?php
            include_once __DIR__ .("/../includes/db.php");
            
            $get_theloai = "select * from theloai";
            $run_theloai = mysqli_query($con, $get_theloai);
            
            while($row_theloai = mysqli_fetch_array($run_theloai)){
               $theloai_id = $row_theloai['idTheLoai'];
               $tenTheLoai = $row_theloai['tenTheLoai'];

            
            ?>

             <tr>
                <td><?php echo $theloai_id ?></td>
                <td><?php echo $tenTheLoai ?></td>
                <td><a href="?pageAdmin=editTheLoai&action=chinhsua&edit_tl=<?php echo $theloai_id ?>">edit</a></td> 
             </tr>
            <?php  }?>
        </tbody>
    </table>

</div>