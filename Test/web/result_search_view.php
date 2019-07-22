<?php 
	require 'student_subject.php' ;
    if (isset($_REQUEST['ok'])) {
    $search = addslashes($_REQUEST['id_su']);
    if (empty($search)) {
        echo "Yeu cau nhap du lieu vao o trong";
    } else {
       //var_dump(get_su_st($search));
    	$result_search = get_su_st($search);
   }
}
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Kết quả</title>
	<script type="text/javascript" src="../vendor/bootstrap.js"></script>
	<script type="text/javascript" src="/1.js"></script>
	<link rel="stylesheet" href="../vendor/bootstrap.css">
	<link rel="stylesheet" href="../vendor/font-awesome.css">
 	<link rel="stylesheet" href="/1.css ">
</head>
<body>
	<?php require 'header.php' ?>
	<center>
	<h1>Thông tin môn </h1>
	<table width="50%"  cellpadding="5" border="2" >
	<thead>
	<tr>
			<th style="text-align: center;"><strong>Mã SV</strong></th>
			<th style="text-align: center;"><strong>Tên</strong></th>
			<th style="text-align: center;"><strong>Ngày sinh</strong></th>
			<th style="text-align: center;"><strong>Ngành</strong></th>
			<th style="text-align: center;"><strong>Tên môn học</strong></th>
			
	</tr>
	</thead>
	<tbody>
	
	<?php foreach ($result_search as  $row):?>
	<tr>
	<td align="center"><?php echo $row['student_id'] ?></td>
	<td align="center"><?php echo $row['student_name'] ?></td>
	<td align="center"><?php echo $row['birthday'] ?></td>
	<td align="center"><?php echo $row['major'] ?></td>
	<td align="center"><?php echo $row['subject_name'] ?></td>
	</tr>
	<?php endforeach ?>
	</tbody>
	</table>
	<br>
	<br>
</center>
</body>
</html>