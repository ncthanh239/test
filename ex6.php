<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 6</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<?php 
	if(isset($_POST['gio'])){
		$gio = $_POST['gio'];
		if (0 <= $gio && $gio < 13){
			$tb = "Chào buổi sáng";
		}
		if(13<=$gio && $gio <=18){
			$tb = "Chào buổi chiều";
		}if(19<=$gio && $gio<=23){
			$tb="Chào buổi tối";
		}
	}
	 ?>
	
	<div class="container">
		<form action="ex6.php" method="POST" role="form">
		
	
		<div class="form-group">
			<label for="">Giờ</label>
			<input type="text" class="form-control" name="gio" placeholder="Mời bạn nhập giờ" value="<?php if(isset($_POST['gio'])) echo $_POST['gio']?>">
			<div><?php if(isset($tb)) echo $tb; ?></div>
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	</div>
	
</body>
</html>