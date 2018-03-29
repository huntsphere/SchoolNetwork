<!-- database connection -->
<?php require("connection.php");
ob_start(); 
?>
<html>
<head>	
	<title>login</title>	
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/login.css">
<style>
body{
	background: url("ups/bak5.jpg") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;	
         }
</style>
</head>

<body>



	<div id="headername"><h1>
	<b><a href="home.php"><img src="images/prologo.png" height="25px" width="50px"></a></b> School Network &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</h1></div>
		

                      <script type="text/javascript">


										function check(f)
										{
											if(f.unm.value=="")	
											{
												document.getElementById("a").innerHTML="Please,Enter the user id ";
												//alert("Please,Enter Your User Id")
												f.unm.focus()
												return false;
												}
											else if(f.pwd.value=="")
												{
													document.getElementById("b").innerHTML="Please,Enter the password";
													//alert("Please,Enter Your Password")
													f.pwd.focus()
													return false;
													
													}	
												
												else
												return true;
											}
										
										
										</script>
			<div id="login">	
                 <form action="loginH.php" method="POST" onsubmit="return check(this)">
					<table>						
					
						<th><b><h1>login</h1></b></th>
						<tr><td><b>USERNAME : </b></td><td><input type="text" name="unm"><span id='a' style="color: red;"><br><br></span></td></tr>
						
						<tr><td><b>PASSWORD : </b></td><td><input type="password" name="pwd"><span id='b' style="color: red;"><br><br></span></td></tr>
						
						<tr><td><i><input type="submit" value="login"></i><br><br></td><td><br><br></td></tr>
						
						<tr><td><a href="forgetpassword.html">Forget Password</a></td>
						<td><a href="home.php">CANCEL</a></td></tr>
					</table>  
			<h4>					
			<?php
			if (isset ($_GET["act"]))
				if ($_GET["act"] == "invalid")
					echo "Invalid User Id / password";	
			?>	</h4>						
			</form>
</div>
	
</body>
</html>