<?php
	//Ket noi co so du lieu

	// Thong so ket noi CSDL
	$servername = "localhost";//255.123.45.21
	$username = "root";   // ten dang nhap
	$password = "";    // mat khau rong
	$dbname = "uddlw";   // db muon ket noi

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

	while($row = $result->fetch_assoc()) { 

	echo "<pre>";
		print_r($row);//in ra tất cả
	echo "</pre>";


    }

    $strthem = "insert into nxb values ('nxb101','DH BK', '2019')";//them
    $result1 = $conn->query($strthem);
   

 		while ( $row = $result ->fetch_assoc()){

 			 echo $row['manxb'];
 			 echo $row['tennxb'];
 			 echo $row['namxb'];
 		}

 	$strsua = "update nxb set tennxb='DH KT', namxb='2021' where manxb='nxb101'";//sua
 	$result1 = $conn->query($strsua);
 	while ( $row = $result ->fetch_assoc()){

 			 echo $row['manxb'];
 			 echo $row['tennxb'];
 			 echo $row['namxb'];
 		}

 	$strxoa = "delete from nxb where manxb='nxb100'";//xoa
	$result1 = $conn->query($strxoa);
 	while ( $row = $result ->fetch_assoc()){

 			 echo $row['manxb'];
 			 echo $row['tennxb'];
 			 echo $row['namxb'];
 		}

	?>





























<!-- 	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>CRUD</title>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<script src="//code.jquery.com/jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</head>
	<body>
		<div class="container">	
			<h3>Danh sách</h3>
			<a href="" class="btn btn-success">Thêm</a>

			<p><?php if(isset($_COOKIE['msg'])){ ?>
				<div class="alert alert-success" role="alert">
					<strong class="alert-heading">Thông báo:</strong> <?= $_COOKIE['msg'] ?>
				</div>
				<?php } ?></p>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Mã NXB</th>
							<th>Tên NXB</th>
							<th>Năm XB</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php while ( $row = $result ->fetch_assoc()) {

							?>
							<tr>
								<td><?php echo $row['manxb']; ?></td>
								<td><?php echo $row['tennxb']; ?></td>
								<td><?php echo $row['namxb']; ?></td>
								<td align="center">

									<a href="" class="btn btn-primary" title="">Sửa</a>
									<a href="delete.php?manxb=<?php echo $row['manxb'] ?>" class="btn btn-danger" title="">Xóa</a>
								</td>

							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>	
		</body>
		</html>

 -->