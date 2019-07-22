<?php 
require 'student_subject.php';

if (isset($_GET['id']) && is_numeric($_GET['id']))
{
	$id=$_GET['id'];
	$data=get_student($id);
} 
$id = isset($_POST['st_id']) ? $_POST['st_id']: '' ;
$name = isset($_POST['st_name']) ? $_POST['st_name'] :'' ;
$bday = isset($_POST['bday']) ? $_POST['bday'] : '' ;
$major = isset($_POST['major']) ? $_POST['major']: '' ;
$sub_id = isset($_POST['subject_id']) ? $_POST['subject_id'] : '' ;
$result = update_student($id,$name,$bday,$major,$sub_id);
if($result)
{
	header("Location: home.php");
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
<form name="editStudent" action="edit_student_view.php" method="post" enctype="multidata/form-data">
	<div class="card">
		<div class="card-block">
			<fieldset class="form-group">
				<label for="formGroupExampleInput">Mã SV</label>
				<input  name="st_id" type="text" readonly class="form-control" id="formGroupExampleInput" value="<?php echo $data['student_id'] ?>" required>
			</fieldset>
			<fieldset class="form-group">
				<label for="formGroupExampleInput2">Tên</label>
				<input name="st_name" type="text" class="form-control" id="formGroupExampleInput2" value="<?php echo $data['student_name'] ?>" required>		
			</fieldset>
			<fieldset class="form-group">
				<label for="formGroupExampleInput2">Ngày sinh</label>
				<input name="bday" type="text" class="form-control" id="formGroupExampleInput2" value="<?php echo $data['birthday'] ?>" required>		
			</fieldset><fieldset class="form-group">
				<label for="formGroupExampleInput2">Ngành</label>
				<input name="major" type="text" class="form-control" id="formGroupExampleInput2" value="<?php echo $data['major'] ?>" required>		
			</fieldset><fieldset class="form-group">
				<label for="formGroupExampleInput2">Môn đăng kí </label>
				<select name="subject_id"  required>
				  <option value="<?php echo $data['subject_id'] ?>"><?php echo $data['subject_id'] ?></option>
				  <option value="MA003"> Đại số tuyến tính</option>
				  <option value="IT004"> Cơ sở dữ liệu</option>
				  <option value="NT101"> An toàn Mạng máy tính</option>
				  <option value="EN001"> Anh Văn 1</option>
</select>		
			</fieldset>

				<input type="submit" class="btn btn-success btn-block"  value="Lưu" >
		</div>
	</div>
</div>

</form>
		
</body>
</html>
