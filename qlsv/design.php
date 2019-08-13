<?php 
	

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

	// Cau lenh truy van co so du lieu
	$query = "SELECT * FROM sinhvien";



	// Thuc thi cau lenh truy van co so du lieu
	$result = $conn->query($query);
	$n = mysqli_num_rows($result);//mb_decode_mimeheader(str)
	

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
 		<div>Số sinh viên trong danh sách: <?php echo $n; ?></div>
 		<a href="display.php" class="" title="">Thêm</a>
 		<a href="search.php" class="">Tìm kiếm</a>
 		<p><?php if(isset($_COOKIE['msg'])){ ?>
			<div class="alert alert-success" role="alert">
				<strong class="alert-heading">Thông báo:</strong> <?= $_COOKIE['msg'] ?>
			</div>
 		<?php } ?></p>
 		<table class="table table-hover">
 			<thead>
 				<tr>
 					<th align="center">Mã sinh viên</th>
 					<th align="center">Tên sinh viên</th>
 					<th align="center">Lớp</th>
 					<th align="center">Quê quán</th>
 					
 					<th align="center">Action</th>
 				</tr>
 			</thead>
 			<tbody>
 				<?php while($row = $result->fetch_assoc()) {  ?>
 			<tr>
 				<td align="center"><?php echo $row['masv'] ?></td>
 				<td align="center"><?php echo $row['tensv'] ?></td>
 				<td align="center"><?php echo $row['lop'] ?></td>
 				<td align="center"><?php echo $row['que'] ?></td>
 				
 				<td align="center">
 					
 					<a href="edit.php?masv=<?php echo $row['masv'] ?>" class="" title="">Sửa</a>
 					<a href="delete.php?masv=<?php echo $row['masv'] ?>" class="" title="">Xóa</a>
 				</td>
 				
 			</tr>
 			<?php } ?>
 			</tbody>
 		</table>
 	</div>
 </body>
 </html>