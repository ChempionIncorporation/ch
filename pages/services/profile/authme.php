<?session_start();?>
    <meta charset="utf-8">
<?
error_reporting();
include_once('../header.php');

print "1";
if (!empty($_GET['ent_login']) && !empty($_GET['ent_pass'])) {
    $ent_l = mb_strtolower($_GET['ent_login'], 'UTF-8');
    $ent_p = mb_strtolower($_GET['ent_pass'], 'UTF-8');
    include_once('modules/auth_me.php');
    auth_me($ent_l, $ent_p);
} else if (!empty($_GET['reg_login'])) {
    $reg_l = mb_strtolower($_GET['reg_login'], 'UTF-8');
    $reg_p = mb_strtolower($_GET['reg_pass'], 'UTF-8');

    include_once('modules/reg_me.php');
    reg_me($reg_l, $reg_p, $_GET['reg_fio'], $_GET['reg_phone'], $_GET['reg_email']);
}
//else print "<meta http-equiv='refresh' content='0; url=/auth/'>";
?>