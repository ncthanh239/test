<?php
	//Ket noi co so du lieu

	// Thong so ket noi CSDL
	$servername = "localhost";//255.123.45.21
	$username = "root";   // ten dang nhap
	$password = "";    // mat khau rong
	$dbname = "uddlw";   // db muon ket noi

	// Tao ra ket noi den CSDL connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	$conn->set_charset("utf8"); // set utf-8 dể đọc dữ liệu tiếng Việt

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	// Cau lenh truy van co so du lieu
	$query = "SELECT * FROM sach";

	// Thuc thi cau lenh truy van co so du lieu
	$result = $conn->query($query);

	while($row = $result->fetch_assoc()) { 

	echo "<pre>";
		print_r($row);
	echo "</pre>";


    }

   //  $strthem = "insert into sach values ('100','Doremon', 'Fujiko', 'nxb1000')";
   //  $result1 = $conn->query($strthem);
   

 		// while ( $row = $result ->fetch_assoc()){

 		// 	 echo $row['masach'];
 		// 	 echo $row['tensach'];
 		// 	 echo $row['tacgia'];
 		// 	 echo $row['manxb'];
 		// }

 	// $strsua = "update sach set tensach='Conan', tacgia='Aoyama', manxb='1001' where manxb='nxb1000'";
 	// $result1 = $conn->query($strsua);
 	// while ( $row = $result ->fetch_assoc()){

 	// 		  echo $row['masach'];
 	// 		 echo $row['tensach'];
 	// 		 echo $row['tacgia'];
 	// 		 echo $row['manxb'];
 	// 	}

 // 	$strxoa = "delete from sach where masach='nxb1000'";
	// $result1 = $conn->query($strxoa);
 // 	while ( $row = $result ->fetch_assoc()){

 // 			 echo $row['masach'];
 // 			 echo $row['tensach'];
 // 			 echo $row['tacgia'];
 // 			 echo $row['manxb'];
 // 		}

	?>



























	

