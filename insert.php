<?php
	$connect = mysqli_connect("MySQL-8.2", "root", "", "twitter");
	$query = mysqli_query($connect, "SELECT * FROM follow");

	mysqli_query($connect, "INSERT INTO follow (name, channel, img) VALUES ('{$_GET["name"]}','{$_GET["channel"]}','{$_GET["img"]}' )");
	header("Location: https://twatter.local/index.php");
	exit();
?>