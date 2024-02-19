<?php
class db {
	private $con;
	public function __construct()
	{
		$this->con = new mysqli("localhost","root","","quanlytourdulich");
	}
	public function connect(){
		return $this->con;
	}
}

$con = mysqli_connect("localhost","root","","quanlytourdulich");

if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: ".mysqli_connect_error();
}

?>