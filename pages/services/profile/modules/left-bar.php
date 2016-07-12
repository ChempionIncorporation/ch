<?include('functions.php');?>
<? session_start(); ?>
<link rel="stylesheet" href="/assets/css/style-modal.css" rel="stylesheet">

<?
connect();
$s = mysql_query("select * from user_l where key_p='" . $_SESSION['password'] . "'");
$r = mysql_fetch_array($s);
?>

<div class="col-xs">
    <div class="box">
        <h3 style="color: #88212a">Champion</h3>
        <ul style='list-style: none;line-height: 2.5;' class="uul">
            <li><a href='/<? print "id" . $_SESSION['id'] ?>'>Профиль</a></li>
            <li><a href='/<? print "id" . $_SESSION['id'] ?>/list/'>Список заказов</a></li>
            <li><a href='/shop?ch=2/'>Интернет-магазин</a></li>
            <li>Скидка</li>
            <li>Оформить покупку</li>
            <li>Сообщения</li>
            <li>
                <a style="cursor: pointer" data-toggle="modal" data-target="#myModal">Изменить пароль</a>
            </li>
            <? if ($_SESSION['group'] == "Администратор") { ?>
                <hr>
                <li><a href='/editor/'>Добавить товар</a></li>
            <? } ?>
        </ul>
        </div>
    </div>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 align="center">Редактирование пароля</h3>
            </div>
            <div class="modal-body">
                <form action="<? print "/id" . $_SESSION['id'] . "" ?>?chan=1" method="post">
                    <div class="row center-xs" style="margin-top:50px;">
                        <div class="col-xs-12">
                            <input type="password" name="old_pass" oninput="validatePassword(this)"
                                   style="height:30px;width:300px"
                                   placeholder="Старый пароль" required>
                            <hr style="border-radius: 110px; width: 400px">
                            <input type="password" name="new_pass1" oninput="validatePassword1(this)"
                                   style="height:30px;width:300px"
                                   placeholder="Новый пароль" required>
                            <hr style="border-radius: 110px; width: 400px">
                            <input type="password" name="new_pass2" oninput="validatePassword2(this)"
                                   style="height:30px;width:300px"
                                   placeholder="Повторите пароль" required>
                            <br/>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="row middle-xs">
                    <div class="col-xs start-xs">
                        <div class="box">
                            <button class="btn btn-large btn-primary" type="submit" style="margin-top:10px">
                                Изменить
                            </button>
                        </div>
                    </div>
                    <div class="col-xs">
                        <div class="box"
                        <button type="button" class="btn btn-large btn-primary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>