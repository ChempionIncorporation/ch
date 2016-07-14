<?
include_once('../../../header.php');
include_once('control.php');
connect();
if (checkName('grp', $_SESSION['password']) == 'Администратор') {
    $re['name'] = $_SESSION['name'] = checkName('name', $_SESSION['password']);
    $key = $_SESSION['password'];
    ?>
    <script type="text/javascript" src="/pages/services/shop/modules/editor/inps.js"></script>
    <div class="container" style="background:white;padding:20px">
        <div class="row">
            <div class="col-xs">
                <div class="box">
                    <?
                    include_once('modules/index.php');
                    //Загрузка картинки
                    ?>
                    <form action="#" name="formName" method="post">
                </div>
                </div>
            <div class="col-xs">
                <div class="box">
                </div>
            </div>
            <div class="col-xs">
                <div class="box">
                    <div class="gallery" id="images_preview">
                    </div>
                </div>
            </div>
            </div>
        <div class="row start-xs">
            <div class="col-xs">
                <div class="box">
                    <?
                    include_once('blocks/name.php');
                    //NAME
                    include_once('blocks/catalog.php');
                    //CARALOG
                    ?>
                    <div class="form-group">
                        <label for="sel1">Наличие:</label>
                        <select class="form-control" id="nal">
                            <option value="1">Есть в наличии</option>
                            <option value="2">Нет в наличии</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-xs-4">
                <?
                include_once('blocks/price.php');
                //Цена
                include_once('blocks/size.php');
                //Размер
                ?>
                <div class="row">
                    <div class="col-xs">
                        <div class="box">
                            <div class="form-group">
                                <label for="email">Количество дней до отправки:</label>
                                <input type="number" class="form-control" name="height" id="ex_date">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        <div class="row">
            <div class="col-xs">
                <div class="box">
                    <?
                    include_once('blocks/desc.php');
                    //Описание
                    ?>
                </div>
            </div>
            <div class="col-xs">
                <div class="box">
                    <?
                    include_once('blocks/char.php');
                    //Характеристика
                    ?>
                </div>
            </div>
            <div class="col-xs">
                <div class="box">
                    <?
                    include_once('blocks/req.php');
                    //Требования
                    ?>
                </div>
            </div>
        </div>


        <div class="row center-xs">
            <div class="col-xs">
                <div class="box"
                     style="background: black; color: white;border-bottom:2px solid white;;font-weight:900;border-radius:10px 10px 0px 0px">
                    Дополнительные функции
                </div>
                </div>
            </div>

        <div id="raznoe">
            <?
            include_once('blocks/reznoe.php');
            ?>
        </div>
        <div style="padding:20px;">
            <button id="btn_aad" type="button" class="btn btn-success btn-block">Добавить товар!</button>
        </div>
        </form>
    </div>
<?}?>
