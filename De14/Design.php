<?php 
	$conn = new mysqli("localhost", "root", "", "qldaily");
	$conn->set_charset("utf8");
	if($conn->connect_error){
		die("Kết nối thất bại! " . $conn->connect_error);
	}
	$ma='';
	$ten='';
	$diachi='';
	$gia='';

	if(isset($_POST['save'])){
		$ma=$_POST['ma'];
		$ten=$_POST['ten'];
		$diachi=$_POST['diachi'];
		$gia=$_POST['gia'];

		$query="insert into xemay values('".$ma."', N'".$ten."', N'".$diachi."', '".$gia."')";
		$result = $conn->query($query);

		if($result==1){
			setcookie('msg','Thêm mới thành công' , time()+1);
		}
		else{
			setcookie('msg', 'Thêm mới thất bại', time()+1);
		}
		header("Location: Display.php");
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
 		<form action="Design.php" method="POST"> 
 			<label>Mã</label>
 			<input type="text" name="ma">
 			<p></p>
 			<label>Tên</label>
 			<input type="text" name="ten">
 			<p></p>
 			<label>Địa chỉ</label>
 			<input type="text" name="diachi">
 			<p></p>
 			<label>Giá vốn</label>
 			<input type="text" name="gia">

 			<button name="save" type="submit">Thêm mới</button>
 			<button name="nosave">Nhập lại</button>
 		</form>
 	</div>
 </body>
 </html>