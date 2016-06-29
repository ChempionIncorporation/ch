<?session_start();?>
    <meta charset="utf-8">
<?
$enter = false;

include_once('../header.php');
connect();

print_r($_GET);

$ent_l = mb_strtolower($_GET['ent_login'], 'UTF-8');
$ent_p = mb_strtolower($_GET['ent_pass'], 'UTF-8');

print "<script>alert('" . $ent_l . "- " . $ent_p . "')</script>";

if (!empty($ent_l) && !empty($ent_p)) {
    $sql = mysql_query("select * from user_l where login='" . $ent_l . "' and psw='" . $ent_p . "'");
    $res = mysql_fetch_array($sql);
    if($res) {
        $sql = mysql_query("SELECT * FROM profile where login='" . $res['login'] . "'");

        $row = mysql_fetch_array($sql);
//        print_r($row);
        $_SESSION['id'] = $row['id'];
        $_SESSION['login'] = $ent_l;
        $_SESSION['f'] = $row['f'];
        $_SESSION['i'] = $row['i'];
        $_SESSION['o'] = $row['o'];
        $_SESSION['password'] = md5($ent_l . "|" . $ent_p);

        print "<meta http-equiv='refresh' content='0; url=/id" . $_SESSION['id'] . "'>";

    }
    else
    {
        print "<script>alert('Неверные данные')</script>";
        print "<meta http-equiv='refresh' content='0; url=/auth/?err=1'>";
    }
    print "<br />";
} else if (!empty($_GET['reg_login'])) {
    print "<center>Регистрация:<br></center>";
        $sql = mysql_query('SELECT * FROM profile');

    $reg_l = mb_strtolower($_GET['reg_login'], 'UTF-8');
    $reg_p = mb_strtolower($_GET['reg_pass'], 'UTF-8');


        while($row = mysql_fetch_array($sql)){
            if($_GET['reg_login'] != $row['login']) {
                $otvet = true;
                $enter = true;
                print "+";
            } else {
                $otvet = false;
                $enter = false;
                print "-";
            }
        }
        print $otvet;
        print "<br />";

    if (!empty($reg_l))
                if($enter == true){
                    print "Процесс добавление в БД:<br>";
                    print "Первая(User_l):";
                    if (mysql_query("INSERT INTO user_l values('" . $reg_l . "','" . $reg_p . "','" . md5($reg_l . "|" . $reg_p) . "')"))
                    {
                        $otvet = "Успех";
//                        print_r($_GET);
                    }
                    else
                    {
                        print_r($_GET);
                        print md5($_GET['reg_login']."|".$_GET['reg_pass']);
                        $otvet = "<a href='/auth/?error=2'>Провал попробовать еще раз</a>";
                    }
                    print $otvet."<br/>";
                    print "Вторая(Profile): ";


                    $arr = explode(" ", $_GET['reg_fio']);
                    if (mysql_query("INSERT INTO profile(f,i,o,login, number_phone, email, grp) values('" . $arr[0] . "','" . $arr[1] . "','" . $arr[2] . "','" . $reg_l . "'," . $_GET['reg_phone'] . ",'" . $_GET['reg_email'] . "', 2)"))
                        $otvet = "Успех";
                    else
                        $otvet = "Провал";
                    print $otvet."<br/>";
                    $sql = mysql_query("SELECT * FROM profile where login='" . $reg_l . "'");

                    $row = mysql_fetch_array($sql);
//                    print_r($row);
                    if (mb_strtolower($_GET['reg_login'], 'UTF-8') == $reg_l) {
                            print "Зарегестрировались!";
                            $_SESSION['id'] = $row['id'];
                        $_SESSION['login'] = $reg_l;
                        $_SESSION['password'] = md5($reg_l . "|" . $reg_p);
                            print "<meta http-equiv='refresh' content='0; url=/id" . $_SESSION['id'] . "'>";
                        }
                }else{
                    print "<script>alert('Не корректные данные')</script>";
//                    print "<meta http-equiv='refresh' content='0; url=/auth/'>";
                }
}
//else print "<meta http-equiv='refresh' content='0; url=/auth/'>";
?>