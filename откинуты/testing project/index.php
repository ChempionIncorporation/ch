<?php 
mysql_connect("localhost","root","");
mysql_select_db("CHAMPION");
//mysql_query("insert into users(login,password,name,ip) values('tmsweane','swe1309ane','vladislav','192.168.0.109')");
//mysql_query("insert into ip(ip) values('192.168.0.101')");
$my_ip_adress = $_SERVER['REMOTE_ADDR'];
$select_ip = mysql_query("SELECT * FROM ip WHERE ip='$my_ip_adress'");
$connect_array = mysql_fetch_array($select_ip);
if(!empty($connect_array['ip'])){
?>
<!DOCTUPE html>
<html>
<head>
<title>CHAMPION</title>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="css/log.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="champ.js"></script>
</head>
<body>
<div id="logForm">
	<input id="log" type="input" placeholder="Логин" />
	<input id="password" type="password" placeholder="Пароль" />
	<input type="button" onclick="security();" value="ВХОД" />
</div>
<h1>
CHAMPION
<span>ver.1.0 personal</span>
</h1>
</body>
</html>
<?php 
}else echo "Error";
?>
