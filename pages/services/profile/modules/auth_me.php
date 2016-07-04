<?php
function auth_me($l, $p)
{
    connect();
    $r = mysql_fetch_array(mysql_query("select * from user_l where login='" . $l . "' and psw='" . $p . "'"));
    if ($r) {
        print "<script>console.log('" . $r['login'] . " - 1')</script>";
        $sql = mysql_query("SELECT * FROM profile where login='" . $r['login'] . "'");
        $row = mysql_fetch_array($sql);

        if ($r['successful'] != 0) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['login'] = $l;
            $_SESSION['password'] = md5($l . "|" . $p);
            $_SESSION['f'] = $row['f'];
            $_SESSION['i'] = $row['i'];
            $_SESSION['o'] = $row['o'];
            $_SESSION['group'] = $row['grp'];

            print "<script>console.log('successful - 1')</script>";
            ?>
            <meta http-equiv='refresh' content='0; url=/id<? print $row['id'] ?>'/><?
        } else {
            print "<script>console.log('successful - 0')</script>";
            print "<meta http-equiv='refresh' content='0; url=/auth/err=0'>";
            //Ошибка подтверждения по почте
        }
    } else {
        print "<script>console.log('user_l - fail')</script>";
        print "<meta http-equiv='refresh' content='0; url=/auth/?err=1'>";
        //Ошибка В системе нет логина или пароля
    }
}
