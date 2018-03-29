
<script type="text/javascript">
	document.getElementById("amessage").className="active";
</script>

<?php
	//first fetch whom u have send chats
	
	$sql = "SELECT chat_id, id_from, id_to, fullname FROM Chatlog, user WHERE chatlog.id_to=user.id AND chatlog.id_from=$_SESSION[uid] ";
	
	$rows = ExecuteQuery ($sql);
	
	while ($row = mysql_fetch_array($rows))
	{
		echo "<a href='readmsg.php?id=$row[chat_id]'>$row[fullname]</a>";
		
		$chatrow = mysql_fetch_array (ExecuteQuery ("SELECT * FROM chat WHERE chat_id=$row[chat_id] ORDER BY cdatetime DESC"));
		
		if ($chatrow)
		{
			echo "<br/><br/> $chatrow[message]<br/>";
			echo "$chatrow[cdatetime]";
		}
		
				echo "<hr style='border-top:1px solid #c3c3c3; border-bottom:1px solid white'/>";
	}
	
	
	// now fetch those that have sent chats to you
	
	$sql = "SELECT chat_id, id_from, id_to, fullname FROM Chatlog, user WHERE chatlog.id_from=user.id AND chatlog.id_to=$_SESSION[uid]";
	
	$rows = ExecuteQuery ($sql);
	
	while ($row = mysql_fetch_array($rows))
	{
		echo "<a href='readmsg.php?id=$row[chat_id]'>$row[fullname]</a>";
	
		
		$chatrow = mysql_fetch_array (ExecuteQuery ("SELECT * FROM chat WHERE chat_id=$row[chat_id] ORDER BY cdatetime DESC"));
		
		if ($chatrow)
		{
			echo "<br/><br/> $chatrow[message]<br/>";
			echo "$chatrow[cdatetime]";
		}
		
				echo "<hr style='border-top:1px solid #c3c3c3; border-bottom:1px solid white'/>";
	}
?>