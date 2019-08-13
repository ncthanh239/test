<?php 
// phpinfo();
if (isset($_REQUEST['ok'])) 
        {
            // Gán hàm addslashes để chống sql injection
            $search = addslashes($_GET['search']);
 
            // Nếu $search rỗng thì báo lỗi, tức là người dùng chưa nhập liệu mà đã nhấn submit.
            if (empty($search)) {
                echo "Yeu cau nhap du lieu vao o trong";
            } 
            else
            {
                // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
                $query = "select * from sach where tensach like '%$search%'";
 
                // Kết nối sql
                $connection = mysqli_connect('localhost', 'root', '', 'thanhqltv');
                // Thực thi câu truy vấn
                $result = mysqli_query($connection,$query);
 
                // Đếm số đong trả về trong sql.
                $num = mysqli_num_rows($result);
 
                // Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
                // if ($num > 0 && $search != "") 
                // {
                    // Dùng $num để đếm số dòng trả về.
                    echo "$num ket qua tra ve voi tu khoa <b>$search</b>";
 
                    // Vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu có trong table và trả về dữ liệu ở dạng array.
                    echo '<table border="1" cellspacing="0" cellpadding="10">';
                //     while($row = $result->fetch_assoc()) {
                //         echo '<tr>';
                //             echo "<td>{$row['masach']}</td>";
                //             echo "<td>{$row['tensach']}</td>";
                //             echo "<td>{$row['tentacgia']}</td>";
                //             echo "<td>{$row['namxb']}</td>";
                            
                //         echo '</tr>';
                //     }
                //     echo '</table>';
                // } 
                // else {
                //     echo "Khong tim thay ket qua!";
                // }
            }
        }

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Search</title>
 	<!-- Latest compiled and minified CSS & JS -->
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 	<script src="//code.jquery.com/jquery.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <style type="text/css">
        .tdanh>img{
            width: 50px;
            height: 50px;
        }
    </style>
 </head>
 <body>
 	<div class="container">
 		<h1 align="center">SEARCH</h1>
            <form action="search.php" method="get" role="form">
            	<div class="form-group">
            		<label for="">Seach</label>
            		<input type="text" name="search" class="form-control" id="" placeholder="Mời nhập từ khóa">
            	<button type="submit" name="ok" value="search" class="btn btn-primary">Submit</button>
            </form>

        	 <table class="table table-hover">
 			<thead>
 				<tr>
 					<th align="center">Mã sách</th>
 					<th align="center">Tên sách</th>
 					<th align="center">Tên tác giả</th>
 					<th align="center">Năm sản xuất</th>
                    <th align="center">Ảnh</th>
 					<th align="center">Action</th>
 				</tr>
 			</thead>
 			<tbody>
 				<?php
 				if(isset($num))
 				if ($num > 0 && $search != "") 
                

 				 while($row = $result->fetch_assoc()) {  ?>
 			<tr>
 				<td ><?php echo $row['masach'] ?></td>
 				<td ><?php echo $row['tensach'] ?></td>
 				<td ><?php echo $row['tentacgia'] ?></td>
 				<td ><?php echo $row['namxb'] ?></td>
                <td align="center" class="tdanh"><?= "<img  src='upload/".$row['anh']."'>" ?></td>
 				
 				<td >
 					
 					<a href="" class="btn btn-primary" title="">Sửa</a>
 					<a href="" class="btn btn-danger" title="">Xóa</a>
 				</td>
 				
 			</tr>
 			<?php } ?>
 			</tbody>
 		</table>
 	
 	</div>
 	 	
 	 	
     

       
 </body>
 </html>