<?
if($_SESSION['gleb'] == null || $_SESSION['login'] == "" || $_SESSION['login'] == "g"){
        $_SESSION['gleb']       = "";
        $_SESSION['login']      = "g";
        $_SESSION['name']       = "";
        $_SESSION['address']    = "";
        $_SESSION['np']         = "";
        $_SESSION['city']       = "";
        $_SESSION['cart'][255]  = "";
}
function onSession($o,$n){
    $_SESSION['gleb'] = $o;
    $_SESSION['login'] = $n;
    return "+";
}
function connect()
{
    $conn = mysql_connect("localhost","root","") or die(mysql_error());
    $tbl = mysql_select_db("champ00_db", $conn) or die(mysql_error());
    return $tbl;
}
function getAccount($login, $psw)
{
    require_once($_SERVER['DOCUMENT_ROOT']."/modules/connect.php");
    $sql = "SELECT key_p,login FROM user_l WHERE login='$login' AND psw='".$psw."'";
    $result = mysql_query($sql);
    $r = mysql_fetch_array($result);
    if($r == true) {
        onSession($r['key_p'], $r['login']);
    }

    return $r['key_p']."&i=".$r['login'];
}
function getName($login)
{
    connect();
    $sql = "SELECT name FROM profile where login='".$login."'";
    $result = mysql_query($sql);
    $r = mysql_fetch_array($result);
    $_SESSION['name'] = $r['name'];
    return $r['name'];
}
function getAddress($login)
{
    connect();
    $sql = "SELECT address FROM profile where login='".$login."'";
    $result = mysql_query($sql);
    $r = mysql_fetch_array($result);
    $_SESSION['address'] = $r['address'];
    return $r['address'];
}
function getPhone($login)
{
    connect();
    $sql = "SELECT number_phone FROM profile where login='".$login."'";
    $result = mysql_query($sql);
    $r = mysql_fetch_array($result);
    $_SESSION['np'] = $r['number_phone'];
    return $r['number_phone'];
}
function getCity($login)
{
    connect();
    $sql = "SELECT city FROM profile where login='".$login."'";
    $result = mysql_query($sql);
    $r = mysql_fetch_array($result);
    $_SESSION['city'] = $r['city'];
    return $r['city'];
}
//
function SecLoginGetZak($l,$key){
    include_once('security.php');
    return checkLogin($key,$l);
}
//
function checkuser($key){
    connect();
    $sql = mysql_query("select * from user_l where key_p='".$key."'");
    $res = mysql_fetch_array($sql);

    $ssql = mysql_query("select * from profile where login = '".$res['login']."'");
    $r = mysql_fetch_array($ssql);
    $ident = 0;
    if(empty($r['name'])){
        $ident += 10;

    }
//    print "<script>alert('".$ident."')</script>";
    return $r['name'];
}
//
?>