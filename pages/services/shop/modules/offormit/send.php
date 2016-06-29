<?session_start();?>
<meta charset="utf-8">
<?
function getVal($key){
    $sql = mysql_query("select * from user_l where key_p = '".$key."'");
    $row = mysql_fetch_array($sql);
    return getInDB($row['login']);

}
function getInDB($profile){
    $s = mysql_query("Select * from profile where login = '".$profile."'");
    return mysql_fetch_array($s);
}

include_once('../../../header.php');
connect();
$o = getVal($_SESSION['password']);

//print_r($o);
//print "<br>";
//print $o['address']. //Adress
//    $o['f'] . " " . $o['i'] . " " . $o['o'] . " P:" . $o['number_phone'];//author

//print "insert into zayavka(status,address,pauthor,key_p,full_my_text, cdate) values( 1, '" . $o['address'] . "','" . $o['f'] . " " . $o['i'] . " " . $o['o'] . " P:" . $o['number_phone'] . "', '" . $_SESSION['password'] . "', '" . $_SESSION['namew'] . "', now())";


if (mysql_query("insert into zayavka(status,address,pauthor,key_p,full_my_text, cdate) values( 1, '" . $o['address'] . "','" . $o['f'] . " " . $o['i'] . " " . $o['o'] . " P:" . $o['number_phone'] . "', '" . $_SESSION['password'] . "', '" . $_SESSION['namew'] . "', now())"))
{

    print "Заказ успешно оформлен.<br> Вы можете перейти в <a href='/id" . $_SESSION['id'] . "/list/'>\"Список заказов\"(Клик)</a> ";
//    print "<meta http-equiv='refresh' content='0; url=/id" . $o['id'] . "'>";
}else{
    print "Извините, произошла ошибка.<br> Возможно у вас уже был заказ такойже в продь до количества. По этой причине мы не можем водтвердить.<br>";
    print "<a href=''>Перейти в корзину (КЛИК)</a>";
//    print "<meta http-equiv='refresh' content='0; url=/id" . $o['id'] . "'>";
}


?>