<?
    $op = include("../../../header.php");
connect();

if(!empty($_POST['n']))
{
    $fmt = $_POST['n'];
//include_once('../functions.php');


$s = mysql_query("select count(full_text) from zayavka where key_p = '".$_SESSION['password']."' and full_text='".$_POST['n']."'");
$r = mysql_fetch_array($s);
    if($r[0] <= 0)
    {
        $otvet = '<font color="green">Прошло</font>';
        mysql_query("insert into zayavka(id, status, key_p, cdate, full_text, ex_date)
                     values(null, '1', '" . $_SESSION['password'] . "', now() , '" . $_POST['n'] . "', now())");

        $otvet = $otvet.'<font color="green"> и добавлено! Можете проверить в Списке заказов</font>';
    }else{
        $otvet = '<font color="#88212a">Ошибка при добавлении товара. <p>Возможно вы попытались добавить тот же товар проверьте в Списке заказов</p></font>';
    }
}else{
    $otvet = '<font color="Red">Корзина ПУСТАЯ!!!!лох</font>';
}
?>


<meta charset="utf-8">
<o class='o' id='o'>
    <div class='row'>
        <div class='col-xs'>
            <div class="box"><h3>Уважаемый <?  print $_SESSION['i'] . " " . $_SESSION['o'] ?></h3></div>
            <div class="box start-xs">Данное оформление требует подтверждения от менеджера</div>
            <div class="box start-xs">Оформление данного списка заказа - <?print $otvet?>
            </div>
            <div class="box start-xs">Статус заказа - <font color='aqua'>Процесс ответa менеджера</font></div>
        </div>
    </div>
</o>