<?php session_start();
connect();
$z = mysql_query("select * from stend_pn where id=" . $_GET['id']);
$re = mysql_fetch_array($z);
$fill_size = "";
if($re['height'] != 0 && $re['width'] != 0) {
    $size = $re['height'] . "x" . $re['width'] . " см.";
    $full_size = "Размер: <b>".$re['height']."x".$re['width']." </b>см.";
}else if($re['height'] > 0 && $re['width'] <= 0) {
    $size = "(" . $re['height'] . "см.)";
}
include('list.php');
?>
<script>
    var image = "/pages/services/shop/modules/editor/modules/uploads/<? print $re['img'] ?>";
    var k_p = "<?print $re['price']?>";
    var k_n = "<?print $re['name']?>";
    var input = "<?print $re['inp']?>";
    var radio = "<?print $re['rad']?>";
    var check = "<?print $re['che']?>";
</script>
<script src="/pages/services/shop/modules/prod/AjaxListGet.js"></script>
<div class="row" style="">
    <div class="col-xs-12" style="">
        <div class="box" style="font-weight:900;font-size:20pt;text-align:center">
            <?print $re["name"]." ".$size;?>
        </div>
    </div>
    <div class="col-xs-7" >
            <div class="box" style="border: 2px solid #f7f7f7;height:300px;margin-top:10px;padding:20px;">
                <center><img src="/pages/services/shop/modules/editor/modules/uploads/<? print $re['img'] ?>" \
                             height="255px"></center>
        </div>

        <div class="box">
            <div id="tabvanilla" class="widget">
                <ul class="tabnav">
                    <li><a href="#popular">Описание</a></li>
                    <li><a href="#recent">Тех. Xарактеристики</a></li>
                    <li><a href="#featured">Требования</a></li>
                </ul>
                <div id="popular" class="tabdiv">
                    <b style="font-size:15pt">Описание:</b><br> <? print $re['description'] ?><br>
                </div><!--/popular-->

                <div id="recent" class="tabdiv">
                    <br> <? print $re['char'] ?>
                </div><!--/recent-->

                <div id="featured" class="tabdiv">
                    <?
                    print $re['req'];
                    ?>
                </div><!--featured-->

            </div><!--/widget-->
        </div>
    </div>
    <div class="col-xs" style="width:100px;margin-right:20px">
        <script>
            var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            console.log(scrollTop);
        </script>
        <script type="text/javascript">
            function validateField(input) {
                if (input.value <= 0)
                    input.value = 1;
            }
        </script>
        <style>
            .affix {
                top: 5px;
                width: 300px;
            }
        </style>
        <div >
            <div class="center-xs" style="padding:10px">
                <div class="box" style="">
                    <div class="row">
                        <div class="col-xs start-xs">
                            <div class="box">
                                Наименование:
                            </div>
                        </div>
                        <div class="col-xs end-xs">
                            <div class="box">
                                <? print $re['name'] ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs start-xs">
                        <div class="box">
                            Наличие:
                        </div>
                    </div>
                    <div class="col-xs end-xs">
                        <div class="box">
                            <b style="background:yellowgreen;padding:2px;color:#f6f6f6"><? print $re['nalichie'] ?></b>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div style="">
                <div class="box">
                    <div class='row'>
                        <div class="col-xs">
                            <div class="box">
                                <div class='row middle-xs'>
                                    <div class='col-xs' style='font-size:14pt;'>
                                        <div class='box'>
                                            <?= "Кол. конструкций:"?>
                                        </div>
                                        <div class='box' style='font-size:10pt;padding-left:10px;'>
                                            <?= "Цена одной: " . $re['price'] . " грн."?>
                                        </div>
                                    </div>
                                    <div class='col-xs end-xs'>
                                        <input type='number' class='konstr' maxlength="3" id='konstr' name='price' oninput="validateField(this)" style='width:50px'  value='1'><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box">
                    <?
//                    print "<script>console.log('".$_SERVER['DOCUMENT_ROOT']."/pages/services/shop/modules/optsell/input.php')</script>";
                    if (!empty($re['inp'])) {
                        include_once($_SERVER['DOCUMENT_ROOT'].'/pages/services/shop/modules/optsell/input.php');
                    }
                    if (!empty($re['rad'])) {
                        include_once($_SERVER['DOCUMENT_ROOT'].'/pages/services/shop/modules/optsell/radio.php');
                    }
                    if (!empty($re['che'])) {
                        include_once($_SERVER['DOCUMENT_ROOT'].'/pages/services/shop/modules/optsell/checkbox.php');
                    }
//                    include_once("/../optsell/index.php");
                    ?>
                    <div class="col-xs" style="text-align:center;margin-top:10px;">
                        <?
                            if($_SESSION['ssuc'] == 0) {
                                ?>
                                <a type="button" id="pokupka" style="display: none" class="btn btn-info btn-lg" data-toggle="modal"
                                   data-target="#myModal" name="sbutton">Приобрести</a>
                                <?
                            }else{
                                ?>
                                <p><span style="color:red">*</span>Все цены указаны с учетом НДС</p>
                                <a type="button" id="pokupka" class="btn btn-info btn-lg" data-toggle="modal"
                                   data-target="#myModal" >Приобрести</a>
                                <?
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



