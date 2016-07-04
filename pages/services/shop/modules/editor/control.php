<?php
include_once('../functions.php');
connect();
    function checkName($name,$key){
        $z = mysql_query("select * from profile where login in (select login from user_l where key_p = '".$key."')");
        $re = mysql_fetch_array($z);
        return $re[$name];
    }

function getCatalog($n)
{
    $z = mysql_query("select * from p_catalog");
    $t = [];
    $i = 0;
    while ($r = mysql_fetch_array($z)) {
        $t[$i++] = $r[$n];
    }
    return $t;
}
?>