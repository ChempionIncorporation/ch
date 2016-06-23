<?php
if($_POST['username_U'] != '' and $_POST['password_U'] != ''){
	require_once($_SERVER['DOCUMENT_ROOT']."/modules/connect.php");
	require_once($_SERVER['DOCUMENT_ROOT']."/modules/function.php");
	$user_U_name = $_POST['username_U'];
	$pass_U_word = check($_POST['password_U']);
	$usr_selected = mysql_query("SELECT * FROM users_U_1251 WHERE log_U_00='".$user_U_name."'");
	$usr_object = mysql_fetch_object($usr_selected);
	if($usr_object->password_U_7 == $pass_U_word){
		setcookie('username_U',$user_U_name,time()+3600);
		//echo @$_COOKIE['username_U'];
		header("Location: /modules/show_price.php");
		//mysql_query("INSERT INTO price_U_1252(name_U_2,tirazh_U_3,days_U_4,price_U_5,type_U_6,number_U_7) VALUES('Визитки','1000,2000,3000,4000,5000,10000,15000,20000,25000','1,2,3','107,98,85','Мелованая бумага 250 гр/м2',1)") or die(mysql_error());
	}else{
		header("Location: /");
	}
}else{
	header("Location: /");
}
//mysql_query("INSERT INTO users_U_1251(name_U_1,surname_U_2,email_U_3,organization_U_4,city_U_5,mobile_U_6,password_U_7) VALUES('Владислав','Таласимов','tmsweane@gmail.com','Разработка сайтов','г.Одесса','+38 093 257 22 84','".$final_md5."')") or die(mysql_error());
?>