<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thêm môn học</title>
	<script type="text/javascript" src="../vendor/bootstrap.js"></script>
	<script type="text/javascript" src="./1.js"></script>
	<link rel="stylesheet" href="../vendor/bootstrap.css">
	<link rel="stylesheet" href="../vendor/font-awesome.css">
 	<link rel="stylesheet" href="./1.css">
</head>
<body>
	<?php require 'header.php' ?>
	<h3 class="text-xs-center">Thông tin cần điền</h3>
<hr>
<div class="col-sm-4 push-sm-4">
<form name="addSubject" action="add_subject_view.php" method="post" enctype="multidata/form-data">
	<div class="card">
		<div class="card-block">
			<fieldset class="form-group">
				<label for="formGroupExampleInput">Mã môn học</label>
				<input  name="su_id" type="text" class="form-control" id="formGroupExampleInput"  required>
			</fieldset>
			<fieldset class="form-group">
				<label for="formGroupExampleInput2">Tên môn học</label>
				<input name="su_name" type="text" class="form-control" id="formGroupExampleInput2" required>		
			</fieldset>
			<fieldset class="form-group">
				<label for="formGroupExampleInput2">Khoa/Ngành</label>
				<input name="department" type="text" class="form-control" id="formGroupExampleInput2" required>		
			</fieldset><fieldset class="form-group">
				<label for="formGroupExampleInput2">Số tín chỉ</label>
				<input name="credit" type="text" class="form-control" id="formGroupExampleInput2"  required>		
			</fieldset>
				<input type="submit" class="btn btn-success btn-block"  value="Lưu" >
		</div>
	</div>

</form>
</div>
</body>
</html>
<?php 
require 'student_subject.php';
$id = isset($_POST['su_id']) ? $_POST['su_id']: '' ;
$name = isset($_POST['su_name']) ? $_POST['su_name'] :'' ;
$school = isset($_POST['department']) ? $_POST['department'] : '' ;
$credit = isset($_POST['credit']) ? $_POST['credit'] : '' ;
$result = add_subject($id,$name,$school,$credit);

if($result)
{
	header("Location: home.php");
}

 ?>