<?php 
	//Ket noi co so du lieu

	// Thong so ket noi CSDL
	$servername = "localhost";//255.123.45.21
	$username = "root";   // ten dang nhap
	$password = "";    // mat khau rong
	$dbname = "thanhqltv";   // db muon ket noi

	// Tao ra ket noi den CSDL connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	$conn->set_charset("utf8"); // set utf-8 dể đọc dữ liệu tiếng Việt

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$masach='';
	$tensach='';
	$tentacgia='';
	$namxb='';
	$anh='';
	if(isset($_POST['save'])){
		$masach=$_POST['masach'];
		$tensach=$_POST['tensach'];
		$tentacgia=$_POST['tentacgia'];
		$namxb=$_POST['namxb'];
		$anh=$_POST['anh'];
		if (isset($_FILES['anh']))
        {
            // Nếu file upload không bị lỗi,
            // Tức là thuộc tính error > 0
            if ($_FILES['anh']['error'] > 0)
            {
                echo 'File Upload Bị Lỗi';
            }
            else{
                // Upload file
                move_uploaded_file($_FILES['anh']['tmp_name'], './upload/'.$_FILES['anh']['name']);
                echo 'File Uploaded';
            }
        }
		$query = "INSERT INTO sach VALUES ('".$masach."','".$tensach."','".$tentacgia."','".$namxb."','".$anh."')";

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
			<h3 align="center"><b>THÊM MỚI SÁCH</b></h3>
			
			<br>
			<br>
			<div class="form-group">
				<label for="">Mã sách</label>
				<input type="text" class="form-control" id="" name="masach" placeholder="Nhập mã sách">
			</div>
			<div class="form-group">
				<label for="">Tên sách</label>
				<input type="text" class="form-control" id="" name="tensach" placeholder="Nhập tên sách">
			</div>

			<div class="form-group">
				<label for="">Tên tác giả</label>
				<input type="text" class="form-control" id="" name="tentacgia" placeholder="Nhập tên tác giả">
			</div>

			<div class="form-group">
				<label for="">Năm xuất bản</label>
				<input type="text" class="form-control" id="" name="namxb" placeholder="Nhập năm xuất bản">
			</div>

			<div class="form-group">
				<label for="">Hình ảnh</label>
				<input type="file" name="anh"/>
				
			</div>
	
			<button type="submit" class="btn btn-success" name="save" >Save</button>
			<button type="submit" class="btn btn-primary" name="nosave" >Reset</button>
			
			
		</form>
	</div>
</body>

</html>