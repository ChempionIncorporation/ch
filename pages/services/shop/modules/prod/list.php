<!--Запрос на увеличение процента-->
<!--update p_shop_montag-->
<!--set p_konstr = ceil(p_konstr * 100 )-->
<script type="text/javascript">
    var myImage = "<?php print $re['photo']?>";
    var maxVal = "<?php print MaxVal()?>";
    var nn = "<?php echo $re['id'];?>";
    var nname = "<?php echo getName($re['id'], 'name');?>";
</script>
<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog  modal-xs">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button"  class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Список</h4>
            </div>
            <div class="modal-body">
                <div class="ins">

                </div>
            </div>
            <div class="modal-footer">
                <div class="row middle-xs">
                    <div class="col-xs">
                        <div class="box" style="text-align:left;">
                            <!-- Общая сумма !-->
                            <o style="font-size:10pt" class="price_res"></o>
                        </div>
                    </div>
                    <div class="col-xs center-xs">
                        <div class="box">
                            <button type='button' class='btn btn-danger' onclick="location.href='/cart'" >Оформить заказ</button>
                        </div>
                    </div>
                    <div class="col-xs center-xs">
                        <div class="box">
                            <button type="button" class="btn btn-success btn_cart" data-dismiss="modal">Продолжить покупку</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
