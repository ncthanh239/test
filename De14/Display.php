<?php 
	$conn = new mysqli("localhost", "root", "", "qldaily");
	$conn->set_charset("utf8");
	if($conn->connect_error){
		die("Kết nối thất bại!" . $conn->connect_error);
	}
	 $query = "select * from xemay where gia>100";
	 $result = $conn->query($query);

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Danh sách đại lý</title>
 	<!-- Latest compiled and minified CSS & JS -->
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 	<script src="//code.jquery.com/jquery.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
 </head>
 <body>
 	<div class="container">
 		<p><?php 
 			if(isset($_COOKIE['msg']))

 				echo $_COOKIE['msg'];
 		 ?></p>
 		<table class="table table-hover">
 			<thead>
 				<tr>
 					<th>Mã</th>
 					<th>Tên</th>
 					<th>Địa chỉ</th>
 					<th>Giá vốn</th>
 					<th>Action</th>
 				</tr>
 			</thead>
 			<?php while ( $row = $result->fetch_assoc()) {
 				
 			 ?>
 			<tbody>
 				<tr>
 					<td> <?php echo $row['ma'] ?></td>
 					<td> <?php echo $row['ten'] ?></td>
 					<td> <?php echo $row['diachi'] ?></td>
 					<td> <?php echo $row['gia'] ?></td>
 					<td>
 						<a href="Edit.php?ma=<?php echo $row['ma']?>">Edit</a>
 						<a href="Delete.php?ma=<?php echo $row['ma']?>">Delete</a>

 					</td>
 				</tr>
 			</tbody>
 			<?php  }?>
 		</table>
 	</div>
 </body>
 </html>