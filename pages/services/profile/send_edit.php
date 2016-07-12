<?php
include('../header.php');
    connect();
?>
    <meta charset="utf-8">
<?
switch($_POST['razdel'])
{
    case "alc":
            $s = mysql_query("update zayavka set status = " . $_POST['m'] . " where id = " . $_POST['n']);
            if ($s) {
                $ss = mysql_query("select * from zayavka where id = " . $_POST['n']);
                $r = mysql_fetch_array($ss);

                print "<div class='o'>" . $r['status'] . "</div>";
            } else {
                print "<div class='o'>Запрос - fail!" . $_POST['m'] . " ~ " . $_POST['n'] . "</div>";
            }
    break;
    case 'Edit_Profile':
        $f =  $_POST['f'];
        $i =  $_POST['i'];
        $o =  $_POST['o'];
        $np =  $_POST['np'];
        $c =  $_POST['c'];
        $a =  $_POST['a'];
        $m =  $_POST['m'];
        $org =  $_POST['org'];
$all = "";
$ch = "";


        $s = mysql_query("select login from user_l where key_p='" . $_SESSION['password'] . "'");
        $r = mysql_fetch_array($s);
        $s1 = mysql_query("select id,f,i,o,number_phone,city,address,email,org,login from profile where login ='".$r['login']."'");
        $r1 = mysql_fetch_array($s1);


        if(!empty($f))
        {
            $all = "f = '" . $f . "'";
        }else{
            $all = "f = '".$r1['f']."'";
        }
        if(!empty($i))
        {
            $all = $all . ", i = '" . $i . "'";
        }else{
            $all = $all . ", i = '".$r1['i']."'";
        }
        if(!empty($o))
        {
            $all = $all . ", o = '" . $o . "' ";
        }else{
            $all = $all . ", o = '".$r1['o']."'";
        }
        if(!empty($np))
        {
            $all = $all.", number_phone = '".$np."'";
        }else{
            $all = $all . ", number_phone = '".$r1['number_phone']."'";
        }
        if(!empty($c)){
            $all = $all.", city = '".$c."'";
        }else{
            $all = $all . ", city = '".$r1['city']."'";
        }
        if(!empty($a)){
            $all = $all.", address = '".$a."'";
        }else{
            $all = $all . ", address = '".$r1['address']."'";
        }
        if(!empty($m)){
            $all = $all.", email = '".$m."'";
        }else{
            $all = $all . ", email = '".$r1['email']."'";
        }
        if(!empty($org)){
            $all = $all.", org = '".$org."'";
        }else{
            $all = $all . ", org = '".$r1['org']."'";
        }
        $ss = mysql_query(
            "update profile set "
             .$all.
            " where login = '".$r1['login']."'");
        if($ss){
            $result = "Ответ - Положительный";

            $s2 = mysql_query("select id,f,i,o,number_phone,city,address,email,org,login from profile where login ='".$r['login']."'");
            $r2 = mysql_fetch_array($s2);

            $_SESSION['f'] = $_COOKIE['f'] = $r2['f'];
            $_SESSION['i'] = $_COOKIE['i'] = $r2['i'];
            $_SESSION['o'] = $_COOKIE['o'] = $r2['o'];
            $_SESSION['name'] = $_COOKIE['name'] = $r2['name'];
            $_SESSION['grp'] = $_COOKIE['grp'] = $r2['grp'];
            $_SESSION['id'] = $_COOKIE['id'] = $r2['id'];
        }else{
            $result = "Ответ - Отрицательный";
        }
?>
        <DIV class='o'>
            <?=$r1['id']?>
        </DIV>
<?
        break;
}


?>
