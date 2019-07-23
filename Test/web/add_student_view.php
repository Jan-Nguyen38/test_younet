<?php 
require 'student_subject.php';
$data =get_all_su_id();
//var_dump($data)

if( isset($_POST['st_id']) &&  isset($_POST['st_name']) && isset($_POST['bday']) && isset($_POST['major']) && isset($_POST['subject_id']) )
{
	$id = $_POST['st_id'] ;
	$name = $_POST['st_name'] ;
	$bday = $_POST['bday'] ;
	$major =  $_POST['major'] ;
	$sub_id = $_POST['subject_id'] ;
	$result = add_student($id,$name,$bday,$major,$sub_id);

	if($result)
{
	header("Location: home.php");
}
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thêm sinh viên</title>
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
<form name="addStudent" action="add_student_view.php" method="post" enctype="multidata/form-data">
	<div class="card">
		<div class="card-block">
			<fieldset class="form-group">
				<label for="formGroupExampleInput">Mã SV</label>
				<input  name="st_id" type="text" class="form-control" id="formGroupExampleInput" required>
			</fieldset>
			<fieldset class="form-group">
				<label for="formGroupExampleInput1">Tên</label>
				<input name="st_name" type="text" class="form-control" id="formGroupExampleInput1" required>		
			</fieldset>
			<fieldset class="form-group">
				<label for="formGroupExampleInput2">Ngày sinh</label>
				<input name="bday" type="text" class="form-control" id="formGroupExampleInput2" required>		
			</fieldset>
			<fieldset class="form-group">
				<label for="formGroupExampleInput3">Ngành</label>
				<input name="major" type="text" class="form-control" id="formGroupExampleInput3" required>		
			</fieldset>
			<fieldset class="form-group">
				<label for="formGroupExampleInput4">Môn đăng kí </label>
				<select name="subject_id" required>
					<option value="">----------Chọn----------</option>
					<?php foreach ($data as $key => $value) : ?>
					<option value="<?php echo $value['subject_id'] ?>"> <?php echo $value['subject_name'] ?></option>
					<?php endforeach ?>
				</select>		
			</fieldset>
				<input type="submit" class="btn btn-success btn-block"  value="Lưu" >
		</div>
	</div>
</div>
</form>
	
</body>
</html>
