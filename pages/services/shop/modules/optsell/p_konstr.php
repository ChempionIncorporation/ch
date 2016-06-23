<?if(!empty($re['p_konstr']) || $re['p_konstr'] != 0){
    print "
        <script>
            var p_konstr_p = ".$re['p_konstr'].";
            var p_konstr_n = 'Конструкция';
//            sessionStorage['p_konstr_n'] = p_konstr_n;
//            sessionStorage['p_konstr_p'] = '".$re['p_konstr']."';
        </script>";
    ?>
    <div class="row"  style="padding-top:10px;">
        <div class="col-xs-8">
            Цена конструкции:<br>
            <f style="font-size:8pt">
                Цена ед.: <b><?print $re['p_konstr']?>.00</b> грн.<br>
            </f>
        </div>
        <div class="col-xs">
            <input type="text" class="konstr" id="konstr" name="price" size="5" maxlength="3" value="1"><br>
        </div>
    </div>
<?}?>