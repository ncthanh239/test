<?php 
	$conn = new mysqli("localhost", "root", "", "qlsva");
	$conn->set_charset("utf8");
	if($conn->connect_error){
		die("Kết nối thất bại" . $conn->connect_error);
	}

	$query="select * from user";
	$result=$conn->query($query);
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	<div class="container">
 		<div><?php if(isset($_COOKIE['msg'])) echo $_COOKIE['msg']; ?></div>
 		<table width="600px" height="100px" border="1" align="center" cellpadding="30px" cellspacing="">
 			<tr valign="Middle" >
 				<td>Username</td>
 				<td>Fullname</td>
 				<td>Email</td>
 				
 			</tr>
		<?php while ( $row=$result->fetch_assoc()) {
			
		 ?>
 			<tr>
 				<td><?php echo $row['username'] ?></td>
 				<td><?php echo $row['fullname'] ?></td>
 				<td><?php echo $row['email'] ?></td>
 			</tr>
 		<?php } ?>
 		</table>
 	</div>
 </body>
 </html>