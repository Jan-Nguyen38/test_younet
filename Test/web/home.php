<?php 
	require 'student_subject.php' ;
	$dsmh= get_all_subjects();
	$dssv= get_all_students();

	
	//$dssvv=array('data'=> $dssv);
	
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trang chủ</title>
	<script type="text/javascript" src="../vendor/bootstrap.js"></script>
	<script type="text/javascript" src="/1.js"></script>
	<link rel="stylesheet" href="../vendor/bootstrap.css">
	<link rel="stylesheet" href="../vendor/font-awesome.css">
 	<link rel="stylesheet" href="/1.css ">
</head>
<body>
	<?php require 'header.php' ?>
	<h1 align="center">Thông tin chung</h1>
	<hr>
	<center>
	<table width="50%"  cellpadding="5" border="2" >
	<thead>
	<tr>
			<th style="text-align: center;"><strong>Mã SV</strong></th>
			<th style="text-align: center;"><strong>Tên</strong></th>
			<th style="text-align: center;"><strong>Ngày sinh</strong></th>
			<th style="text-align: center;"><strong>Ngành</strong></th>
			<th style="text-align: center;"><strong>Môn đăng kí</strong></th>
			<th style="text-align: center;"><strong>Chỉnh sửa</strong></th>
			<th style="text-align: center;"><strong>Xóa</strong></th>
	</tr>
	</thead>
	<tbody>
	
	<?php foreach ($dssv as  $row):?>
	<tr>
	<td align="center"><?php echo $row['student_id'] ?></td>
	<td align="center"><?php echo $row['student_name'] ?></td>
	<td align="center"><?php echo $row['birthday'] ?></td>
	<td align="center"><?php echo $row['major'] ?></td>
	<td align="center"><?php echo $row['subject_id'] ?></td>
	<td align="center">
	<a href="edit_student_view.php?id=<?php echo $row['student_id']?>">Chỉnh sửa</a>
	</td>
	<td align="center">
	<a href="delete.php?id=<?php echo $row['student_id'] ?>">Xóa</a>
	</td>
</tr>
	<?php endforeach ?>
	</tbody>
	</table>
	<br>
	<br>
</center>
	<br>
<center>
	<table width="50%"  cellpadding="5" border="2" >
	<thead>
	<tr>
			<th style="text-align: center;"><strong>Mã lớp</strong></th>
			<th style="text-align: center;"><strong>Tên</strong></th>
			<th style="text-align: center;"><strong>Bộ môn</strong></th>
			<th style="text-align: center;"><strong>Tín chỉ</strong></th>
			<th style="text-align: center;"><strong>Chỉnh sửa</strong></th>
			<th style="text-align: center;"><strong>Xóa</strong></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($dsmh as $key => $row):?>
	<tr>
	<td align="center"><?php echo $row['subject_id'] ?></td>
	<td align="center"><?php echo $row['subject_name'] ?></td>
	<td align="center"><?php echo $row['department'] ?></td>
	<td align="center"><?php echo $row['credit'] ?></td>
	<td align="center">
	<a href="edit_subject_view.php?id_su=<?php echo $row['subject_id']?>">Chỉnh sửa</a>
	</td>
	<td align="center">
	<a href="delete.php?id_su=<?php echo $row['subject_id'] ?>">Xóa</a>
	</td>
</tr>
	<?php endforeach ?>
	</tbody>
	</table>
	<br>
	<form action = "http://127.0.0.1/Test/view/result_search_view.php" method="post">
		<label>Tìm kiếm danh sách lớp</label>
	    <input type="text" name="id_su" id="search_id" placeholder="Mã môn học">
	    <input type="submit" name="ok" value="search" >
	</form>
	
</center>
</body>
</html>
<!-- <script >
		
        document.getElementById('search_id').addEventListener('keydown', function(event) {
        	if(event.keyCode == 13) {
        		alert(document.getElementById("search_id").value);
        	}
        	
        });
 </script> -->
 
