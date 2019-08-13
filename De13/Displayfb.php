<?php 
$conn = new mysqli("localhost", "root", "", "qlbd");
	$conn->set_charset("utf8");
	if($conn->connect_error){
		die("Kết nối thất bại" . $conn->connect_error);
	}

	$query = "select * from cauthu where quequan like 'Hà%'";
	$result = $conn->query($query);
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Danh sách cầu thủ</title>
</head>
<body>
	<div class="container">
		<h1>Danh sách cầu thủ</h1>
		<table>
			<tr>
				<td>Mã cầu thủ</td>
				<td>Họ tên</td>
				<td>Năm sinh</td>
				<td>Quê quán</td>
				<td>Số điện thoại</td>
			</tr>
			<?php  while ( $row = $result->fetch_assoc()) {

				?>
				<tr>
					<td> <?php echo $row['mact'] ?></td>
					<td> <?php echo $row['hoten'] ?></td>
					<td> <?php echo $row['namsinh'] ?></td>
					<td> <?php echo $row['quequan'] ?></td>
					<td> <?php echo $row['sodt'] ?></td>
				</tr>
			<?php } ?>
		</table>
	</div>
</body>
</html>