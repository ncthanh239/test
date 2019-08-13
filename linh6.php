<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>	Bài 6</title>
		<style type="text/css">
			h4{
				color: white;
				background-color: #200BBC;
				text-align: center;
				line-height: 30px;
				width: 350px;
				height: 30px;
			}

			#nut{
				color: blue;
				background-color: #200BBC;
				text-align: center;
				line-height: 30px;
				width: 350px;
				height: 30px;
			}
			.khung{
				background-color: #82E1C5;
				width:350px;
			}
			#chao{
				text-align: center;
				margin-top: 10px;
			}
		</style>
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
	
	<div class="khung">
		<form action="linh6.php" method="POST" role="form">
			<h4>CHÀO THEO GIỜ</h4>
			<label>Nhập giờ:</label>
			<input type="text" name="gio" placeholder="Mời bạn nhập giờ" value="<?php if(isset($_POST['gio'])) echo $_POST['gio']?>">
			<div id="chao"><?php if(isset($tb)) echo $tb; ?></div>
			<div id="nut">
				<button>Chào</button>
			</div>
		</form>
	</div>


	<div>
		<ul>
			<li>Hà Thị Thùy Linh</li>
			<li>Tin10A2HN</li>
			<li>16103100161</li>
		</ul>
	</div>
</body>
</html>