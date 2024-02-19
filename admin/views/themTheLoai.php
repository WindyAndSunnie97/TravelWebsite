<body>
       <div class="card-header">
            <h2 style="
            margin: 30px 0px;
    margin-left: 300px;
    font-size: 30px;
    background: linear-gradient(to left, rgb(255, 255, 255), rgba(255, 218, 239, 0.799), rgb(170 51 135));
    border-radius: 10px;
    padding: 10px;
    color: white;">THÊM THỂ LOẠI</h2>
        </div>
        <form action="" method="post">
            <table>
                <tr>
                    <td style="font-size:25px;"><b>Nhập thể loại: </b></td>
                    <td><input type="text" name="new_theloai" required="" style="font-size:25px;"></td>
                </tr>
                <tr>
                    <td><br></td>
                    <td><br></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input id="btn" type="submit" name="add_theloai" value="Thêm thể loại" style="    width: 60%;
    height: 30px;
    cursor: pointer;
    border-radius: 5px;
    border: none;
    background-color: rgb(249, 128, 188);
    color: white;
    margin-top: -65px;
    font-size: 15px;"></td>
                </tr>
            </table>
        </form>
        <?php
        include("/XAMPP/htdocs/quanlytourdulich/admin/includes/db.php");
        if (isset($_POST['add_theloai'])) {
            $new_theloai = $_POST['new_theloai'];
            $insert_theloai = "insert into theloai (tenTheLoai) values ('$new_theloai')";
            $run_theloai = mysqli_query($con, $insert_theloai);

            if ($run_theloai) {
                echo "<script>alert('Đã thêm thành công!')</script>";
            }
        }
        ?>
    </body>