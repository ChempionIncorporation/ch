<?include('functions.php');?>
<link rel="stylesheet" href="/assets/css/style-modal.css" rel="stylesheet">
<div class="col-xs">
    <div class="box">
        <h3 style="color: #88212a">Champion</h3>
        <ul style='list-style: none;line-height: 2.5;' class="uul">
            <li><a href='/<? print "id" . $_SESSION['id'] ?>'>Профиль</a></li>
            <li><a href='/<? print "id" . $_SESSION['id'] ?>/list/'>Список заказов</a></li>
            <li><a href='/shop/'>Интернет-магазин</a></li>
            <li>Скидка</li>
            <li>Оформить покупку</li>
            <li>Сообщения</li>
            <li>
                <form action="<? print "/id" . $_SESSION['id'] . "" ?>?chan=1" method="post">
                    <a href="#win2" class="button button-red">Изменить пароль</a>
                    <a href="#x" class="overlay" id="win2"></a>

                    <div class="popup">
                        <h3 align="center">Редактирование пароля</h3>

                        <div class="row center-xs" style="margin-top:50px;">
                            <div class="col-xs-12">
                                <input type="password" name="old_pass" style="height:30px;width:300px"
                                       placeholder="Старый пароль" required>
                                <hr style="border-radius: 110px; width: 400px">
                                <input type="password" name="new_pass1" style="height:30px;width:300px"
                                       placeholder="Новый пароль" required>
                                <hr style="border-radius: 110px; width: 400px">
                                <input type="password" name="new_pass2" style="height:30px;width:300px"
                                       placeholder="Повторите пароль" required>
                                <br/>
                                <button class="btn btn-large btn-primary" type="submit" style="margin-top:10px">
                                    Изменить
                                </button>
                            </div>
                        </div>

                        <a class="close" title="Закрыть" href="#close"></a>
                    </div>
                </form>
            </li>
            <? if ($_SESSION['group'] == "Админ") { ?>
                <hr>
                <li><a href='/editor/'>Добавить товар</a></li>
            <? } ?>
        </ul>
        </div>
    </div>