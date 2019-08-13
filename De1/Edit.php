<?php 
	$conn = new mysqli("localhost", "root", "", "qlsv");
	$conn->set_charset("utf8");
	if($conn->connect_error){
		die("Kết nối thất bại" . $conn->connect_error);
	}

	$masv=trim($_GET['masv']);
	$query = "Select * from sinhvien where masv = '".$masv."'";
	$result = $conn->query($query);
	$info=$result->fetch_assoc();

	if(isset($_POST['update'])){
		$masv=$_POST['masv'];
		$hoten=$_POST['hoten'];
		$gioitinh=$_POST['checkbox'];
		$quequan=$_POST['quequan'];

		$query = "update sinhvien set hoten=N'".$hoten."', gioitinh='".$gioitinh."', quequan=N'".$quequan."' where masv='".$masv."'";
		// var_dump($query);
		// die;

		$status = $conn->query($query);

		header("Location:Display.php");
	}
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Nhap moi sinh vien</title>
 	<!-- Latest compiled and minified CSS & JS -->
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 	<script src="//code.jquery.com/jquery.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
 </head>
 <body>
 	<div class="container">
 		<form action="Edit.php" method="POST" role="form">
 			<h1>Update sinh viên</h1>
 		
 			<div class="form-group">
 				<label for="">Mã sinh viên</label>
 				<input type="text"  class="form-control" id="" name="masv" value="<?=$info['masv']?>">
 			</div>
 			<div class="form-group">
 				<label for="">Họ tên</label>
 				<input type="text" class="form-control" id="" name="hoten" value="<?=$info['hoten']?>">
 			</div>
 			<div class="form-group">
 				<label for="">Giới tính</label>
 				<input type="radio" name="checkbox" value="Nam"> Nam
 				<input type="radio" name="checkbox" value="Nữ"> Nữ
 				
 			</div>
 			<div class="form-group">
 				<label for="">Quê quán</label>
 				<input type="text" class="form-control" id=""  name="quequan" value="<?=$info['quequan']?>">
 			</div>
 		
 			
 		
 			<button type="submit" name="update" class="btn btn-primary">Submit</button>
 		</form>
 	</div>
 </body>
 </html>