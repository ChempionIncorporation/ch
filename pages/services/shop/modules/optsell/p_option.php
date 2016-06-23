<script>
    var i=0;
    var p_option_n = new Array();
    var p_option_p = new Array();
</script>
<div class="row" style="margin-top:10px;">
    <div class="col-xs">
        <p><f style="color: red">*</f>Выберете необходимые опции</p>
        <?
        //print "<script>alert('".$re['id']."');</script>";
        $sql = mysql_query("select * from p_option where  kod = '".$re['id']."'");
        $i = 0;
        while($r = mysql_fetch_array($sql)){
            print   "
                    <script>
                        p_option_n[i] = '".$r['name']."';
                        p_option_p[i] = '".$r['price']."';
                        i++;
                    </script>
                    ";
            print "
                <label>
                    <input type='checkbox' name='pri' value='' class='p_option_".$i."' style='margin:5px 5px;font-size:10pt'>".$r['name']."- (".$r['price']."грн)
                </label>
            <br>";
            $i++;

        }?>
    </div>
</div>
