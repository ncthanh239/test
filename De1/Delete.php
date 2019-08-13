<?php 
	$conn = new mysqli("localhost", "root", "", "qlsv");
	$conn->set_charset("utf8");
	if($conn->connect_error){
		die("Kết nối thất bại" . $conn->connect_error);
	}

	$masv = trim($_GET['masv']);
	$query = "delete from sinhvien where masv='".$masv."'";
	$result=$conn->query($query);
	header('Location:Display.php');

 ?>