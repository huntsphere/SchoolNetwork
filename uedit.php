
<?php session_start();
if(!isset($_SESSION["fn"]))
		header("location:home.php");
require ("connection.php");
 ?>
<script type="text/javascript">
function check(f)
	{
		if (f.id.value == "")
		{
			document.getElementById("a").innerHTML="Please,Enter user ID";
			//alert("Please, Enter The Username");
			f.id.focus();
			return false;
		}
		if (f.fn.value == "")
		{
			document.getElementById("b").innerHTML="Please,Enter fullname";
			//alert("Please, Enter The Username");
			f.fn.focus();
			return false;
		}
		else if (f.un.value == "")
		{
			document.getElementById("c").innerHTML="Please,Enter username";
//			alert ("Please,Please Enter The Fullname");
			f.un.focus();
			return false;
		}
		else if (f.pwd.value == "")
		{
			document.getElementById("d").innerHTML="Please,Enter the password";
			//alert ("Please,Please Enter The Password");
			f.pwd.focus();
			return false;
		}
		else if (f.e_mail.value == "")
		{
			document.getElementById("e").innerHTML="Please,Enter the e-mail add ";
			//alert ("Please,Please Enter The E-mail Address");
			f.e_mail.focus();
			return false;
		}
		else if (f.gender.value == "")
		{
			document.getElementById("f").innerHTML="Please,Select the gender";
			//alert("Please,Please Enter The Gender");
			f.gender.focus();
			return false;
		}
		else if (f.dob.value == "")
		{
			document.getElementById("g").innerHTML="Please,Enter the date of birth"
	//		alert ("Please,Please Enter The Date Of Birth");
			f.dob.focus();
			return false;
		}
		else if (f.type.value == "")
		{
			document.getElementById("h").innerHTML = "Please, select type.";
		//		alert ("Please,Please Enter The Date Of Birth");
				form1.type.focus();
		 return false;		
		}
		else if (f.add.value == "")
		{
			document.getElementById("i").innerHTML="Please,Enter the address";
			//alert ("Please,Please Enter The Address");
			f.add.focus();
			return false;
		}
		else if (f.sta.value == "")
		{
			document.getElementById("j").innerHTML="Please,Enter the state";
			//alert ("Please,Please Enter The State");
			f.sta.focus();
			return false;
		}
		else if (f.cou.value == "")
		{
			document.getElementById("k").innerHTML="Please,Enter the country";
//			alert ("Please,Please Enter The Country");
			f.cou.focus();
			return false;
		}
		
		else
			return true;
	}
</script>
<form action="uupdate.php" method="POST" onsubmit="return check(this)" enctype="multipart/form-data">

<?php
$sql = "SELECT * FROM user WHERE id=$_SESSION[uid]";
 
	$rows = ExecuteQuery($sql);
	
	if (mysql_num_rows($rows)>0)
	{
		$row = mysql_fetch_array ($rows);
		echo "<table>";
		echo "<tr><td>ID</td><td> : </td><td><input type='text' name='id' value='$row[id]' ><span id='a' style='color: red';/></span></td></tr>";
		echo "<tr><td>full Name</td><td> : </td><td><input type='text' name='fn' value='$row[fullname]' ><span id='b' style='color: red';/></span></td></tr>";
		echo "<tr><td> username</td><td> : </td><td><input type='text' name='un' value='$row[username]' ><span id='c' style='color: red';/></span></td></tr>";
		echo "<tr><td>Password</td> <td> : </td><td><input type='password' name='pwd' value='$row[password]'><span id='d' style='color: red';/></span></td></tr>";
		echo "<tr><td>E-Mail</td><td> :</td><td> <input type='text' name='e_mail' value='$row[e_mail]'/><span id='e' style='color: red';/></span></td></tr>";
		echo "<tr><td>Gender</td><td> :</td><td> <input type='radio' name='gender' value='1' checked='checked' />male<input type='radio' name='gender' >female<span id='f' style='color: red';/></span></td></tr> ";
		echo "<tr><td>Date Of Birth</td> <td>: </td><td><input type='text' name='dob' value='$row[dob]'/><span id='g' style='color: red';/></span></td></tr>";
		echo"<tr><td>Type :</td><td>:</td><td><input type='radio' name='type' value='1' checked='checked'>Teacher <input type='radio' name='type'>Student<span id='h' style='color: red';></span></td></tr>";
		echo "<tr><td>Image</td><td>:</td><td> <input type='file' name='ima' value=''/></td></tr> ";
		echo "<tr><td>Address</td><td> :</td><td> <textarea rows='3' cols='15' name='add' value='$row[address]'></textarea><span id='i' style='color: red';/></span></td></tr>";
		echo "<tr><td>State</td><td> :</td><td> <input type='text' name='sta' value='$row[state]'><span id='j' style='color: red';/></span></td></tr>";
		echo "<tr><td>Country</td><td> :</td><td><input type='text' name='cou' value='$row[country]'><span id='k' style='color: red';/></span></td></tr>";
		echo "</table>";	
	}
	
?>

	<input type="submit" value="Update">
    <input type="reset" value="Reset">
</form>
