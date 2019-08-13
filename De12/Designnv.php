<?php 
$conn = new mysqli("localhost", "root", "", "qlnv");
$conn->set_charset("utf8");
if($conn->connect_error){
	die("Kết nối thất bại" . $conn->connect_error);
}
	$manv = '';
	$hoten = '';
	$gioitinh = '';
	$quequan = '';
	$namtd = '';

	if(isset($_POST['save'])){
		$manv=$_POST['manv'];
		$hoten=$_POST['hoten'];
		$gioitinh=$_POST['checkbox'];
		$quequan=$_POST['quequan'];
		$namtd=$_POST['namtd'];

		$query = "insert into nhanvien value ('".$manv."', N'".$hoten."', '".$gioitinh."', N'".$quequan."', '".$namtd."')";
		$result = $conn->query($query);

		header('Location: Displayyear.php');

	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Designnv</title>
	<style type="text/css">

	.container{
		text-align: center;

	}
	.bang{
		background-color: blue;
		width: 600px;
		height: 380px;
		/*border:1px solid black;*/
		display: inline-block;

	}
	.a{
		width: 49%;
		height: 325px;
		/*border: 1px solid black;*/
		float: left;

	}
	.a .info{
		padding-top: 30px;
	}

</style>
</head>
<body>
	<div class="container">
		<form action="Designnv.php" method="POST">
			<h1>Nhập thông tin nhân viên</h1>
		<div class="bang">
			<div class="a">
				<div class="info">Mã nhân viên </div>
				<div class="info">Họ tên </div>
				<div class="info">Giới tính </div>
				<div class="info">Quê quán </div>
				<div class="info">Năm tuyển dụng </div>
			</div>
			<div class="a">
				<div class="info"><input type="text" name="manv"></div>
				<div class="info"><input type="text" name="hoten"></div>
				<div class="info"><input type="radio" name="checkbox" value="Nam" />Nam
					<input type="radio" name="checkbox" value="Nữ" />Nữ</div>
					<div class="info"><input type="text" name="quequan"></div>
					<div class="info"><input type="text" name="namtd"></div>
				</div>
				<div class="bt">
					<button type="submit" name="save">Thêm mới</button>
					<button name="nosave">Nhập lại</button>
				</div>
			</div>

		</form>
		

		</div>
	</body>
	</html>