<?

$conn = mysql_connect("champ00.mysql.ukraine.com.ua", "champ00_db", "2UWXvGb2") or die(mysql_error());
$tbl = mysql_select_db("champ00_db", $conn) or die(mysql_error());
mysql_query("SET NAMES utf8");
?>