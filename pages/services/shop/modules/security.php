<?php
function checkLogin($login, $key){
    $sql = "SELECT key_p,login from user_l where login='".$login."'";
    $res = mysql_query($sql);
    $r = mysql_fetch_array($res);

    if($r['key_p'] == $key)
        return getZak($r['login']);
    else {
        print "<script>alert('Простите, но у вас нет доступа. Позвоните менеджеру: \\n\\t 0937847105 \\n Ошибка 0х301');</script>";
            print "<meta http-equiv='refresh' content='0; url=" . $_SERVER['document_root'] . "/pages/services/auth.php'>";
        return "NaN";
    }
}
function getZak($out){
    $sql = "select * from zayavka where login_p='".$out."'";
    $result = mysql_query($sql);
    //$r = mysql_fetch_array($result);
    $i=0;
    while($r = mysql_fetch_array($result)){
        $i++;
        $_SESSION['cart'][$i] = $r['id'];
        $_SESSION['cart'][$i+1] = $r['text'];
        $_SESSION['cart'][$i+2] = $r['status'];
    }
   // print "<script>alert('".$_SESSION['gleb']."');</script>";

    return $i;
}