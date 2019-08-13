<?php 
	

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

	// Cau lenh truy van co so du lieu
	$query = "SELECT * FROM sach";

	// Thuc thi cau lenh truy van co so du lieu
	$result = $conn->query($query);

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Sach</title>
 	<!-- Latest compiled and minified CSS & JS -->
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 	<script src="//code.jquery.com/jquery.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
 	<style type="text/css">
 		.tdanh>img{
 			width: 50px;
 			height: 50px;
 		}
 	</style>
 	
 <body>
 	<div class="container">
 		<h3 align="center">BOOKS LIST</h3>
 		<a href="display.php" class="btn btn-success" title="">Thêm</a>
 		<a href="search.php" class="btn btn-success" title="">Tìm kiếm</a>
 		<p><?php if(isset($_COOKIE['msg'])){ ?>
			<div class="alert alert-success" role="alert">
				<strong class="alert-heading">Thông báo:</strong> <?= $_COOKIE['msg'] ?>
			</div>
 		<?php } ?></p>


 		

 		<table class="table table-hover">
 			<thead>
 				<tr>
 					<th align="center">Mã sách</th>
 					<th align="center">Tên sách</th>
 					<th align="center">Tên tác giả</th>
 					<th align="center">Năm sản xuất</th>
 					<th align="center">Ảnh</th>
 					
 					<th align="center">Action</th>
 				</tr>
 			</thead>
 			<tbody>
 				<?php while($row = $result->fetch_assoc()) {  ?>
 			<tr>
 				<td align="center"><?php echo $row['masach'] ?></td>
 				<td align="center"><?php echo $row['tensach'] ?></td>
 				<td align="center"><?php echo $row['tentacgia'] ?></td>
 				<td align="center"><?php echo $row['namxb'] ?></td>
 				<td align="center" class="tdanh"><?= "<img  src='upload/".$row['anh']."'>" ?></td>
 				
 				<td align="center">
 					
 					<a href="edit.php?masach=<?php echo $row['masach'] ?>" class="btn btn-primary" title="">Sửa</a>
 					<a href="delete.php?masach=<?php echo $row['masach'] ?>" class="btn btn-danger" title="">Xóa</a>
 				</td>
 				
 			</tr>
 			<?php } ?>
 			</tbody>
 		</table>
 	</div>
 </body>


 </html>