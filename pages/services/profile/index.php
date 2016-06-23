<?session_start()?>
<?
include_once("../header.php");
if(isset($_GET['quit']) && $_GET['quit'] == 1){
    $_SESSION['password'] = null;
    $_SESSION['id'] = null;
    $_SESSION['login'] = null;
    print  "<script>alert('Вы вышли из системы')</script>";
    print "<meta http-equiv='refresh' content='0; url=/auth/'>";

}

?>
<style>
    span#warning{
        color: #b20000;
    }
</style>
<form action="?save=1" method="post">
    <div class="container" style="margin-top:100px">
        <div class="row top-xs" style="">
            <div class="col-xs-3" style="border-right:5px solid #e8e8e8;background: #fff">
                <div class="box" >
                    <?
                        include_once('modules/left-bar.php');
                        connect();
                        $z = mysql_query("select * from profile where login in (select login from user_l where key_p = '".$_SESSION['password']."')");
                        $re = mysql_fetch_array($z);
                        $_SESSION['name'] = $_COOKIE['name'] = $re['name'];
                        $_SESSION['grp'] = $_COOKIE['grp'] = $re['grp'];
                        $_SESSION['id'] = $_COOKIE['id'] = $re['id'];

                    if  (
                        !empty($_POST['name']) || !empty($_POST['phone']) || !empty($_POST['city']) ||
                        !empty($_POST['address']) || !empty($_POST['email']))
                    {
                        if ($re['login'] == $_POST['name'])
                            $print = "name";
                        if ($re['number_phone'] == $_POST['phone'])
                            $print = $print."phone";
                        if ($re['city'] == $_POST['city'])
                            $print = $print."city";
                        if ($re['address'] == $_POST['address'])
                            $print = $print."address";
                        if ($re['email'] == $_POST['email'])
                            $print = $print."email";

                    }
                    ?>
                </div>
            </div>
            <div class="col-xs" style="margin-left:5px;padding:20px;">
                <div class="box" >
                    <div class="row">
                        <div class="col-xs">
                            <div class="box">
                                <div class="jumbotron" style="background: #e8e8e8">
                                    <h1>Добро пожаловать <?print $re['name']?></h1>
                                    <p>Вас приветствует сайт РА-Champion</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        <div class="box">
                            <div class="row">
                            <div class="col-xs" style="background: #fff;padding:20px 5px;border: 3px solid #e8e8e8">
                                <div class="box">
                                    <div class="row">
                                        <div class="col-xs-7" style="">
                                            <div class="box">
                                                Ваш регистрационный номер:
                                            </div>
                                        </div>
                                        <div class="col-xs" style="">
                                            <div class="box"><b>
                                                <?print $_GET['id']?>
                                            </b></div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-7" style="">
                                            <div class="box">
                                                Вы находитесь в группе:
                                            </div>
                                        </div>
                                        <div class="col-xs" style="">
                                            <div class="box"><b>
                                                <?print $re['grp'] ?>
                                            </b></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs"  style="background: #fff;padding:20px 5px;;border: 3px solid #e8e8e8">
                                <div class="box">
                                    <div class="row">
                                        <div class="col-xs-5" style="">
                                            <div class="box">
                                                Номер телефона
                                            </div>
                                        </div>
                                        <div class="col-xs" style="">
                                            <div class="box">
                                                <?

                                                if(empty($re['number_phone'])){
                                                    $p = "<font style='font-weight: 900' color='red'>Пусто.</font>";
                                                }else {
                                                    $p = "+380 ".$re['number_phone'];
                                                }
                                                print "<b>".$p."</b>";?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-5" style="">
                                            <div class="box">
                                                Адресс:
                                            </div>
                                        </div>
                                        <div class="col-xs" style="">
                                            <div class="box"><b>
                                                <?
                                                if(empty($re['city'])){
                                                    $g = "<font style='font-weight: 900' color='red'>Пусто.</font>";
                                                }else{
                                                    $g = $re['city'];
                                                }
                                                if(empty($re['address'])){
                                                    $r = "<font style='font-weight: 900' color='red'>Пусто.</font>";
                                                }else{
                                                    $r = $re['address'];
                                                }
                                                print "Город: ".$g.", "."Ул.: ".$r;?>
                                            </b></div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-5" style="">
                                            <div class="box">
                                                Электронная почта:
                                            </div>
                                        </div>
                                        <div class="col-xs" style="">
                                            <div class="box"><b>
                                                <?
                                                    if(empty($re['email']))
                                                        print "<font style='font-weight: 900' color='red'>Пусто</font>";
                                                    else
                                                        print $re['email'];

                                                ?>
                                            </b></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<!--              Делаем статистику заказа  -->
            <?$sql = mysql_query("select * from zayavka where key_athor='".$_SESSION['password']."'");
            if(!empty($sql)){?>
                <div class="box">
                    <div class="row" style="margin-top:20px">
                        <div class="col-xs">
                            <div class="box">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Список заказов</div>
                                    <div class="panel-body">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Наименование</th>
                                                <th>Опция</th>
                                                <th>Статус</th>
                                                <th>Цена</th>
                                                <th>Количество</th>
                                                <th>Итог</th>
                                            </tr>
                                            </thead>

                                            <tbody style="font-size: 10pt;">
                                    <?

                                    while($r = mysql_fetch_array($sql)){
                                        $q = 0;
                                       $o = explode("+",$r['full_my_text']);
                                        foreach($o as $q=> $v):
                                            $l = explode("|", $v);
                                            if(!empty($l[2])){
                                        ?>

                                            <tr>
                                                <td><?print $l[1]?></td>
                                                <td><?print $l[2]?></td>
                                                <td><?print $r['status']?></td>
                                                <td><?print $l[3]?></td>
                                                <td><?print $l[4]?></td>
                                                <td><?print $l[3]*$l[4]?></td>
                                            </tr>
                                        <?}
                                        endforeach;
                                    }?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?}else{?>
                <div class="row" style="background: white;padding:20px">
                    <div class="col-xs">
                        <div class="box">
                            Список заказов - Пустой.
                        </div>
                    </div>
                </div>
            <?}?>
