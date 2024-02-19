<?php 
class logout{
    public function index(){
        unset($_SESSION["admin"]["user_email"]);
        echo "<script>location.href='/admin'</script>";
    }
}
?>