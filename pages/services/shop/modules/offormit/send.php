<?session_start();?>
<meta charset="utf-8">
<?
print "Hello World <br>".$_SESSION['password'];
function getVal($key){
    $sql = mysql_query("select * from user_l where key_p = '".$key."'");
    $row = mysql_fetch_array($sql);
    return getInDB($row['login']);

}
function getInDB($profile){
    $s = mysql_query("Select * from profile where login = '".$profile."'");
    return mysql_fetch_array($s);
}
include_once('../functions.php');
connect();
$o = getVal($_SESSION['password']);

print_r($o);
print "<br>";
print $o['address']. //Adress
    $o['name']." P:".$o['number_phone'];//author

print "<br>";

//print $_SESSION['namew']."<br>"; // full

//$o = explode("+", $_SESSION['namew']);
//foreach($o as $qual => $value):
//    $l = explode("|", $value);
//        foreach($l as $q => $v):
//            $stuc_name = $v.$struc_name;
//        print $v;
////            $stuc_sub_name = $l[2]."|".$struc_sub_name;
////            $struc_price = $l[3]."|".$struc_price;
////            $struc_col = $l[4]."|".$struc_col;
//        endforeach;
//
////    print "<br>".$v."</br>";
//endforeach;

print "insert into zayavka(status,address,pname,key_athor,full_my_text, cdate) values( 1, '".$o['address']."','".$o['name']." P:".$o['number_phone']."', '".$_SESSION['password']."', '".$_SESSION['namew']."', now());";
if(mysql_query("insert into zayavka(status,address,pname,key_athor,full_my_text, cdate) values( 1, '".$o['address']."','".$o['name']." P:".$o['number_phone']."', '".$_SESSION['password']."', '".$_SESSION['namew']."', now());"))
{
    print "<script>alert('OK!')</script>";
    print "<meta http-equiv='refresh' content='5; url=/id".$o['id']."'>";
}else{
    print "<script>alert('FAIL!')</script>";
}


?>