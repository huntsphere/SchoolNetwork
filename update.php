<?php session_start(); 
require ("connection.php");   	 
if(!isset($_SESSION["fn"]))
		header("location:home.php");
?>
<script type="text/javascript">
	function check(form1)
	{
		if(
		form1.u_id.value == "" ||
		form1.f_name.value == "" ||
		form1.u_name.value == "" ||
		form1.pwd.value == "" ||
		form1.e_mail.value == ""||
		form1.gender.value == ""||
		form1.dob.value == ""||
		form1.type.value == ""||
		form1.add.value == ""||
		form1.sta.value == "" ||
		form1.cou.value == "" )
		{
		
		if (form1.u_id.value == "")
			{
				document.getElementById("a").innerHTML = "Please, Enter ID.";		
			form1.u_id.form1.focus();	
			}
			else
			{
				document.getElementById("a").innerHTML = "";
				form1.u_id.focus();
				
			}
			if (form1.f_name.value == "")
			{
				document.getElementById("b").innerHTML = "Please, Enter full name.";
				//alert("Please, Enter The Username");
			form1.f_name.form1.focus();
				
			}
			else
			{
				document.getElementById("b").innerHTML = "";
				//alert("Please, Enter The Username");
				form1.u_name.focus();
				
			}
			 if (form1.u_name.value == "")
			{
				document.getElementById("c").innerHTML = "Please, Enter username.";
				//alert ("Please,Please Enter The Fullname");
				form1.u_name.focus();
				
			}
			else
			{
				document.getElementById("c").innerHTML = "";
				//alert ("Please,Please Enter The Fullname");
				form1.f_name.focus();
			}
			 if (form1.pwd.value == "")
			{
				document.getElementById("d").innerHTML = "Please, Enter password.";
				//alert ("Please,Please Enter The Password");
				form1.pwd.focus();
				
			}
			else
			{
				document.getElementById("d").innerHTML = "";
				//alert ("Please,Please Enter The Password");
				form1.pwd.focus();

			}
			
			 if (form1.e_mail.value == "")
			{
				document.getElementById("e").innerHTML = "Please, Enter e-mail address.";
				//alert ("Please,Please Enter The E-mail Address");
				form1.e_mail.focus();
				
			}
			else
			{
				document.getElementById("e").innerHTML = "";
				//alert ("Please,Please Enter The E-mail Address");
				form1.e_mail.focus();
			}
			 if (form1.gender.value == "")
			{
				document.getElementById("f").innerHTML = "Please, select the gender.";
				//alert("Please,Please Enter The Gender");
				form1.gender.focus();
				
			}else
			{
				document.getElementById("f").innerHTML = "";
				//alert("Please,Please Enter The Gender");
				form1.gender.focus();
			}
			 if (form1.dob.value == "")
			{
				document.getElementById("g").innerHTML = "Please, Enter date of birth.";
		//		alert ("Please,Please Enter The Date Of Birth");
				form1.dob.focus();
				
			}
			else
			{
				document.getElementById("g").innerHTML = "";
		//		alert ("Please,Please Enter The Date Of Birth");
				form1.dob.focus();

			}
			document.getElementById("h").innerHTML = "Please, select type.";
		//		alert ("Please,Please Enter The Date Of Birth");
				form1.type.focus();
				
			}
			else
			{
				document.getElementById("h").innerHTML = "";
		//		alert ("Please,Please Enter The Date Of Birth");
				form1.type.focus();

			}
			 if (form1.add.value == "")
			{
				document.getElementById("i").innerHTML = "Please, Enter address.";
				//alert ("Please,Please Enter The Address");
				form1.add.focus();
				
			}
			else
			{
				document.getElementById("i").innerHTML = "";
				//alert ("Please,Please Enter The Address");
				form1.add.focus();
			}
			 if (form1.sta.value == "")
			{
				document.getElementById("j").innerHTML = "Please, Enter state.";
				//alert ("Please,Please Enter The State");
				form1.sta.focus();
				
			}
			else
			{
				document.getElementById("j").innerHTML = "";
				//alert ("Please,Please Enter The State");
				form1.sta.focus();

			}
			 if (form1.cou.value == "")
			{
				document.getElementById("k").innerHTML = "Please, Enter country.";
				//alert ("Please,Please Enter The Country");
				form1.cou.focus();
				
			}
			else
			{
				document.getElementById("k").innerHTML = "";
				//alert ("Please,Please Enter The Country");
				form1.cou.focus();
			}
			return false;
		}
		else
			return true;
	}
</script>


<html>
<head>	
	<title>update</title>	
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/register.css">

<style>
body{
	background-image :url("ups/bak4.jpg");
	background-repeat: no-repeat;
	background-size: 1358px 700px;
         }
</style>
</head>

<body><div id="headername"><h1>
	<b><a href="home.php"><img src="images/prologo.png" height="25px" width="50px"></a></b> School Network</h1>
<div id="login">


<form action="uupdate.php" method="POST" onsubmit="return check(this)" enctype="multipart/form-data">
<?php
$sql = "SELECT * FROM user WHERE id=$_SESSION[uid]";
$rows = ExecuteQuery($sql);
	
	if (mysql_num_rows($rows)>0)
	{
		$row = mysql_fetch_array($rows);
		echo "<table>";
		echo "<tr><td><h2>Update User Information  :</h2></td></tr>";
		echo "<tr><td> ID </td><td> :</td><td><input type='text' name='id' value='$row[id]'><span id='a' style='color: red';></span></td></tr>";
		echo "<tr><td>Fullname</td><td>:</td><td><input type='text' name='f_name' value='$row[Fullname]'><span id='b' style='color: red';></span></td></tr>";
		echo "<tr><td>Username</td><td>:</td><td><input type='text' name='u_name' value='$row[username]'><span id='c' style='color: red';></span></td></tr>";
		echo "<tr><td>Password</td><td>:</td><td><input type='password' name='pwd' value='$row[password]'><span id='d' style='color: red';></span></td></tr>";
		echo "<tr><td>E_Mail</td><td>:</td><td><input type='text' name='e_mail' value='$row[email]'><span id='e' style='color: red';></span></td></tr>";
		echo "<tr><td>Gender</td><td>:</td><td><input type='radio' name='gender' value='1' checked='checked'>male <input type='radio' name='gender'>female<span id='f' style='color: red';></span></td></tr>";
		echo "<tr><td>Date Of Birth</td><td>:</td><td><input type='Date' name='dob' value='$row[dob]'><span id='g' style='color: red';></span></td></tr>";
		echo "<tr><td>Type :</td><td>:</td><td><input type='radio' name='type' value='1' checked='checked'>Teacher <input type='radio' name='type'>Student<span id='h' style='color: red';></span></td></tr>";
		echo "<tr><td>Image</td><td>:</td><td><input type='file' name='ima' value='$row[image]'></td></tr>";
		echo "<tr><td>Address</td><td>:</td><td><textarea rows='3' cols='15' name='add' value='$row[address]'></textarea><span id='i' style='color: red';></span></td></tr>";
		echo "<tr><td>State</td><td>:</td><td><input type='text' name='sta' value='$row[state]'><span id='j' style='color: red';></span></td></tr>";
		echo "<tr><td>Country</td><td>:</td><td><input type='text' name='cou' value='$row[country]'><span id='k' style='color: red';></span></td></tr>";
}
?>
<tr><td><input type="submit" value="update"></td><td></td><td><input type="reset" value="Reset"></td></tr></table></form>

</div></div></body></html>
