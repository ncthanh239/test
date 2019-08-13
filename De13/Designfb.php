<?php 
$conn = new mysqli("localhost", "root", "", "qlbd");
$conn->set_charset("utf8");
if($conn->connect_error){
	die("Kết nối thất bại" . $conn->connect_error);
}

	$mact='';
	$hoten='';
	$namsinh='';
	$quequan='';
	$sodt='';

	if(isset($_POST['save'])){
		$mact=$_POST['mact'];
		$hoten=$_POST['hoten'];
		$namsinh=$_POST['option'];
		$quequan=$_POST['option1'];
		$sodt=$_POST['sodt'];

		$query = "insert into cauthu values ('".$mact."', N'".$hoten."', '".$namsinh."', '".$quequan."', '".$sodt."')";
		$result=$conn->query($query);

		header('Location:Displayfb.php')
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thêm mới cầu thủ</title>
	<style type="text/css">
	.container{
		
		text-align: center;
	}
	.bang{
		width: 600px;
		height: 400px;
		display: inline-block;
		border: 1px solid black;
	}
	.a{
		float: left;
		width: 49%;
		height: 350px;
	}
	.info{
		padding-top: 30px;
	}
</style>
</head>
<body>
	<div class="container">
		<form action="Designfb.php" method="POST">
			<h1>Nhập thông tin cầu thủ</h1>
		<div class="bang">
			<div class="a">
				<div class="info">Mã cầu thủ</div>
				<div class="info">Họ tên</div>
				<div class="info">Năm sinh</div>
				<div class="info">Quê quán</div>
				<div class="info">Số điện thoại</div>
			</div>
			<div class="a">
				<div class="info"><input type="text" name="mact"></div>
				<div class="info"><input type="text" name="hoten"></div>
				<div class="info">
					<select name="option">
						<option  value="1990">1990</option>
						<option  value="1992">1992</option>
					</select>
				</div>

				<div class="info">
					<select name="option1">
						<option   value="Hà nội">Hà nội</option>
						<option  value="Bắc ninh">Bắc ninh</option>
					</select>
				</div>

				<div class="info"><input type="text" name="sodt"></div>
			</div>

			<div class="nut">
				<button name="save" type="submit">Thêm mới</button>
				<button name="nosave">Nhập lại</button>
			</div>
		</div>

		</form>
		
	</div>
</body>
</html>