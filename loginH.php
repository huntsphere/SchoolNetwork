<?php require("connection.php");
ob_start(); 
?>
<?php 
$unm=$_POST["unm"];
$pwd=$_POST["pwd"];

	if ( isset($unm) && isset($pwd))
	{
		$sql="select * from user where username='$unm' and password='$pwd'"	;
		$result = ExecuteQuery($sql);
		
		if (mysql_num_rows($result)==1)
		{
			$row = mysql_fetch_array($result);
			
			session_start();

			$_SESSION["uid"] = $row["id"];
			$_SESSION["unm"] = $row["username"];
			$_SESSION["fn"] = $row["fullname"];
			$_SESSION["img"] = $row["image"];
			
			ExecuteNonQuery ("UPDATE User SET isuser=true WHERE username='$unm'");
			
			if($row["type"]=="1")
			{
				header("location:thome.php");
			}
			else
			{
				header("location:shome.php");
			}
		}
		else
			header("location:login.php?act=invalid");
	}
?>