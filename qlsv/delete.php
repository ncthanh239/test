<?php 
	
	$servername = "localhost";//255.123.45.21
	$username = "root";   // ten dang nhap
	$password = "";    // mat khau rong
	$dbname = "phongqlsv";   // db muon ket noi

	// Tao ra ket noi den CSDL connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	$conn->set_charset("utf8"); // set utf-8 dể đọc dữ liệu tiếng Việt

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

		

	$masv=$_GET['masv'];
	$query="DELETE FROM sinhvien where masv='".$masv."'";
	// echo $query;
	// die;
	$result=$conn->query($query);
	if($result==1){
			setcookie('msg','Xóa thành công',time()+1);
		}else{
			setcookie('msg','Xóa không thành công',time()+1);
		}
		header('Location: design.php');


 ?>