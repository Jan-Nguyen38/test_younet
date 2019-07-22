<?php 
	global $conn;
function connect_db()
{
	global $conn;
	$servername = "localhost";
	$username   = "root";
	$password = "";
	$dbname = "test_younet";
	if(!$conn){
	$conn = new mysqli($servername, $username, $password, $dbname) or die ("Không kết nối :" . $conn->connect_error);
	$conn->set_charset('utf8');
}
}
function disconnect_db()
{
	global $conn;
	if($conn)
		{
			$conn->close();
		}
}
function get_all_students()
{
	global $conn;
	connect_db();
	$sql="SELECT * FROM student ORDER BY student_id ASC ";
	$data = $conn->query($sql);
	$result = array();
	while($row=$data->fetch_assoc())
	{
		$result[]=$row;

	}
	//var_dump($result);
	return $result;
	$data->close();
	disconnect_db();

}
function login($user,$pass)
{
	global $conn;
	connect_db();
	$query = $conn->query("SELECT * FROM login  ") ;
	$result = $query->fetch_array();
	return $result;
}
function get_all_subjects(){
	global $conn;
	connect_db();
	$sql="SELECT * FROM subject ORDER BY subject_id ASC";
	$data =$conn->query($sql);
	$result = array();
	while($row=$data->fetch_assoc())
	{
		$result[]=$row;
	}
	return $result ;
	
	disconnect_db();
}
function get_student($st_id)
{
	global $conn;
	connect_db();
	$query=$conn->query("SELECT * FROM student WHERE student_id=$st_id");
	$result=array();
	if($query->num_rows >0)
	{
		$result=$query->fetch_assoc();
	}
	return $result;
	disconnect_db();

}
function get_subject($su_id)
{
	global $conn;
	connect_db();
	$query=$conn->query("SELECT * FROM subject WHERE subject_id='$su_id'");
	$result=array();
	if($query->num_rows > 0)
	{
	$result=$query->fetch_assoc();
	}
	return $result;
	disconnect_db();

}
function add_student($st_id,$name,$bday,$major,$subject_id)
{
	global $conn;
	connect_db();
	$st_id = addslashes($st_id);
    $name = addslashes($name);
    $bday = addslashes($bday);
    $major = addslashes($major);
    $subject_id = addslashes($subject_id);
    $query = $conn->query("INSERT INTO student (student_id,student_name,birthday,major,subject_id) VALUES ('$st_id','$name','$bday','$major','$subject_id')") ;
   	return $query;
   	
   	disconnect_db();

}
function add_subject($su_id,$su_name,$department,$credit)
{
	global $conn;
	connect_db();
	$su_id = addslashes($su_id);
    $su_name = addslashes($su_name);
    $department = addslashes($department);
    $credit = addslashes($credit);
    
    $query = $conn->query("INSERT INTO subject (subject_id,subject_name,department,credit) VALUES ('$su_id','$su_name','$department','$credit')") ;
   	return $query;
   	
   	disconnect_db();
}
function update_student($st_id,$name,$bday,$major,$subject_id)
{
	global $conn;
	connect_db();
	$st_id = addslashes($st_id);
    $name = addslashes($name);
    $bday = addslashes($bday);
    $major = addslashes($major);
    $subject_id = addslashes($subject_id);
    $query=$conn->query("UPDATE student SET student_id='$st_id',student_name= '$name',birthday='$bday',major='$major',subject_id='$subject_id' WHERE student_id=$st_id ");
    return $query;
    
   	disconnect_db();

}

function update_subject($su_id,$su_name,$department,$credit){
	global $conn;
	connect_db();
	$su_id = addslashes($su_id);
    $su_name = addslashes($su_name);
    $department = addslashes($department);
    $credit = addslashes($credit);
    $query = $conn->query("UPDATE subject SET subject_id= '$su_id' , subject_name= '$su_name' ,department= '$department' ,credit= '$credit' WHERE subject_id= '$su_id' ") ;
    return $query;

}

function get_su_st($su_id)
{
	global $conn;
	connect_db();
	$su_id = addslashes($su_id);
	// $sql="SELECT student_id, student_name, birthday, major 
	//       FROM student 
	//       INNER JOIN subject ON student.subject_id=subject.subject_id ";

	//echo $su_id;
	$sql = "SELECT student.*, subject.*
	      FROM student 
	      INNER JOIN subject ON student.subject_id = subject.subject_id
	      WHERE student.subject_id LIKE '%$su_id%'";
	$query = $conn->query($sql);
	$result = array();

	if($query->num_rows > 0) {
		$result[]=$query->fetch_assoc();
	}    
	return $result;
	disconnect_db();
}
function delete_student($st_id)
{
	global $conn;
	connect_db();
	$query = $conn->query("DELETE FROM student WHERE student_id=$st_id") or die("Không kết nối :" . $conn->connect_error);
}
function delete_subject($su_id)
{
	global $conn;
	connect_db();
	$query = $conn->query("DELETE FROM subject WHERE subject_id='$su_id'") or die("Không kết nối :" . $conn->connect_error);
	$query->close();
   	disconnect_db();
}

?>