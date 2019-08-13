<?php 
	$conn = new mysqli("localhost", "root", "", "qldaily");
	$conn->set_charset("utf8");
	if($conn->connect_error){
		die("Kết nối thất bại!" . $conn->connect_error);
	}
	 
	$ma=trim($_GET['ma']);
	$query="select * from xemay where ma='".$ma."'";
	$result = $conn->query($query);
	$info = $result->fetch_assoc();
	if(isset($_POST['save'])){
		$ma=$_POST['ma'];
		$hoten=$_POST['ten'];
		$diachi=$_POST['diachi'];
		$gia=$_POST['gia'];

		$query="update xemay set ten=N'".$hoten."', diachi=N'".$diachi."', gia='".$gia."' where ma='".$ma."'";
		$status=$conn->query($query);

		header('Location:Display.php');
	}

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Nhập thông tin đại lý</title>
 	
 	
 </head>
 <body>
 	<div class="container">
 		<h1>Nhập thông tin đại lý</h1>
 		<form action="Edit.php" method="POST"> 
 			<label>Mã</label>
 			<input type="text" name="ma" value="<?= $info['ma']?>" readonly="true">
 			<p></p>
 			<label>Tên</label>
 			<input type="text" name="ten" value="<?= $info['ten']?>">
 			<p></p>
 			<label>Địa chỉ</label>
 			<input type="text" name="diachi" value="<?= $info['diachi']?>">
 			<p></p>
 			<label>Giá vốn</label>
 			<input type="text" name="gia" value="<?= $info['gia']?>">

 			<button name="save" type="submit">Thêm mới</button>
 			<button name="nosave">Nhập lại</button>
 		</form>
 	</div>
 </body>
 </html>