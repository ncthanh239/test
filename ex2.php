<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 2</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<?php 
	
		if(isset($_POST["bk"])){
			$bk = $_POST["bk"];
			define("PI", 3.14);
			$dt = PI*pow($bk,2);
			$cv = 2*PI*$bk;
		}
	
	 ?>
	<div class="container">
		<form action="ex2.php" method="POST" role="form">
			<table >
				
					<tr>
						<td><span>Bán kính</span></td>
						<td>
							<input type="" name="bk" value="<?php if(isset($_POST["bk"])) echo $_POST["bk"] ?>">
						</td>
					</tr>
				
					<tr>
						<td><span>Diện tích</span></td>
						<td>
							<input type="" name="dt" value="<?php if(isset($dt)) echo $dt ; ?>" readonly="true">
						</td>
					</tr>
				
					<tr>
						<td><span>Chu vi</span></td>
						<td>
							<input type="" name="cv" value="<?php if(isset($cv)) echo $cv;?>" readonly=true">
						</td>
					</tr>
				
			</table>
			
		
			<button type="submit" class="btn btn-primary" name="save">Tính</button>
		</form>
	</div>
</body>
</html>

