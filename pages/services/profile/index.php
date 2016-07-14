<?session_start();?>
    <!DOCTYPE html>
    <meta charset="utf-8">
<?
include("change_pass.php");
//<form action="/id226?chan=1" method="post">
?>

    <div class="wrapper">
    <form action="<? print "/id" . $_SESSION['id'] . "" ?>?chan=1" method="post">
    <div class="container" style="margin-top:100px">
        <div class="row top-xs" style="">
            <div class="col-xs-3">
                <style>
                    .affix {
                        top: 5px;
                    }
                </style>
                <div
                     style="">
                        <?
                            connect();
                            $z = mysql_query("select * from profile where login in (select login from user_l where key_p = '" . $_SESSION['password'] . "')");
                            $re = mysql_fetch_array($z);
                            $_SESSION['name'] = $_COOKIE['name'] = $re['name'];
                            $_SESSION['grp'] = $_COOKIE['grp'] = $re['grp'];
                            $_SESSION['id'] = $_COOKIE['id'] = $re['id'];
                            include_once('modules/left-bar.php');
                        ?>
                </div>
            </div>
            <div class="col-xs" style="margin-left:25px;">
                <div class="row">
                    <div class="col-xs" style="">
                        <div class="box">
                            <h2 style="color: #88212a">Добро пожаловать
                                <font style="text-decoration: underline">
                                    <? print $re['i'] . " " . $re['o'] ?>
                                </font>
                            </h2>
                            <p style="padding-left:20px;">
                                <?
                                $arr = array("Мы всегда вам рады", "РА-Chempion приветствует вас", "Всегда вам рады");
                                print $arr[rand(0, 2)];
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <div class="row" style=" background: white;margin-bottom:10px;border:1px solid silver">
                        <div class="col-xs">
                            <div class="box">
                                <div class="row" style="padding:10px">
                                    <div class="col-xs-4" style="">
                                        <div class="box">
                                            Ваш регистрационный номер:
                                        </div>
                                    </div>
                                    <div class="col-xs" style="">
                                        <div class="box">
                                            <b><? print $_GET['id'] ?></b>
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="padding:10px">
                                    <div class="col-xs-4" style="">
                                        <div class="box">
                                            Вы находитесь в группе:
                                        </div>
                                    </div>
                                    <div class="col-xs" style="">
                                        <div class="box"><b>
                                                <? print $re['grp'] ?>
                                            </b></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="background: white;padding:20px; border: 1px solid silver">
                        <div class="col-xs">
                            <div class="row" style="padding:10px">
                                <div class="col-xs-8">
                                    <div class="box">
                                        <button type="button" style="display: block;margin:0px" id="sset"
                                                class="btn btn-info">Редактировать
                                        </button>
                                        <button type="button" style="display: none;margin:10px" id="ssave"
                                                class="btn btn-success">Сохранить
                                        </button>
                                    </div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="box">
                                        <button type="button" style="display: none;margin:10px" id="uundo"
                                                class="btn btn-danger">Назад
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="padding:10px">
                                <div class="col-xs-4">
                                    <div class="box">
                                        Фамилия:
                                    </div>
                                    <div class="box">
                                        <div id="set_f"></div>
                                    </div>
                                </div>
                                <div class="col-xs">
                                    <div class="box">
                                        <b>
                                            <? print $re['f'] ?>
                                        </b>
                                    </div>
                                </div>
                                <div class="col-xs-4" style="">
                                    <div class="box">
                                        <input type="text" size="20" style="display: none"
                                               id="f" placeholder="Фамилия">
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="padding:10px">
                                <div class="col-xs-4" style="">
                                    <div class="box">
                                        Имя:
                                    </div>
                                    <div class="box">
                                        <div id="set_i"></div>
                                    </div>
                                </div>
                                <div class="col-xs" style="">
                                    <div class="box"><b>
                                            <? print $re['i'] ?>
                                        </b></div>
                                </div>
                                <div class="col-xs-4" style="">
                                    <div class="box">
                                        <input type="text" size="20" style="display: none" id="i" placeholder="Имя">
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="padding:10px">
                                <div class="col-xs-4" style="padding-bottom: 20px;">
                                    <div class="box">
                                        Отчество:
                                    </div>
                                    <div class="box">
                                        <div id="set_o"></div>
                                    </div>
                                </div>
                                <div class="col-xs" style="">
                                    <div class="box"><b>
                                            <? print $re['o'] ?>
                                        </b></div>
                                </div>
                                <div class="col-xs-4" style="">
                                    <div class="box">
                                        <input type="text" size="20" style="display: none" id="o"
                                               placeholder="Отчество">
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="padding:10px">
                                <div class="col-xs-4" style="">
                                    <div class="box">
                                        Номер телефона
                                    </div>
                                    <div class="box">
                                        <div id="set_np"></div>
                                    </div>
                                </div>
                                <div class="col-xs-4" style="">
                                    <div class="box">
                                        <?

                                        if (empty($re['number_phone'])) {
                                            $p = "<font style='font-weight: 900' color='red'>Пусто.</font>";
                                        } else {
                                            $num = "(0" . substr($re['number_phone'], 0, 2) . ") " . substr($re['number_phone'], 2, 2) . "-" . substr($re['number_phone'], 4, 2) . "-" . substr($re['number_phone'], 6, 3);
                                            $p = "+38 " . $num;
                                        }
                                        print "<b>" . $p . "</b>"; ?>
                                    </div>
                                </div>
                                <div class="col-xs-4" style="">
                                    <div class="box">
                                        <input type="text" size="20" maxlength="13" style="display: none" id="np"
                                               placeholder="Номер телефона">
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="padding:10px">
                                <div class="col-xs-4" style="">
                                    <div class="box">
                                        Город:
                                    </div>
                                    <div class="box">
                                        <div id="set_c"></div>
                                    </div>
                                </div>
                                <div class="col-xs-4" style="">
                                    <div class="box"><b>
                                            <?
                                            if (empty($re['city'])) {
                                                $g = "<font style='font-weight: 900' color='red'>Пусто.</font>";
                                            } else {
                                                $g = $re['city'];
                                            }
                                            print $g;
                                            ?>
                                        </b></div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="box">
                                        <input type="text" size="20" style="display: none" id="c" placeholder="Город">
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="padding:10px">
                                <div class="col-xs-4" style="">
                                    <div class="box">
                                        Адресс:
                                    </div>
                                    <div class="box">
                                        <div id="set_a"></div>
                                    </div>
                                </div>
                                <div class="col-xs-4" style="">
                                    <div class="box"><b>
                                            <?
                                            if (empty($re['address'])) {
                                                $g = "<font style='font-weight: 900' color='red'>Пусто.</font>";
                                            } else {
                                                $g = $re['address'];
                                            }
                                            print $g;
                                            ?>
                                        </b></div>
                                </div>
                                <div class="col-xs-4" style="">
                                    <div class="box">
                                        <input type="text" size="20" style="display: none" id="a" placeholder="Адресс">
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="padding:10px">
                                <div class="col-xs-4" style="">
                                    <div class="box">
                                        Электронная почта:
                                    </div>
                                    <div class="box">
                                        <div id="set_m"></div>
                                    </div>
                                </div>
                                <div class="col-xs-4" style="">
                                    <div class="box"><b>
                                            <?
                                            if (empty($re['email']))
                                                print "<font style='font-weight: 900' color='red'>Пусто</font>";
                                            else
                                                print $re['email'];
                                            ?>
                                        </b></div>
                                </div>
                                <div class="col-xs-4" style="">
                                    <div class="box">
                                        <input type="text" size="20" style="display: none" id="m"
                                               placeholder="Эл.Почта">
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="padding:10px">
                                <div class="col-xs-4" style="">
                                    <div class="box">
                                        Организация:
                                    </div>
                                    <div class="box">
                                        <div id="set_org"></div>
                                    </div>
                                </div>
                                <div class="col-xs-4" style="padding-bottom:20px">
                                    <div class="box"><b>
                                            <?
                                            if (empty($re['org']))
                                                print "<font style='font-weight: 900' color='red'>Пусто</font>";
                                            else
                                                print $re['org'];
                                            ?>
                                        </b></div>
                                </div>
                                <div class="col-xs-4" style="">
                                    <div class="box">
                                        <input type="text" size="20" id="org" style="display: none" placeholder="Организация">
                                    </div>
                                </div>
                            </div>

                            <script src="pages/services/profile/set_input.js" type="text/javascript"></script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<?
include("../../../modules/footer.php");
?>
    </div>