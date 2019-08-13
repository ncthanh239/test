<?php 
	$conn = new mysqli("localhost", "root", "", "qlsv");

	$conn->set_charset("utf8");

	if($conn->connect_error){
		die("Ket noi that bai " . $conn->connect_error);
	}
	if(isset($_POST['ok'])){
		$search = $_POST['gioitinh'];
		$query = "select * from sinhvien where gioitinh like '%$search%'";
		$result = $conn->query($query);
	}

	

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Search</title>
 	<!-- Latest compiled and minified CSS & JS -->
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 	<script src="//code.jquery.com/jquery.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
 </head>
 <body>
 	<div class="container">
 		<form action="Search.php" method="POST" role="form">
 			<legend>Form title</legend>
 		
 			<div class="form-group">
 				<label for="">Giới tính</label>
 				<input type="text" class="form-control" name="gioitinh" id="" placeholder="">
 			</div>
 		
 			
 		
 			<button type="submit" name="ok" class="btn btn-primary">Submit</button>
 		</form>

 		<table class="table table-hover">
 			<thead>
 				<tr>
 					<th>Mã sinh viên</th>
 					<th>Họ tên</th>
 					<th>Giới tính</th>
 					<th>Địa chỉ</th>
 				</tr>
 			</thead>
 			<?php 
 				if(isset($result))
 				 while ( $row=$result->fetch_assoc()) {
 				
 			
 			
 			 ?>
 			<tbody>
 				<tr>
 					<td><?php echo $row['masv'] ?></td>
 					<td><?php echo $row['hoten'] ?></td>
 					<td><?php echo $row['gioitinh'] ?></td>
 					<td><?php echo $row['quequan'] ?></td>
 				</tr>
 			</tbody>
 			<?php } ?>
 		</table>
 	</div>
 </body>
 </html>