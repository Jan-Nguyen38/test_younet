<?php 
require 'student_subject.php';
if (isset($_GET['id']) && is_numeric($_GET['id']))
{
	$id=$_GET['id'];
	delete_student($id);
}
//header("location: home.php");

if (isset($_GET['id_su']) )
{
	$id=$_GET['id_su'];
	delete_subject($id);
}
header("location: home.php");
 ?>