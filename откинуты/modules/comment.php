<?php
echo $_POST['Name']."<br />";
echo $_POST['ans']."<br />";
echo $_POST['Message']."<br />";

require_once($_SERVER['DOCUMENT_ROOT']."/modules/connect.php");

mysql_query("INSERT INTO reviews_U_1254(name,reviews,status,date) VALUES('".$_POST['Name']."','".$_POST['Message']."',".$_POST['ans'].",now())") or die(mysql_error());
?>