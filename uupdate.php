<?php session_start(); 
require ("connection.php");   	 
?>

<?php 

$ima = $_FILES['ima']['name'];
$imup=$_FILES['ima']['tmp_name'];

$path="ups/$ima";
move_uploaded_file($imup, $path);

	if ($ima == "")
	{

		$sql = "UPDATE user  SET  id = '".$_POST['id']."',fullname = '".$_POST['fn']."', username = '".$_POST['un']."',password='".$_POST['pwd']."',e_mail='".$_POST['e_mail']."',gender = '".$_POST['gender']."', dob = '".$_POST['dob']."',type = '".$_POST['type']."',address = '".$_POST['add']."',state = '".$_POST['sta']."',country = '".$_POST['cou']."' WHERE id =$_SESSION[id]"
	 else
	 {
	 	$sql = "UPDATE user  SET  id = '".$_POST['id']."',fullname = '".$_POST['fn']."', username = '".$_POST['un']."',password='".$_POST['pwd']."',e_mail='".$_POST['e_mail']."',gender = '".$_POST['gender']."', dob = '".$_POST['dob']."',uimg = '".$path."',type = '".$_POST['type']."',address = '".$_POST['add']."',state = '".$_POST['sta']."',country = '".$_POST['cou']."' WHERE id =$_SESSION[id]"
	 }
	 
	 
//echo $sql;	 
	 
$result=ExecuteNonQuery($sql);

if($result == 1)
{
	header("location:upupdate.php");
	
	}
	else
	{
	header("location:update.php");
	}
	
?>
      
