<? session_start(); ?>
<meta charset="utf-8">
<?
include_once("../header.php");
include_once("index.php");
if ($_GET['chan'] == 1) {
    if (!empty($_POST['old_pass']) && !empty($_POST['new_pass1']) && !empty($_POST['new_pass2'])) {
        connect();
        $s = mysql_query("select * from user_l where key_p='" . $_SESSION['password'] . "'");
        $r = mysql_fetch_array($s);
        if ($r['psw'] == $_POST['old_pass']) {
            $new_key = md5($r['login'] . "|" . $_POST['new_pass1']);
                mysql_query("update user_l set psw = '" . $_POST['new_pass1'] . "' , key_p ='" . $new_key . "' where login='" . $r['login'] . "'");
                $_SESSION['password'] = $new_key;
        } else  print "<script>alert(2)</script>";//�� ���������� ������ ������
    } else   print "<script>alert(3)</script>";//������ ����
}
?>