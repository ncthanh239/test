<?php error_reporting (0);?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bai 8</title>
	<style type="text/css">
		h3{
			/*color: white; chữ của thẻ h3 màu trắng*/
			background-color: #CC3469;/*Màu nền của thẻ h3*/
			width: 300px;/*Chiều dài của thẻ h3*/
			height: 50px;/*Chiều cao của thẻ h3*/
			line-height: 50px;/*Căn chữ ra giữa theo chiều cao*/
			text-align: center;/*Căn chữ ra giữa theo chiều dài*/
		}
		form{
			margin-left: 600px;/*Cách trái 600px của form*/
			background-color: #EDCCDB; /*Màu nền của form*/
			width:300px; 
			height: auto;
		}
		#nut{
			text-align: center;
			margin-top: 10px;
		}
		input{
			margin-top: 3px; /*Căn trên thẻ input*/

		}

	</style>
	
</head>
<body>
	<?php
	if(isset($_POST['submit']))
	{
		if(empty($_POST['t'])&&(empty($_POST['l']))&&(empty($_POST['h'])))
		{
			echo "chua nhap du thong tin";
		}
		$t=$_POST['t'];
		$l=$_POST['l'];
		$h=$_POST['h'];
		$tong=$t+$l+$h;
		if($t==0 || $l==0 || $h==0)
		{
			$k="rớt";
		}
		else{
			$k="đô";

		}
	}
	?>
	<form action="ex7a.php" method="POST" role="form">
		<h3 style="color: yellow;">Kết quả thi đại học</h3>

		<div class="form-group">
			<label for="">Toán</label>
			<input style="margin-left: 50px;"  type="text" class="form-control" name="t" value="">
		</div>

		<div class="form-group">
			<label for="">Lý</label>
			<input style="margin-left: 63px;" type="text" class="form-control" name="l" value="">
		</div>

		<div class="form-group">
			<label for="">Hóa</label>
			<input style="margin-left: 54px;" type="text" class="form-control" name="h" value="">
		</div>

		<div class="form-group">
			<label for="">Điểm chuẩn</label>
			<input style="margin-left: 3px;" type="text" class="form-control" name="d" value="">
		</div>

		<div class="form-group">
			<label for="">Tổng điểm</label>
			<input style="margin-left: 10px;" type="text" class="form-control" name="td" readonly="true" value="<?php echo $tong;?>">
		</div>	

		<div class="form-group">
			<label for="">Kết quả thi</label>
			<input style="margin-left: 10px;" type="text" class="form-control" name="k" readonly="true" value="<?php echo $k;?>">
		</div>

		
		<div id="nut">
			<button type="submit" class="btn btn-primary" name="submit" value="Kết quả">Xem kết quả</button>
		</div>
		
	</form>
</body>
</html>