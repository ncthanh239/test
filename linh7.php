<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 7</title>
	<style type="text/css">
		
		legend{
			background-color: #FB3131;
			color: white;
			height: 30px;
			width: 400px;
			line-height: 30px;
			text-align: center;
		}
		
		form{
			background-color: #F03BD4;
			width:405px;
		}
		#nut{
			text-align: center;
			margin-top: 30px;
		}
	</style>
</head>
<body>
	<?php 

	if(isset($_POST['hk1']) && (isset($_POST['hk2']))){
		$hk1 = $_POST['hk1'];
		$hk2 = $_POST['hk2'];

		$tb = ($hk1+$hk2*2)/3;

		if($tb >= 5){
			$kq = "Được lên lớp!";
		}
		if($tb<5){
			$tb = "Ở lại lớp!";
		}
		if($tb>=8){
			$hl = "Giỏi";
		}
		if($tb>6.5 && $tb <8){
			$hl = "Khá";
		}
		if($tb>=5 && $tb<6.5){
			$hl = "Trung bình";
		}
		if($tb<6.5){
			$hl = "Yếu";
		}

	}


	 ?>

	<form action="linh7.php" method="POST" role="form">
		<legend>KẾT QUẢ HỌC TẬP</legend>
	
		<div class="form-group">
			<label for="">Điểm HK1:</label>
			<input type="text" class="form-control" id="" name="hk1" value="<?php if(isset($_POST['hk1'])) echo $_POST['hk1'];?>" style="margin-left: 80px;">
		</div>
		
		<div class="form-group">
			<label for="">Điểm HK2:</label>
			<input type="text" class="form-control" id="" name="hk2" value="<?php if(isset($_POST['hk2'])) echo $_POST['hk2'];?>" style="margin-left: 80px;">
		</div>
	
		<div class="form-group">
			<label for="">Điểm trung bình:</label>
			<input type="text" class="form-control" id="" name="tb" readonly="true" value="<?php if(isset($tb)) echo $tb;?>" style="margin-left: 45px;">
		</div>
	
		<div class="form-group">
			<label for="">Kết quả:</label>
			<input type="text" class="form-control" id="" name="kq" readonly="true" value="<?php if(isset($kq)) echo $kq;?>" style="margin-left: 100px;">
		</div>
	
		<div class="form-group">
			<label for="">Xếp loại học lực:</label>
			<input type="text" class="form-control" id="" name="hl" readonly="true" value="<?php if(isset($hl)) echo $hl;?>" style="margin-left: 45px;">
		</div>
	
		
	
		<div id="nut">
			<button type="submit" class="btn btn-primary">Xem kết quả</button>
		</div>
	</form>



	<ul>
		<li>Hà Thị Thùy Linh</li>
		<li>Tin10A2HN</li>
		<li>16103100161</li>
	</ul>
</body>
</html>