<?php 
	session_start();
	if(!isset($_SESSION["fn"]))
		header("location:home.php");
?>
<html>
<head>	
	<title>parent home</title>	
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/phome.css"> 
	<link rel="stylesheet" type="text/css" href="css/middlelane.css">

	<script type="text/javascript" src="javascript/style.js"></script>
<style>
body{
	background-image :url("images/h3.jpg");
	background-repeat: no-repeat;
	background-size: 1358px 700px;
         }
</style>
</head>

<body><div id="headername"><h1>
	<b><a href="home.html"><img src="images/prologo.png" height="25px" width="50px"></a></b> School Network</h1>
					       <div id="menu">
							<ul>
								
								<li><a href="cgroup.html"  title="">Students</a></li>
								<li><a href="mgroup.html" title="">Add Student</a></li>
								<li><a href="Logout.html" title="">Logout</a></li>
							</ul>
						</div>
	</div>
<table>
<th>
<td>
	<div id="shomeleft">		
						<ul>
						<fieldset><li><a href="uedit.php"><img src= "<?php echo $_SESSION["img"];
	?>" height="60" width="60">PARENT<br><?php echo $_SESSION["fn"];
	?></a></li></fieldset><br>
						</ul>   			
	</div>
	</td>		
</th>
<th>
<td>
							

							<ul class="teachertab">
								<li><a href="#" class="tablinks" onclick="postbar(event, 'Post')">Post</a></li>
  								<li><a href="#" class="tablinks" onclick="postbar(event, 'Notifications')">Notifications</a></li>
							</ul>
							<div id="Post" class="tabcontent">
 								<h3>Folders</h3>
								  <p>Paris is the capital of France.</p> 

							</div>

							<div id="Notifications" class="tabcontent">
 								 <h3>deFolders</h3>
								  <p>Paris is the capital of France.</p> 
							</div>



								







</td>
</th>
<th>
	<div id="shomeright">		
						<ul>
							<li><fieldset>notifiactions</fieldset></li>
						</ul>   			
	</div>
	</th>
	</table>	
</body>
</html>