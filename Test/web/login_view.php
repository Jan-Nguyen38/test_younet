<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<script type="text/javascript" src="../vendor/bootstrap.js"></script>
	<script type="text/javascript" src="./1.js"></script>
	<link rel="stylesheet" href="../vendor/bootstrap.css">
	<link rel="stylesheet" href="../vendor/font-awesome.css">
 	<link rel="stylesheet" href="./1.css">
</head>
<body>
<h3 class="text-xs-center">Đăng nhập</h3>
<hr>
<div class="col-sm-4 push-sm-4">
<form action="login.php" method="post" enctype="multidata/form-data">
	<div class="card">
		<div class="card-block">
			<fieldset class="form-group">
				<label for="formGroupExampleInput">Username</label>
				<input  name="name" type="text" class="form-control" id="formGroupExampleInput" required>
			</fieldset>
			<fieldset class="form-group">
				<label for="formGroupExampleInput2">Password</label>
				<input name="pass" type="password" class="form-control" id="formGroupExampleInput2" required>		
			</fieldset>
				<input type="submit" class="btn btn-success btn-block"  value="Đăng nhập" >
		</div>
	</div>
</div>
</form>
</body>
</html>
