<?php
include("includes/db.php");
if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $pass = mysqli_real_escape_string($con, $_POST['password']);

    $sel_user = "select * from admins where user_email='$email' AND user_pass='$pass'";
    $run_user = mysqli_query($con, $sel_user);
    $check_user = mysqli_num_rows($run_user);

    if ($check_user == 1) {
		$_SESSION["admin"]=[];
        $_SESSION["admin"]['user_email'] = $email;
        echo "<script>location.href='/admin'</script>";
    } else {
        echo "<script>alert('Email or Password did not match, try again!')</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
</head>
<style>
body { 
	width: 100%;
	height:100%;
	font-family: 'Open Sans', sans-serif;
	background: #a00b55;
}

.login { 
	position: absolute;
	top: 50%;
	left: 50%;
	margin: -150px 0 0 -150px;
	width:300px;
	height:300px;
}
.login h1 { color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.3); letter-spacing:1px; text-align:center; }

input { 
	width: 100%; 
	margin-bottom: 10px; 
	background: rgba(0,0,0,0.3);
	border: none;
	outline: none;
	padding: 10px;
	font-size: 13px;
	color: #fff;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
	border: 1px solid rgba(0,0,0,0.3);
	border-radius: 4px;
	box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
	-webkit-transition: box-shadow .5s ease;
	-moz-transition: box-shadow .5s ease;
	-o-transition: box-shadow .5s ease;
	-ms-transition: box-shadow .5s ease;
	transition: box-shadow .5s ease;
}
input:focus { box-shadow: inset 0 -5px 45px rgba(100,100,100,0.4), 0 1px 1px rgba(255,255,255,0.2); }


button{
    float: right;
}
</style>
<body>
    <div class="login">
        <h2 style="color: white; text-align: center;"><?php echo @$_GET['not_admin']; ?></h2>
        <h2 style="color: white; text-align: center;"><?php echo @$_GET['logged_out']; ?></h2>

        <h1>ADMIN LOGIN</h1>
        <form method="post" action="">
            <input type="text" name="email" placeholder="Email" required="required"/>
            <input type="password" name="password" placeholder="Password" required="required"/>
            <button type="submit" name="login" class="btn btn-primary btn-block btn-large">Login</button>
        </form>
    </div>
</body>
</html>