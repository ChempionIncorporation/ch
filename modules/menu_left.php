<div id="left_menu">
<?php
require_once($_SERVER['DOCUMENT_ROOT']."/modules/connect.php");
if(isset($_GET['under'])) {
	$under = $_GET['under'];
	print "<h3>ПОДРАЗДЕЛЫ</h3>\n<ul>";
}else{
	print "<h3>МЕНЮ</h3>\n<ul>";
	$under = '';
}
	$s = mysql_query("SELECT * FROM menu WHERE under_category='".$under."'");
	$r = mysql_fetch_array($s);
	if($r['name'] == "") {
		$sql = mysql_query("SELECT * FROM menu WHERE category='" . $_GET['cat'] . "' and under_category=''");
	}else {
		$sql = mysql_query("SELECT * FROM menu WHERE under_category='" . $under . "'");
	}

//print "<script>alert('".$_GET['id']."');</script>";
while($arr = mysql_fetch_array($sql)){
	switch($_GET['id']) {
		case '1':
			if ($arr['category'] == $_GET['cat']) {
				print "<li hred='#' style='background: " . $b[$id] . ";'><a href='" . $arr['link'] . "'>" . $arr['name'] . "</a></li>";
			}
			break;
		case '2':
			$v = substr($arr['link'], strrpos($arr['link'], '/') + 1, strrpos($arr['link'], '/'));
			//print "<script>alert('".$v."');</script>";
			if (!empty($v)) {
			$s1 = mysql_query("SELECT * FROM text_U_1253 WHERE url='" . $v . "'");
				//$r1 = mysql_fetch_array($s1);
				while ($tw = mysql_fetch_array($s1)) {
					if (isset($tw['text'])) {
						if ($arr['category'] == $_GET['cat']) {
							print "<li hred='#' style='background: " . $b[$id] . ";'><a href='" . $arr['link'] . "'>" . $arr['name'] . "</a></li>";
						}
					}
				}
			}else{
				if ($arr['category'] == $_GET['cat']) {
					print "<li hred='#' style='background: " . $b[$id] . ";'><a href='" . $arr['link'] . "'>" . $arr['name'] . "</a></li>";
				}
			}
		break;
		case '3':
			$v = substr($arr['link'], strrpos($arr['link'],'/')+1, strrpos($arr['link'],'/'));
			//print "<script>alert('".$v."');</script>";

			$s1 = mysql_query("SELECT * FROM text_U_1253 WHERE url='".$v."'");
			//$r1 = mysql_fetch_array($s1);
			while($tw = mysql_fetch_array($s1)) {
				if (isset($tw['text'])){
					if ($arr['category'] == $_GET['cat']) {
						print "<li hred='#' style='background: " . $b[$id] . ";'><a href='" . $arr['link'] . "'>" . $arr['name'] . "</a></li>";
					}
				}
			}
		break;
	}




/*
	if($arr->category==$_GET['cat']){
		//if($arr->link==$a_fin)
			print "<li hred='#' style='background: ".$b[$id].";'><a href='".$arr->link."'>".$arr->name."</a></li>";
		//else
		//	print "<li style='background: ".$b[$id].";'><a href='".$arr->link."'>".$arr->name."</a></li>";
	}
*/
}

/* УБРАЛ
if(isset($_GET['under'])){
$sql = mysql_query("SELECT * FROM menu WHERE under_category='".$under."' ORDER BY name");
while($arr = mysql_fetch_object($sql)){
	if($arr->category==$category){
		if($arr->link==$a_fin)
			print "<li hred='#' style='background: ".$b[$id].";'><a href='".$arr->link."'>".$arr->name."</a></li>";
		else
			print "<li style='background: ".$b[$id].";'><a href='".$arr->link."'>".$arr->name."</a></li>";
	}
}
}else{
	$sql = mysql_query("SELECT * FROM menu WHERE under_category='' ORDER BY name");
	while($arr = mysql_fetch_object($sql)){
		if($arr->category==$category){
			if($arr->link==$a_fin)
				print "<li  active_link' style='background: ".$b[$id].";'><a href='".$arr->link."'>".$arr->name."</a></li>";
			else
				print "
					<li style='background: ".$b[$id].";'><a href='".$arr->link."'>".$arr->name."</a></li>";
		}
	}
}

*/
?>
	</ul>
</div>