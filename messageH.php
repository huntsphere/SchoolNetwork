<?php session_start();
require("connection.php");
 if(!isset($_SESSION["fn"]))
		header("location:home.php");
?>
<?php 
	$uto=$_POST['uto'];
	$tt=$_POST['tt'];
	
	$sql="INSERT INTO chatlog (id_from,id_to) values ($_SESSION[uid],$uto)";
	$result = ExecuteNonQuery($sql);
	$sql = "SELECT MAX(chat_id) as cid FROM chatlog";
	$row = mysql_fetch_array (ExecuteQuery ($sql));
	$cid = $row['cid'];
	
	
	$sql="INSERT INTO chat (id, chat_id, message) values ($_SESSION[uid],$cid,'$tt')";
	
	$result += ExecuteNonQuery($sql);

	if ($result == 2)
		header("location:messaged.php");	
?>