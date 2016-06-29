<?session_start();?>
    <!--<meta charset="utf-8">-->
<?
$enter = false;

include_once('../header.php');
connect();

print_r($_GET);

if(!empty($_GET['ent_login']) && !empty($_GET['ent_pass'])){
    $sql = mysql_query("select * from user_l where login='".$_GET['ent_login']."' and psw='".$_GET['ent_pass']."'");
    $res = mysql_fetch_array($sql);
    if($res) {
        $sql = mysql_query("SELECT * FROM profile where login='" . $_GET['ent_login'] . "'");

        $row = mysql_fetch_array($sql);
//        print_r($row);
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
        print "<meta http-equiv='refresh' content='0; url=/auth/?err=1'>";
    }
    print "<br />";
} else if (!empty($_GET['reg_login'])) {
    print "<center>Регистрация:<br></center>";
        $sql = mysql_query('SELECT * FROM profile');
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

            if(!empty($_GET['reg_login']))
                if($enter == true){
                    print "Процесс добавление в БД:<br>";
                    print "Первая(User_l):";
                    if(mysql_query("INSERT INTO user_l values('".$_GET['reg_login']."','".$_GET['reg_pass']."','".md5($_GET['reg_login']."|".$_GET['reg_pass'])."')"))
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
                    if (mysql_query("INSERT INTO profile(f,i,o,login, number_phone, email, grp) values('" . $arr[0] . "','" . $arr[1] . "','" . $arr[2] . "','" . $_GET['reg_login'] . "'," . $_GET['reg_phone'] . ",'" . $_GET['reg_email'] . "', 2)"))
                        $otvet = "Успех";
                    else
                        $otvet = "Провал";
                    print $otvet."<br/>";
                    $sql = mysql_query("SELECT * FROM profile where login='" . $_GET['reg_login'] . "'");

                    $row = mysql_fetch_array($sql);
                    print_r($row);
                        if($_GET['reg_login'] == $row['login']){
                            print "Зарегестрировались!";
                            $_SESSION['id'] = $row['id'];
                            $_SESSION['login'] = $_GET['reg_login'];
                            $_SESSION['password']= md5($_GET['reg_login']."|".$_GET['reg_pass']);
                            print "<meta http-equiv='refresh' content='0; url=/id" . $_SESSION['id'] . "'>";
                        }
                }else{
                    print "<script>alert('Не корректные данные')</script>";
//                    print "<meta http-equiv='refresh' content='0; url=/auth/'>";
                }
}
//else print "<meta http-equiv='refresh' content='0; url=/auth/'>";
?>