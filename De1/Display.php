<?php 
	$conn = new mysqli("localhost", "root", "", "qlsv");

	$conn->set_charset("utf8");

	if($conn->connect_error){
		die("Ket noi that bai " . $conn->connect_error);
	}

	$query="select * from sinhvien";
	$result=$conn->query($query);

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Danh sách sinh viên</title>
 	<!-- Latest compiled and minified CSS & JS -->
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 	<script src="//code.jquery.com/jquery.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
 </head>
 <body>
 	<div class="container">
 		<table class="table table-hover">
 			<thead>
 				<tr>
 					<th>Mã sinh viên</th>
 					<th>Họ tên</th>
 					<th>Giới tính</th>
 					<th>Địa chỉ</th>
 					<th>Action</th>
 				</tr>
 			</thead>
 			<?php while ( $row=$result->fetch_assoc()) {
 				
 			 ?>
 			<tbody>
 				<tr>
 					<td><?php echo $row['masv'] ?></td>
 					<td><?php echo $row['hoten'] ?></td>
 					<td><?php echo $row['gioitinh'] ?></td>
 					<td><?php echo $row['quequan'] ?></td>
 					<td><a href="Edit.php?masv=<?php echo $row['masv']?>">Edit</a></td>
 					<td><a href="Delete.php?masv=<?php echo $row['masv']?>">Delete</a></td>
 				</tr>
 			</tbody>
 			<?php } ?>
 		</table>
 	</div>
 </body>
 </html>