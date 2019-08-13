<?php 
		$conn = new mysqli("localhost", "root", "", "ontap");
		$conn->set_charset("utf8");
		if($conn->connect_error){
			die("Kết nối thất bại" . $conn->connect_error);
		}
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Danh sách users</title>
 </head>
 <body>
 	<div class="container">	
		<table>
			<thead>
				<tr>
				<td>Username</td>
				<td>Password</td>
			</tr>
			</thead>
			<tbody>
				<tr>
				<td>Nguyễn Văn A</td>
				<td>123456</td>
			</tr>
			</tbody>
			
		</table>
 	</div>	
 </body>
 </html>