<?php 
	$conn = new mysqli("localhost", "root", "", "qlnv");
	$conn->set_charset("utf8");
	if($conn->connect_error){
		die("Kết nối thất bại" . $conn->connect_error);
	}

	$query = "select * from nhanvien where namtd<2002";
	$result = $conn->query($query);
	
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Danh sách nhân viên</title>
 </head>
 <body>
 	<div class="container">
 		<h1>Danh sách nhân viên</h1>

 		<table>
 			<tr>
 				<td>Mã nhân viên</td>
 				<td>Họ tên</td>
 				<td>Giới tính</td>
 				<td>Quê quán</td>
 				<td>Năm tuyển dụng</td>
 			</tr>
 			<?php  while ( $row = $result->fetch_assoc()) {
 				
 			?>
 			<tr>
 				<td><?php echo $row['manv']  ?></td>
 				<td><?php echo $row['hoten'] ?></td>
 				<td><?php echo $row['gioitinh'] ?></td>
 				<td><?php echo $row['quequan']  ?></td>
 				<td><?php echo $row['namtd'] ?></td>
 				
 			</tr>
 			<?php  }?>
 		</table>
 	</div>

 </body>
 </html>