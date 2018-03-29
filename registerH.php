<?php  
ob_start();
require("connection.php"); ?>

<?php
$u_id=$_POST['u_id'];
$f_name=$_POST['f_name'];
$u_name=$_POST['u_name'];
$pwd=$_POST['pwd'];
$e_mail=$_POST['e_mail'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$type=$_POST['type'];
$add=$_POST['add'];
$sta=$_POST['sta'];
$cou=$_POST['cou'];

$ima = $_FILES['ima']['name'];
$imup=$_FILES['ima']['tmp_name'];

$path="ups/$ima";
move_uploaded_file($imup, $path);


//$image = chunk_split(base64_encode(file_get_contents( $imup )));


$sql=" INSERT INTO user (id,fullname,username,password,email,gender,dob,type,address,state,country,image) values ('$u_id','$f_name','$u_name','$pwd','$e_mail','$gender','$dob','$type','$add','$sta','$cou','$path')";

$result=ExecuteNonQuery ($sql);

if($result)
{
	header("location:notification.php");
}
else
{
		header("location:register.php");
}
?> 	