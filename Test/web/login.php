<?php 
require 'student_subject.php';
$user = isset($_POST['name']) ? $_POST['name']: '' ;
$pass = isset($_POST['pass']) ? $_POST['pass']: '' ;
$row = login($user,$pass);
if($row['name'] == $user && $row['pass'] == $pass){
	header('Location:home.php') ;
	session_start();
	$_SESSION['login']=$user;
	if(isset($_GET['status']) && $_GET['status']=='logout')
{
	unset($_SESSION['login']);
	//echo "thanh cong";
	//header("Location: login_view.php");
}
}
else {
	require("login_view.php");
}


 ?>