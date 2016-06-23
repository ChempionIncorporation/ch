<?php 
session_start();
/*echo $_GET['login'];
echo $_GET['password'];*/
mysql_connect("localhost","root","");
mysql_select_db("CHAMPION");
$my_ip_adress = $_SERVER['REMOTE_ADDR'];
if(!isset($_SESSION["session_username"])){
}
//require_once(dirname(__DIR__)."../../connect/database.php");
if(!empty($_GET['login']) && !empty($_GET['password'])){
$login=$_GET['login'];
$password=$_GET['password'];
$result = mysql_query("SELECT id FROM users WHERE login='$login' AND password='$password'");
$myrow = mysql_fetch_array($result);
if (!empty($myrow['id'])){
$_SESSION['session_login']=$username;
$_SESSION['user_id']=$myrow['id'];
//header("location: ../");
}
else{
echo "Error. Where are you?";
}						 
} 

//mysql_query("insert into users(login,password,name,ip) values('tmsweane','swe1309ane','vladislav','192.168.0.109')");
//mysql_query("insert into ip(ip) values('192.168.0.101')");

/*$select_name = mysql_query("SELECT * FROM users WHERE ip='$my_ip_adress'");
$connect_array_name = mysql_fetch_array($select_name);
boolean $worked = true;*/


?>