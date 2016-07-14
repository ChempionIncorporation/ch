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

    case 'Search':


        if(!empty($_POST['f']) || !empty($_POST['i']) || !empty($_POST['o']) || !empty($_POST['id']) || !empty($_POST['s'])) {
            if (!empty($_POST['id']) || !isset($_POST['id']))
                $id = " and zayavka.id = " . $_POST['id'];
            else
                $id = "";
            if (!empty($_POST['f']) || !isset($_POST['f']))
                $f = " and f = '" . $_POST['f'] . "'";
            else
                $f = "";
            if (!empty($_POST['i']) || !isset($_POST['i']))
                $i = " and i = '" . $_POST['i'] . "'";
            else
                $i = "";
            if (!empty($_POST['o']) || !isset($_POST['o']))
                $o = " and o = '" . $_POST['o'] . "'";
            else
                $o = "";
            if (!empty($_POST['s']) || !isset($_POST['s']))
                $s = " and status = " . $_POST['s'];
            else
                $s = "";

        }

            $sql = "select zayavka.id from user_l,profile,zayavka
                    WHERE profile.login = user_l.login AND user_l.key_p = zayavka.key_p " . $f . $i . $o . $id. $s;
            $s0 = mysql_query($sql);

            $l = "";
            while ($r0 = mysql_fetch_array($s0)) {
                $l = $r0[0] . "+" . $l;
            }
            ?><div class='o'><?= $l ?></div><?
    break;
    case 'Edit_modal_col':
        $s1 = mysql_query("select full_text from zayavka where id = ".$_POST['id']);
        $r = mysql_fetch_array($s1);
//$_POST['id'].",".$_POST['i'].",".$_POST['n'].",".$_POST['col']

        $a = explode("+",$r[0]);
        for($i=0; $i<count($a);$i++){
            $a1 = explode("†", $a[$i]);
                $p = "+".$p;

                for($j=0; $j<=count($a1)-1;$j++) {
                    $a2 = explode("|", $a1[$j]);
                    if($i == $_POST['i'] && $j == $_POST['j']) {
//                            $p = $a2[4] . "-" . $i . "," . $j . "~" . $_POST['id'] . "," . $_POST['i'] . "," . $_POST['j'] . "," . $_POST['col'];
                            $p =  "†".$a2[0]."|".$a2[1]."|".$a2[2]."|".$a2[3]."|".$_POST['col'].$p;
                    }else {
                        $p =   "†".$a2[0] . "|" . $a2[1] . "|" . $a2[2] . "|" . $a2[3] . "|" . $a2[4] .$p;
                    }
                }
        }
//        $p = substr($p, 0, strlen($p)-2);


        ?><div class='o'><?= $p ?></div><?
//        ?><!--<div class='o'>--><?//= $f. "~". count($a1)."-".$_POST['id']."-".$_POST['i']."-".$_POST['j'] ?><!--</div>--><?//




    break;
}


?>
