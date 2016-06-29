<?include('functions.php');?>

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
            <? if ($_SESSION['group'] == "Админ") { ?>
                <hr>
                <li><a href='/editor/'>Добавить товар</a></li>
            <? } ?>
        </ul>
        </div>
    </div>