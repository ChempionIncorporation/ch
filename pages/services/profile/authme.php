<?session_start();?>
<meta charset="utf-8">
<?
$enter = false;
//ent_login=&ent_pass=&reg_login=admin&reg_pass=admin&
//reg_phone=%2B380933924200&reg_email=yamokasy2%40gmail.com

include_once('../header.php');
connect();


if(!empty($_GET['ent_login']) && !empty($_GET['ent_pass'])){
    $sql = mysql_query("select * from user_l where login='".$_GET['ent_login']."' and psw='".$_GET['ent_pass']."'");
    $res = mysql_fetch_array($sql);
    if($res) {
        $sql = mysql_query("SELECT * FROM profile where login='" . $_GET['ent_login'] . "'");

        $row = mysql_fetch_array($sql);
        print_r($row);
        $_SESSION['id'] = $row['id'];
        $_SESSION['login'] = $_GET['ent_login'];
        $_SESSION['f'] = $row['f'];
        $_SESSION['i'] = $row['i'];
        $_SESSION['o'] = $row['o'];
        $_SESSION['password'] = md5($_GET['ent_login'] . "|" . $_GET['ent_pass']);

        print "<meta http-equiv='refresh' content='0; url=/id" . $_SESSION['id'] . "'>";

    }
    else
    {
        print "<script>alert('Неверные данные')</script>";
        print "<meta http-equiv='refresh' content='0; url=/auth/'>";
    }
    print "<br />";
}
else if(!empty($_GET['reg_login']) && !empty($_GET['reg_pass']) && !empty($_GET['ins_pass'])){
    print "Регистрация:<br>";
        $sql = mysql_query('SELECT * FROM profile');
        print "Процесс проверки наличия логина:";
        while($row = mysql_fetch_array($sql)){
            if($_GET['reg_login'] != $row['login']) {
                $otvet = true;
                $enter = true;
            }else {
                $otvet = false;
                $enter = false;
                break;
            }
        }
        print $otvet;
        print "<br />";
    if($_GET['reg_pass'] == $_GET['ins_pass'])
    {
        if(!empty($_GET['reg_login']))
            if(!empty($_GET['reg_login']))
                if($enter == true){
                    print "Процесс добавление в БД:<br>";
                    print "Первая(User_l):";
                    if(mysql_query("INSERT INTO user_l values('".$_GET['reg_login']."','".$_GET['reg_pass']."','".md5($_GET['reg_login']."|".$_GET['reg_pass'])."')"))
                    {
                        $otvet = "Успех";
                        print_r($_GET);
                    }
                    else
                    {
                        print_r($_GET);
                        print md5($_GET['reg_login']."|".$_GET['reg_pass']);
                        $otvet = "<a href='/auth/'>Провал попробовать еще раз</a>>";
                    }
                    print $otvet."<br/>";
                    print "Вторая(Profile): ";


                    $arr = explode(" ", $_GET['reg_fio']);
                    if (mysql_query("INSERT INTO profile(f,i,o,login, number_phone, email, grp) values('" . $arr[0] . "','" . $arr[1] . "','" . $arr[2] . "','" . $_GET['reg_login'] . "'," . $_GET['reg_phone'] . ",'" . $_GET['reg_email'] . "', 2)"))
                        $otvet = "Успех";
                    else
                        $otvet = "Провал";
                    print $otvet."<br/>";
                    $sql = mysql_query("SELECT * FROM profile");

                    while($row = mysql_fetch_array($sql)){
                        if($_GET['reg_login'] == $row['login']){
                            print "Зарегестрировались!";
                            $_SESSION['id'] = $row['id'];
                            $_SESSION['login'] = $_GET['reg_login'];
                            $_SESSION['password']= md5($_GET['reg_login']."|".$_GET['reg_pass']);
                          //  print $_SESSION['password'];
                            print "<meta http-equiv='refresh' content='0; url=/id" . $_SESSION['id'] . "'>";
                        }
                    }
                }else{
                    print "alert('Данные веденые не корректно!')";
                    print "<meta http-equiv='refresh' content='0; url=/auth/'>";
                }
    }
    else
    {
        print "<script>alert('Пароли не совпадают')</script>";
        print "<meta http-equiv='refresh' content='0; url=/auth/'>";
    }
}
else print "<meta http-equiv='refresh' content='0; url=/auth/'>";
?>