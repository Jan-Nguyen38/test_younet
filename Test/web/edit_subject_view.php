<?php 
require 'student_subject.php';
if (isset($_GET['id_su']) )
{
	$id=$_GET['id_su'];
	$value=get_subject($id);
	}
if(isset($_POST['su_id']) && isset($_POST['su_name']) && isset($_POST['department_view']) && isset($_POST['credit_view']) )
{
	$id = $_POST['su_id'] ;
	$name =  $_POST['su_name'] ;
	$department =  $_POST['department_view']  ;
	$credit = $_POST['credit_view'] ;

	$result=update_subject($id,$name,$department,$credit);
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
	<title>Cập nhật thông tin môn</title>
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
<form name="addSubject" action="edit_subject_view.php" method="POST" enctype="multidata/form-data">
	<div class="card">
		<div class="card-block">
			<fieldset class="form-group">
				<label for="formGroupExampleInput">Mã môn học</label>
				<input  name="su_id" type="text" class="form-control" id="formGroupExampleInput"   readonly value="<?php echo $value['subject_id']?>"  required>
			</fieldset>
			<fieldset class="form-group">
				<label for="formGroupExampleInput2">Tên môn học</label>
				<input name="su_name" type="text" class="form-control" id="formGroupExampleInput2" value="<?php echo $value['subject_name']?>"  required>		
			</fieldset>
			<fieldset class="form-group">
				<label for="formGroupExampleInput2">Khoa/Ngành</label>
				<input name="department_view" type="text" class="form-control" id="formGroupExampleInput3" value="<?php echo $value['department']?>"   required>		
			</fieldset><fieldset class="form-group">
				<label for="formGroupExampleInput2">Số tín chỉ</label>
				<input name="credit_view" type="text" class="form-control" id="formGroupExampleInput4" value="<?php echo $value['credit']?>"  required>		
			</fieldset>
				<input type="submit" class="btn btn-success btn-block"  value="Cập nhật" >
		</div>
	</div>

</form>
</div>
</body>
</html>

