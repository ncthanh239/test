<?php 
	$conn = new mysqli("localhost", "root", "", "qldaily");
	$conn->set_charset("utf8");
	if($conn->connect_error){
		die("Kết nối thất bại!" . $conn->connect_error);
	}
	$ma=trim($_GET['ma']);
	$query = "delete from xemay where ma='".$ma."'";
	$result = $conn->query($query);
	header('Location:Display.php');
 ?>