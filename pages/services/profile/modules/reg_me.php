<?php
function reg_me($l, $p, $arr, $ph, $email)
{
    connect();
    $key = md5($l . "|" . $p);
    $rq = mysql_query("INSERT INTO user_l(login, psw, key_p, cdate) values('" . $l . "','" . $p . "','" . $key . "', now())") or die("Invalid query: " . mysql_error());


    print $rq;
    if ($rq) {
        $a = explode(" ", $arr);
        $vval = "'" . $a[0] . "','" . $a[1] . "','" . $a[2] . "','" . $l . "'," . $ph . ",'" . $email . "', 2";
        if (mysql_query("INSERT INTO profile(f,i,o,login, number_phone, email, grp) values(" . $vval . ")")) {

            include_once('mail.php');
            print sendMail($email, $key);


            print "<meta http-equiv='refresh' content='0; url=/auth/?reg=01'>";
            //Аккаунт добавлен
        } else {
            mysql_query("delete from user_l where login = '" . $l . "'");
            print "<meta http-equiv='refresh' content='0; url=/auth/?err=01'>";
            //Ошибка добавления
        }
    } else {
        print "<meta http-equiv='refresh' content='0; url=/auth/?err=02'>";
        //Ошибка добавления

    }
}




//$sql = mysql_query('SELECT * FROM profile');
//
//while($row = mysql_fetch_array($sql)){
//    if($_GET['reg_login'] != $row['login']) {
//        $otvet = true;
//        $enter = true;
//        print "+";
//    } else {
//        $otvet = false;
//        $enter = false;
//        print "-";
//    }
//}
//print $otvet;
//print "<br />";
//
//if (!empty($reg_l))
//    if($enter == true){
//        print "Процесс добавление в БД:<br>";
//        print "Первая(User_l):";
//        if (mysql_query("INSERT INTO user_l(login,psw,key_p,cdate) values('" . $reg_l . "','" . $reg_p . "','".md5($reg_l."|".$reg_p)."', now())")) {
//            $arr = explode(" ", $_GET['reg_fio']);
//            if (mysql_query("INSERT INTO profile(f,i,o,login, number_phone, email, grp) values('" . $arr[0] . "','" . $arr[1] . "','" . $arr[2] . "','" . $reg_l . "'," . $_GET['reg_phone'] . ",'" . $_GET['reg_email'] . "', 2)")) {
//                print "акаунт добавлен";
//            }else {
//                print "Провал";
//                mysql_query("delete from user_l where login = '".$reg_l."'");
//            }
//        }
//        $sql = mysql_query("SELECT * FROM profile where login='" . $reg_l . "'");
//        $row = mysql_fetch_array($sql);
////                    print_r($row);
//        if (mb_strtolower($_GET['reg_login'], 'UTF-8') == $reg_l) {
//            $_SESSION['id'] = $row['id'];
//            $_SESSION['login'] = $reg_l;
//            $_SESSION['password'] = md5($reg_l . "|" . $reg_p);
//            $_SESSION['email'] = $_GET['reg_email'];
//            print "<meta http-equiv='refresh' content='0; url=/auth/?err=777'>";
//        }
//    }else{
//        print "<script>alert('Не корректные данные')</script>";
////                    print "<meta http-equiv='refresh' content='0; url=/auth/'>";
//    }