<?php 
	//Ket noi co so du lieu

	// Thong so ket noi CSDL
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
	$masv='';
	$tensv='';
	$lop='';
	$que='';
	if(isset($_POST['save'])){
		$masv=$_POST['masv'];
		$tensv=$_POST['tensv'];
		$lop=$_POST['lop'];
		$que=$_POST['que'];
		
		$query = "INSERT INTO sinhvien VALUES ('".$masv."','".$tensv."','".$lop."','".$que."')";

		$result = $conn->query($query);

		if($result==1){
			setcookie('msg','Thêm thành công',time()+1);
		}else{
			setcookie('msg','Thêm không thành công',time()+1);
		}

		header('Location: design.php');

		
															
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<style type="text/css">

</style>
</head>
<body>
	<div class="container">
		<form action="" method="POST" role="form">
			<h3 align="center"><b>THÊM MỚI SINH VIÊN</b></h3>
			
			<br>
			<br>
			<div class="form-group">
				<label for="">Mã sv</label>
				<input type="text" class="form-control" id="" name="masv" placeholder="Nhập mã sinh viên">
			</div>
			<div class="form-group">
				<label for="">Tên sinh viên</label>
				<input type="text" class="form-control" id="" name="tensv" placeholder="Nhập tên sinh viên">
			</div>

			<div class="form-group">
				<label for="">Lớp</label>
				<input type="text" class="form-control" id="" name="lop" placeholder="Lớp">
			</div>

			<div class="form-group">
				<label for="">Quê</label>
				<input type="text" class="form-control" id="" name="que" placeholder="Quê">
			</div>
	
			<button type="submit" class="" name="save" >Save</button>
			<button type="submit" class="" name="nosave" >Reset</button>
			
			
		</form>
	</div>
</body>

</html>