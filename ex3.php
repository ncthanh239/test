<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 3</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<?php 
	if(isset($_POST["cscu"])&& isset($_POST["csm"]) && isset($_POST["dg"])){
		$cscu = $_POST["cscu"];
		$csm = $_POST["csm"];
		$dg = $_POST["dg"];
		$tt = ($csm - $cscu)*$dg;

	}

	?>
	<div class="container">
		<form action="ex3.php" method="POST" role="form">
			

			<div class="form-group">
				<label for="">Tên chủ hộ</label>
				<input type="text" class="form-control" name="" value="">
			</div>

			<div class="form-group">
				<label for="">Chỉ số cũ</label>
				<input type="text" class="form-control" name="cscu" value="<?php if(isset($_POST['cscu'])) $_POST['cscu']?>">
			</div>

			<div class="form-group">
				<label for="">Chỉ số mới</label>
				<input type="text" class="form-control" name="csm" value="<?php if(isset($_POST['csm'])) $_POST['csm']?>">
			</div>

			<div class="form-group">
				<label for="">Đơn giá</label>
				<input type="text" class="form-control" name="dg" value="<?php if(isset($_POST['dg'])) $_POST['dg']?>">
			</div>

			<div class="form-group">
				<label for="">Số tiền thanh toán</label>
				<input type="text" class="form-control" name="tt" readonly="true" value="<?php if(isset($tt)) echo $tt;?> ">
			</div>

			

			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</body>
</html>