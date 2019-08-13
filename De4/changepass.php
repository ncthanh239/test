<?php 
	$conn = new mysqli("localhost", "root", "", "qlsva");
	$conn->set_charset("utf8");
	if($conn->connect_error){
		die("Kết nối thất bại " . $conn->connect_error);
	}

	$username='';
	$password='';
	$npassword='';
	$rpassword='';
	if(isset($_POST['save'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		$query="select * from user where username='".$username."' and password='".$password."'";
		$result=$conn->query($query);
		$info=$result->fetch_assoc();
		$username1=$info['username'];
		$email=$info['email'];
		$fullname=$info['fullname'];
		$state=$info['state'];
		$npassword=$_POST['npassword'];
		$rpassword=$_POST['rpassword'];

		if($npassword=$rpassword){
			$query="update user set fullname='".$fullname."', password='".$npassword."', email='".$email."', state='".$state."' where username='".$username1."'";
			$status=$conn->query($query);
			if($status==1){
				setcookie('msg', 'Sửa thành công', time()+1);

			}else{
				setcookie('msg', 'Sửa thất bại', time()+1);
			}
		}
		else{
			// setcookie('msg', 'Sửa không thành công!', time()+1);
		}
		header('Location:displayuser.php');


		// var_dump();
		// die();
	}
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	<!-- Latest compiled and minified CSS & JS -->
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 	<script src="//code.jquery.com/jquery.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
 </head>
 <body>
 	<div class="container">
 		<form action="changepass.php" method="POST" role="form">
 			<legend>Form title</legend>
 		
 			<div class="form-group">
 				<label for="">Username</label>
 				<input type="text" name="username" class="form-control" id="" placeholder="">
 			</div>

 			<div class="form-group">
 				<label for="">Old password</label>
 				<input type="text" name="password" class="form-control" id="" placeholder="">
 			</div>

 			<div class="form-group">
 				<label for="">New password</label>
 				<input type="text" name="npassword" class="form-control" id="" placeholder="">
 			</div>

 			<div class="form-group">
 				<label for="">Re-Password</label>
 				<input type="text" name="rpassword" class="form-control" id="" placeholder="">
 			</div>
 		
 			
 		
 			<button name="save" type="submit" class="btn btn-primary">Submit</button>
 		</form>
 	</div>
 </body>
 </html>