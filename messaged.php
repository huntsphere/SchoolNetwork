<?php 
session_start();
require("connection.php");
 if(!isset($_SESSION["fn"]))
		header("location:home.php");
?>
<h4>successfully sent message</h4>
