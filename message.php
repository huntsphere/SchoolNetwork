<?php 
session_start();
require("connection.php");
 if(!isset($_SESSION["fn"]))
		header("location:home.php");

$sql="SELECT * from user where id=$_GET[id]";

$rows=ExecuteQuery($sql);
$row = mysql_fetch_array($rows);
?>
<script type="text/javascript">
function check(f)
{
	if(f.uto.value=="")	
	{
		document.getElementById("a").innerHTML="Please,Enter receiver";
		//alert("Please,Enter The Question");
		f.tt.focus();
		return false;
		}
		else
		return true;
	}
	if(f.tt.value=="")	
	{
		document.getElementById("b").innerHTML="Please,Enter the message";
		//alert("Please,Enter The Question");
		f.tt.focus();
		return false;
		}
		else
		return true;
	}

</script>

<form action="messageH.php" method="POST" onsubmit="return check(this)">
	
<table>
<tr><td>To</td><td>:</td><td><input type="hidden" name="uto" value="<?php echo $_GET['id'] ?>" /></td></tr>
<tr><td>Message</td><td>:</td><td><textarea rows="3" cols="30" name="tt" ></textarea><span id='a' style="color: red;"></span></td></tr>
<tr><td></td><td></td><td><input type="submit" value="SEND" ></td></tr>
</table>
</form>
<br/>