<!--              Для редактирования профиля  -->
                <div class="row" style="display: none">
                    <div class="col-xs">
<!--                      Имя -->
                        <div class="box" style="margin-top:25px;">
                            <div class="row middle-xs" style="margin-left:10px;">
                                <i style="font-size:30pt;color:#88212a" class="fa fa-user" aria-hidden="true"></i>
                                <div class="col-xs-6">
                                    <div class="box">
                                        <?if(!empty($re['name'])){?>
                                            <input type="text" id="name" name="name" value="<?print $re['name']?>">
                                        <?}else{?>
                                            <input type="text" name="name" >
                                            <span id="warning" style="">
                                                У вас пустая почта
                                           </span>
                                        <?}?>
                                    </div>
                                </div>
                            </div>
                        </div>
<!--                      Номер телефона  -->
                        <div class="box" style="margin-top:25px;">
                            <div class="row middle-xs" style="margin-left:7px;">
                                <i style="font-size:30pt;color:#88212a" class="fa fa-phone-square" aria-hidden="true"></i>
                                <div class="col-xs-6">
                                    <div class="box">
                                        <?if(!empty($re['number_phone'])){?>
                                            <input type="text" class="phone" name="phone" value="<?print "+38".$re['number_phone']?>">
                                        <?}else{?>
                                            <input type="text" class="phone" name="phone" value="" placeholder="Номер телефона">
                                            <span id="warning" style="">
                                                Текст <font color='red'>пустой</font>
                                            </span>
                                        <?}?>
                                    </div>
                                </div>
                            </div>
                        </div>
<!--                      Город  -->
                        <div class="box" style="margin-top:25px;">
                            <div class="row middle-xs" style="margin-left:4px;">
                                <i style="font-size:30pt;color:#88212a" class="fa fa-home" aria-hidden="true"></i>
                                <div class="col-xs-6">
                                    <div class="box">
                                        <?if(!empty($re['city'])){?>
                                            <input type="text" name="city" value="<?print "г.".$re['city']?>">
                                        <?}else{?>
                                            <input type="text" name="City" placeholder="Город">
                                            <span id="warning" style="">
                                            У вас пустая почта
                                        </span>
                                        <?}?>
                                    </div>
                                </div>
                            </div>
                        </div>
<!--                       Адресс -->
                        <div class="box" style="margin-top:25px;">
                            <div class="row middle-xs" style="margin-left:18px;">
                                <i style="font-size:30pt;color:#88212a" class="fa fa-map-marker" aria-hidden="true"></i>
                                <div class="col-xs-6">
                                    <div class="box">
                                        <?if(!empty($re['address'])){?>
                                            <input type="text" name="address" value="<?print $re['address']?>">
                                        <?}else{?>
                                            <input type="text" name="address" placeholder="Адресс">
                                            <span id="warning" style="">
                                            У вас пустая почта
                                        </span>
                                        <?}?>
                                    </div>
                                </div>
                            </div>
                        </div>
<!--                        Почта-->
                        <div class="box" style="margin-top:25px;">
                    <div class="row middle-xs" style="margin-left:1px;">
                        <i style="font-size:30pt;color:#88212a" class="fa fa-envelope" aria-hidden="true"></i>
                        <div class="col-xs-6">
                            <div class="box">
                                <?if(!empty($re['email'])){?>
                                    <input type="text" name="email" value="<?print $re['email'] ?>">
                                <?}else{?>
                                    <input type="text" name="email" placeholder="Почта" >
                                    <span id="warning" style="">
                                    У вас пустая почта
                                </span>
                                <?}?>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                    <button class="btn btn-large btn-primary"  type="submit">Сохранить</button>
                </div>
</form>

