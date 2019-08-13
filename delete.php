<?php 
		require 'connection.php';

	$masp=$_GET['manxb'];
	$query="DELETE FROM nxb where manxb='".$manxb."'";
	echo $query;
	$result=$conn->query($query);
	if($result==1){
			setcookie('msg','Xóa thành công',time()+1);
		}else{
			setcookie('msg','Xóa không thành công',time()+1);
		}
		header('Location: crud.php');


 ?>