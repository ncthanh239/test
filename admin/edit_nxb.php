<?php 
require_once('connection1.php');

$manxb=trim($_GET['manxb']);
$query="SELECT* FROM nxb where manxb='".$manxb."'";
$result=$conn->query($query);
$product=$result->fetch_assoc();
if(isset($_POST['update'])){
	$manxb=$_POST['manxb'];
	$nxb=$_POST['nxb'];
	

	$query="UPDATE nxb SET nxb='".$nxb."' where manxb='".$manxb."'";

	
	$status=$conn->query($query);
	if($status==1){
		setcookie('msg','Update thành công',time()+1);
	}else{
		setcookie('msg','Update không thành công',time()+1);
	}
	header('Location: nxb.php');
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
	<style type="text/css">

</style>
</head>
<body>
	<div class="container">
		<form action="" method="POST" role="form">
			<h3 align="center"><b>THÊM MỚI NXB</b></h3>
			
			<br>
			<br>
			<div class="form-group">
				<label for="">Mã nhà xuất bản</label>
				<input type="text" class="form-control" id="" name="manxb" placeholder="Nhập mã nxb" value="<?=$product['manxb']?>" readonly="true">
			</div>
			<div class="form-group">
				<label for="">Tên nhà xuất bản</label>
				<input type="text" class="form-control" id="" name="nxb" placeholder="Nhập tên nxb" value="<?=$product['nxb']?>">
			</div>
			
			<button type="submit" class="btn btn-success" name="update" >Save</button>
			
			
		</form>
	</div>
</body>
</html>