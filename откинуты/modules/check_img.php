<?php
echo "asdsad";
echo $_FILES['good']['name'];
echo $_FILES['good']['tmp_name'];
//echo $_GET['id']['good']['name'];
//print $_GET['id'];

/*
	$uploaddir = 'images/';
		//echo $_FILES['image_1']['name'];
		// mysql_query("INSERT INTO profile(coc) VALUES('asd')");
	$img_link="";
	for($i=1;$i<9;$i++){
	if(!empty($_FILES['image_'.$i]['name'])){
	$name_file = stripos($_FILES['image_'.$i]['name'], '.');
	$name_file = substr($_FILES['image_'.$i]['name'], $name_file);
	$name_file_fin = $i."_".date("hisy").$name_file;
	$uploadfile = $uploaddir.basename($name_file_fin);
	copy($_FILES['image_'.$i]['tmp_name'], $uploadfile);
		//mysql_query("INSERT INTO profile(coc) VALUES('".$i."_".$last."_".$_FILES['image_'.$i]['name']."')") or die(mysql_error());
	//echo "Accept Upload<br />";
	}}
*/
?>