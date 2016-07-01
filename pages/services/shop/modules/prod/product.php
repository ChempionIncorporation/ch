<?php
connect();
$z = mysql_query("select * from p_shop_montag where id=".$_GET['id']);
$re = mysql_fetch_array($z);
$fill_size = "";
if($re['height'] != 0 && $re['width'] != 0) {
    $size = $re['height'] . "x" . $re['width'] . " см.";
    $full_size = "Размер: <b>".$re['height']."x".$re['width']." </b>см.";
}else if($re['height'] > 0 && $re['width'] <= 0) {
    $size = "(" . $re['height'] . "см.)";
}
include('/list.php');
?>
<div class="row" style="">
    <div class="col-xs-12" style="">
        <div class="box" style="font-weight:900;font-size:20pt;text-align:center">
            <?print $re["name"]." ".$size;?>
        </div>
    </div>
    <div class="col-xs-7" >
        <div class="box" style="border: 2px solid #f7f7f7;height:300px;margin-top:10px">
            <center><img src="../../../../../img/upload/montaj/<?print $re['photo']?>" height="295px"></center>
        </div>

        <div class="box">
            <div id="tabvanilla" class="widget">
                <ul class="tabnav">
                    <li><a href="#popular">Описание</a></li>
                    <li><a href="#recent">Тех. Xарактеристики</a></li>
                    <li><a href="#featured">Требования</a></li>
                </ul>
                <div id="popular" class="tabdiv">
                    <b style="font-size:15pt">Описание:</b><br> <?print $re['desc']?><br>
                </div><!--/popular-->

                <div id="recent" class="tabdiv">
                    <br> <?print $re['charac']?>
                </div><!--/recent-->

                <div id="featured" class="tabdiv">
                    <?
                        print $re['requi'];
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
        <style>
            .affix {
                top: 5px;
                width: 300px;
            }
        </style>
        <div class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="170">
            <div class="box" style="">
                Тип: <b><? print $re['type_price'] ?></b>
            </div>
            <div class="box" style="">
                Наименование: <b><? print $re['name'] ?></b>
            </div>
            <div class="box" style="">
                Наличие: <b style="background:yellowgreen;padding:2px;color:#f6f6f6"><? print $re['nalichie'] ?></b>
            </div>
            <div class="box" style="">
                <? print $full_size ?>
            </div>
            <div class="box">
                <?
                include("/modules/optsell/index.php");
                ?>
                <div class="col-xs" style="text-align:center;margin-top:10px;">
                    *Все цены указаны с учетом НДС
                    <a type="button" id="pokupka" class="btn btn-info btn-lg" data-toggle="modal"
                       data-target="#myModal">Приобрести</a>
                </div>
            </div>
        </div>
    </div>

</div>


