<?php error_reporting (0);?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>bài 8</title>
	<!-- <link rel="stylesheet" href="css/ex8.css"> -->
	<style type="text/css">
		p{
			text-align: center;
			color: red;
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
	<div>
		<table>
			<p>KẾT QUẢ THI ĐẠI HỌC</p>
			<form action="ex8.php" method="POST">

			<tr>
				<td >Toán</td>
				<td><input type="text" name="t" value=""></td>
			</tr>	
			<tr>
				<td >Lý</td>
				<td><input type="text" name="l" value=""></td>
			</tr>
			<tr>
				<td >Hóa</td>
				<td><input type="text" name="h" value=""></td>
			</tr>
			<tr>
				<td >Điểm chuẩn</td>
				<td><input type="text" name="d" value=""></td>
			</tr>
				<tr>
				<td >Tổng điểm</td>
				<td><input type="text" name="td" readonly="true" value="<?php echo $tong;?>"></td>
			</tr><tr>
				<td >Kết quả thi </td>
				<td><input type="text" name="k" readonly="true" value="<?php echo $k;?>"></td>
			</tr><tr>
				<td ></td>
				<td><input type="submit" name="submit" value="Kết quả"></td>
			</tr>
			</form>
		</table>
	</div>
</body>
</html>