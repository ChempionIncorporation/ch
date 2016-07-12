<?php
include('list.php');
connect();
$z = mysql_query("select * from p_catalog");
while($re = mysql_fetch_array($z)){
?>
<!-- !-->
    <div class="col-xs" style="border-bottom:1px solid #e8e8e8;margin: 10px 0px;border-radius: 10px;">
    <div class="box">
        <img src="/../../img/upload/montaj/razdel/<? print $re["foto"]; ?>" width="250px">
    </div>
    <div class="box" style="text-align:center;min-height:50px;">
        <a href="/shop/<?print $re["name"];?>">
            <b>
                <?print $re["f_name"];?>
            </b>
        </a>
    </div>
    <div class="box" style="margin-top:5px;min-height:100px">
        <?print $re["desc"];?>
    </div>
    <div class="box" style="text-align: right;margin-bottom:10px;">
    <a href="<?print lat($re["name"]);?>" class="btn btn-large btn-primary">Подробнее</a>
    </div>
</div>
<!-- !-->

<?}?>