<?session_start();?>
<meta charset="utf-8">
<?
$enter = false;
//ent_login=&ent_pass=&reg_login=admin&reg_pass=admin&
//reg_phone=%2B380933924200&reg_email=yamokasy2%40gmail.com
    mysql_connect("localhost","root","");
    mysql_select_db("champ00_db");

if(!empty($_GET['ent_login']) && !empty($_GET['ent_pass'])){
//    print "Вход:<br>";
    $sql = mysql_query("select * from user_l where login='".$_GET['ent_login']."' and psw='".$_GET['ent_pass']."'");
    $res = mysql_fetch_array($sql);
    if($res) {
        $sql = mysql_query("SELECT * FROM profile");

        while($row = mysql_fetch_array($sql)){
            if($_GET['ent_login'] == $row['login']){
//                print "Зарегестрировались!";
                $_SESSION['id'] = $row['id'];
                $_SESSION['login'] = $_GET['ent_login'];
                $_SESSION['password']= md5($_GET['ent_pass']);
                $_SESSION['name'] = getName($_SESSION['login']);

//                print "<meta http-equiv='refresh' content='0; url=/id".$_SESSION['id']."'>";
            }
        }
//        print "Данные получены!";

    }
//        print  "Данные НЕ получены.";
//    print "<br />";

}
else if(!empty($_GET['reg_login']) && !empty($_GET['reg_pass'])){
//print "Регистрация:<br>";

    $sql = mysql_query('SELECT * FROM profile');
//print "Процесс проверки наличия логина:";
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
//    print $otvet;
//print "<br />";
    if(!empty($_GET['reg_login']))
        if(!empty($_GET['reg_login']))
            if($enter == true){
//print "Процесс добавление в БД:<br>";
//                print "Первая:";
                if(mysql_query("INSERT INTO user_l values('".$_GET['reg_login']."','".$_GET['reg_pass']."','".md5($_GET['reg_pass'])."')"))
                    $otvet = true;
                else
                    $otvet = false;
//                print $otvet."<br/>";
//                print "Вторая: ";
                if(mysql_query("INSERT INTO profile(login, number_phone, email) values('".$_GET['reg_login']."',".$_GET['reg_phone'].",'".$_GET['reg_email']."')"))
                    $otvet = true;
                else
                    $otvet = false;
//                print $otvet."<br/>";

                $sql = mysql_query("SELECT * FROM profile");

                while($row = mysql_fetch_array($sql)){
                    if($_GET['reg_login'] == $row['login']){
//                        print "Зарегестрировались!";
                        $_SESSION['id'] = $row['id'];
                        $_SESSION['login'] = $_GET['reg_login'];
                        $_SESSION['password']= md5($_GET['reg_pass']);
                        $_SESSION['name'] = getName($_SESSION['login']);

                       print "<meta http-equiv='refresh' content='0; url=/id".$_SESSION['id']."'>";
                    }
                }

            }else{
                print "alert('Данные веденые не корректно!')";
                print "<meta http-equiv='refresh' content='0; url=/auth/'>";
            }
}


?>