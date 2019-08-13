<?php 
	

$servername = "localhost";//255.123.45.21
	$username = "root";   // ten dang nhap
	$password = "";    // mat khau rong
	$dbname = "ncthanh";   // db muon ket noi

	// Tao ra ket noi den CSDL connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	$conn->set_charset("utf8"); // set utf-8 dể đọc dữ liệu tiếng Việt

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	// Cau lenh truy van co so du lieu
	$query = "SELECT * FROM nxb";

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
 	
 <body>
 	<div class="container">
 		<h3 align="center">BOOKS LIST</h3>
 		<a href="add_nxb.php" class="btn btn-success" title="">Thêm</a>
 		<p><?php if(isset($_COOKIE['msg'])){ ?>
			<div class="alert alert-success" role="alert">
				<strong class="alert-heading">Thông báo:</strong> <?= $_COOKIE['msg'] ?>
			</div>
 		<?php } ?></p>

 		<table class="table table-hover">
 			<thead>
 				<tr>
 					<th align="center">Mã nhà xuất bản</th>
 					<th align="center">Tên nhà xuất bản</th>
 					
 					<th align="center">Action</th>
 				</tr>
 			</thead>
 			<tbody>
 				<?php while($row = $result->fetch_assoc()) {  ?>
 			<tr>
 				<td align="center"><?php echo $row['manxb'] ?></td>
 				<td align="center"><?php echo $row['nxb'] ?></td>
 				
 				<td align="center">
 					
 					<a href="edit_nxb.php?manxb=<?php echo $row['manxb'] ?>" class="btn btn-primary" title="">Sửa</a>
 					<a href="delete_nxb.php?manxb=<?php echo $row['manxb'] ?>" class="btn btn-danger" title="">Xóa</a>
 				</td>
 				
 			</tr>
 			<?php } ?>
 			</tbody>
 		</table>
 	</div>
 </body>


 </html>