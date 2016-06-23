<?php
    function checkName($name,$key){
        include_once('../functions.php');
        connect();
        $z = mysql_query("select * from profile where login in (select login from user_l where key_p = '".$key."')");
        $re = mysql_fetch_array($z);
        return $re[$name];
    }


?>