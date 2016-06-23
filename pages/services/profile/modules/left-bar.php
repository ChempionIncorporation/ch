<?include('functions.php');?>
<div class="container">
    <div class="row">
        <div class="col-xs">
            <div class="box">
                 <h3>Champion</h3>
                <ul style='list-style: none;line-height: 2.5;width:250px;' class="uul">
                    <li><a href='<?print "id".$_SESSION['id']?>'>Статистика</a></li>
                    <li><a href='/shop/'>Интернет-магазин</a></li>
                    <li>Скидка</li>
                    <li>Оформить покупку</li>
                    <li>Связаться с менеджером</li>
                    <?if($_SESSION['group'] == "Админ"){?>
                        <hr>
                        <li><a href='/editor/'>Добавить товар</a></li>
                    <?}?>
                </ul>
            </div>
        </div>
    </div>
</div>