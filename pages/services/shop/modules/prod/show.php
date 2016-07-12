<?php
include('list.php');
connect();

$i=0;
if((int)$test[strlen($test)-2].$test[strlen($test)-1] > 9){
    $t = (int)$test[strlen($test)-2].$test[strlen($test)-1];
    }
else $t = (int)$test[strlen($test)-1];
$z = mysql_query("select * from p_catalog");
while($re = mysql_fetch_array($z)){
    $i++;
?>
<!-- !-->
    <div class="col-xs" style="border-bottom:1px solid #e8e8e8;margin: 10px 0px;border-radius: 10px;">
    <div class="box">
        <a href="/shop/<?print $re["name"];?>?n=<?print $i?>">
            <img src="/../../img/upload/montaj/razdel/<? print $re["foto"]; ?>" width="250px">
        </a>
    </div>
    <div class="box" style="text-align:center;min-height:50px;">
        <a href="/shop/<?print $re["name"];?>?n=<?print $i?>">
            <b>
                <?print $re["f_name"];?>
            </b>
        </a>
    </div>
    <div class="box" style="margin-top:5px;min-height:100px">
        <?print $re["desc"];?>
    </div>
    <div class="box" style="text-align: right;margin-bottom:10px;">
        <a href='/shop/<?print ($re["name"]);?>/?n=<?print $i?>' class="btn btn-large btn-primary">Подробнее</a>
    </div>
</div>
<!-- !-->

<?}?>