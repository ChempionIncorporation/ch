<?
include_once('../../../header.php');
include_once('control.php');
connect();
if (checkName('grp', $_SESSION['password']) == 'Администратор') {
    $re['name'] = $_SESSION['name'] = checkName('name', $_SESSION['password']);
    $key = $_SESSION['password'];
    ?>
    <div class="container" style="background:white;padding:20px">
        <div class="row">
        <div class="col-xs">
            <div class="box">
                <div class="gallery" id="images_preview">

                </div>
                <?
                include_once('modules/index.php');
                //Загрузка картинки
                ?>
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
                    <select class="form-control" id="sel1">
                        <option>Есть в наличии</option>
                        <option>Нет в наличии</option>
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

        <div class="raznoe">
            <?
            include_once('blocks/reznoe.php');
            ?>
        </div>
        <div style="padding:20px;">
            <button type="button" class="btn btn-success btn-block">Добавить товар!</button>
        </div>
    </div>
<?}?>
