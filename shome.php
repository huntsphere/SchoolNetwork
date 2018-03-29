<?php 
	session_start();
	
?>
<html>
<head>	
	<title>Student home</title>	
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/shome.css">

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
	<b><a href="home.php"><img src="ups/prologo.png" height="25px" width="50px"></a></b> School Network</h1>
					       
						</div>
	
<table>
<th>
<td>
	<div id="shomeleft">		
		<ul>
			<fieldset>
			<li>
			<a href="uedit.php"><img src= "<?php echo $_SESSION["img"];?>" height="60" width="60"><?php echo $_SESSION["uid"];?>
			<br>STUDENT<br>
			<?php echo $_SESSION["fn"];?>
			</a><br>
		<a href="login.php">Logout</a>
			</li>
			</fieldset><br>
		</ul>   			
	</div>
	</td>		
</th>
<th>
<td>
							

							<ul class="teachertab">
								<li><a href="#" class="tablinks" onclick="postbar(event, 'Post')">Post</a></li>
  								<li><a href="#" class="tablinks" onclick="postbar(event, 'Folders')">Folders</a></li>
  								<li><a href="#" class="tablinks" onclick="postbar(event, 'Schedule')">Schedule</a></li>
  								<li><a href="#" class="tablinks" onclick="postbar(event, 'Syllabus')">Syllabus</a></li>
  								<li><a href="#" class="tablinks" onclick="postbar(event, 'Studentscorecard')">Scorecard</a></li>
							</ul>
							<div id="Post" class="tabcontent">
 								<h3>Folders</h3>
								  <p>Paris is the capital of France.</p> 

							</div>

							<div id="Folders" class="tabcontent">
 								 <h3>Folders</h3>
								  <p>Paris is the capital of France.</p> 
							</div>

							<div id="Members" class="tabcontent">
 								 <h3>members</h3>
								  <p>Tokyo is the capital of Japan.</p>
							</div>
							<div id="Schedule" class="tabcontent">
 								 <h3>Schedule</h3>
								  <p>Tokyo is the capital of Japan.</p>
							</div>
							<div id="Syllabus" class="tabcontent">
 								 <h3>Syllabus</h3>
								  <p>Tokyo is the capital of Japan.</p>
							</div>
							<div id="Studentscorecard" class="tabcontent">
 								 <h3>Syllabus</h3>
								  <p>Tokyo is the capital of Japan.</p>
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