<?php 
	session_start();
	if(!isset($_SESSION["fn"]))
		header("location:home.php");
?>


<html>
<head>	
	<title>teacher home</title>	
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/thome.css"> 

	<script type="text/javascript" src="javascript/style.js">
function check(f)
{
	if(f.uto.value=="")	
	{
		document.getElementById("a").innerHTML="Please,Enter receiver";
		//alert("Please,Enter receiver name");
		f.tt.focus();
		return false;
		}
		else
		return true;
	}
	if(f.tt.value=="")	
	{
		document.getElementById("b").innerHTML="Please,Enter the message";
		//alert("Please,Enter The message");
		f.tt.focus();
		return false;
		}
		else
		return true;
	}
 
	</script>





<style>

body{
	background-image :url("ups/ks1.jpg");
	background-repeat: no-repeat;
	background-size: 1358px 700px;
         }
</style>
</head>

<body><div id="headername"><h1>
	<b><a href="home.php"><img src="images/prologo.png" height="25px" width="50px"></a></b> School Network</h1>		
	</div>
<table>
<th>
<td>
	<div id="thomeleft">		
	<ul>
		<fieldset>
		<li>
		<a href="update.php"><img src= "<?php echo $_SESSION["img"];?>" height="60" width="60"><?php echo $_SESSION["uid"];?><br>TEACHER<br><?php echo $_SESSION["fn"];?>
		</a><br>
		<a href="login.php">Logout</a>
		</li>
		</fieldset>
		<br>
	</ul>   			
	</div>
	</td>		
</th>
<th>
<td>
							
<!-- ---------------------------- TABS ------------------------------- -->
							<ul class="teachertab">
								<li><a href="#" class="tablinks" onclick="postbar(event, 'Post')">Post</a></li>
  								<li><a href="#" class="tablinks" onclick="postbar(event, 'Members')">Members</a></li>
  								<li><a href="#" class="tablinks" onclick="postbar(event, 'Schedule')">Schedule</a></li>
  								<li><a href="#" class="tablinks" onclick="postbar(event, 'Syllabus')">Syllabus</a></li>
  								<li><a href="#" class="tablinks" onclick="postbar(event, 'Studentscorecard')">Student Scorecard</a></li>
							</ul>

<!-- ----------- POST TAB --------- -->							
							<div id="Post" class="tabcontent">
							<form action="messageH.php" method="POST" onsubmit="return check(this)">
				
									<table>
									<tr><td>To</td><td>:</td><td><input type="text" name="uto"><span id='a' style="color: red;"></span></td></tr>
									<tr><td>Message</td><td>:</td><td><textarea rows="3" cols="30" name="tt" ></textarea><span id='b' style="color: red;"></span></td></tr>
									<tr><td></td><td></td><td><input type="submit" value="SEND" ></td></tr>
									</table>
							</form>
									<?php 
										$uto=$_POST['uto'];
										$tt=$_POST['tt'];
										
										$sql="INSERT INTO chatlog (id_from,id_to) values ($_SESSION[uid],$uto)";
										$result = ExecuteNonQuery($sql);
										$sql = "SELECT MAX(chat_id) as cid FROM chatlog";
										$row = mysql_fetch_array (ExecuteQuery ($sql));
										$cid = $row['cid'];
										
										
										$sql="INSERT INTO chat (id, chat_id, message) values ($_SESSION[uid],$cid,$tt)";
										
										$result == ExecuteNonQuery($sql);

										if ($result == 1)
											header("location:messaged.php");	
									
									?>

							</div>


<!-- ------------- MEMBER TAB ---------- -->
							<div id="Members" class="tabcontent">	
							<?php
									$sql="SELECT * FROM user WHERE type ='student' " ;
									$rows=ExecuteQuery($sql);
								if (mysql_num_rows($rows) > 0)
								{
									echo "<table cellpadding='2' cellspacing='2'>";
									while ($row = mysql_fetch_array($rows))
									{
									echo "<tr>";
									echo "<td valign='top'><img src='$row[uimg]' alt='' style='height:100px; width:100px;' />";
									echo "<td valign='top'><a href=message.php?id=$row[id] style='font-weight:bold;'>$row[fullname]</a> <br/>";
									echo ($row['gender'] == 1 ? "Male" : "Female")."<br/>";
									echo $row['country'];
									echo "<br/>";
									echo "<br/>";
									echo "<a href=message.php?id=$row[id] style='font-weight:bold;'><input type='button' value='Send Message'></a>";
									echo "</tr>";
									}
	                       			echo "</table>";
								}
								?>
								</div>

<!-- ------------ ACHEDULE TAB -------- -->									
							<div id="Schedule" class="tabcontent">
 								 <h3>Schedule</h3>
								  <p>Tokyo is the capital of Japan.</p>
							</div>

<!-- -------- SYLLABUS TAB ----------- -->		
							<div id="Syllabus" class="tabcontent">
 								 <h3>Syllabus</h3>
								  <p>Tokyo is the capital of Japan.</p>
							</div>

<!-- --------- SCORECARD TAB ------------- -->		
							<div id="Studentscorecard" class="tabcontent">
 								 <h3>Syllabus</h3>
								  <p>Tokyo is the capital of Japan.</p>
							</div>



								







</td>
</th>
<th>
	<div id="thomeright">		
						<ul>
							<li><fieldset>notifiactions</fieldset></li>
							<?php 
								require ("messages.php");
								?>
						</ul>   			
	</div>
	</th>
	</table>	
</body>
</html>