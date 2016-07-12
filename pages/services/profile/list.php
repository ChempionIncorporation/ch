<?
include_once("../header.php");
connect();
$so = mysql_query("select * from zayavka where key_p = '" . $_SESSION['password'] . "'");
$i = 0;
while ($ro = mysql_fetch_assoc($so)) {
    $id[$i] = $ro['id'];
    $date[$i] = $ro['cdate'];
    $fmt[$i] = $ro['full_text'];
    $i++;
}

?>
<div class="container" style="margin-top:100px;">
    <div class="row">
        <div class="col-xs-3" style=" ">
            <div class="box">
                <?include_once("modules/left-bar.php");?>
            </div>
          </div>
        <div class="col-xs" style="margin:0px 20px;background: white;border:1px solid silver;padding:20px">
            <div class="uList">
                <?
                if($_SESSION['grp'] != "Администратор") {
                    include('UserList.php');
                }
                ?>
            </div>
            <div class="aList">
                <?
                if($_SESSION['grp'] == "Администратор") {
                    include('adminList.php');
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?
    include('modal_list.php');
?>

