<script>
    var i=0;
    var p_compl_n = new Array();
    var p_compl_p = new Array();
</script>
<div class="row" style="padding-top:10px;font-size:12pt;">
    <div class="col-xs">
        <f style="color: red">*</f>Выберите вариант комплектации<br>
        <?
        //print "<script>alert('".$re['id']."');</script>";
        $i=0;
        $sql = mysql_query("select * from p_comp where kod = '".$re['id']."'");
        $pf = $re['p_konstr'] * 1.15;
        while($r = mysql_fetch_array($sql)){
            print   "
                    <script>
                        p_compl_n[i] = '".$r['name']."';
                        p_compl_p[i] = '".$r['price']."';
                        i++;
                    </script>
                    ";
            print   "<label><input type='radio' name='pri' class='p_compl_".$i."'>
                        ".$r['name']." - ".$r['price']." грн
                        <br>
                    </label>";
            $i++;
        }?>
    </div>
</div>
