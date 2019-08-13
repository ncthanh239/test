<?php 

		// die($username);
		$servername = "localhost";//255.123.45.21
	$username = "root";   // ten dang nhap
	$password = "";    // mat khau rong
	$dbname = "khaiqltv";   // db muon ket noi

	// Tao ra ket noi den CSDL connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	$conn->set_charset("utf8"); // set utf-8 dể đọc dữ liệu tiếng Việt

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
		$username=$_POST['username'];
		$password=$_POST['password'];


	if(isset($_POST['username'])){

		
		$query="SELECT* FROM users where username='".$username."' and password='".$password."'" ;
		// die($query);
		$result=$conn->query($query);

$row = $result->fetch_assoc();


		if ($row==null) 
		{ 
			echo "tên đăng nhập hoặc mật khẩu không đúng !"; 
		}else{ 
			header('Location:design.php');
			
		}
	}

		?>