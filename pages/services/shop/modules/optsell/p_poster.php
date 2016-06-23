<script>
    var i=0;
    var p_poster_n = new Array();
    var p_poster_p = new Array();
</script>
<div class="row" style="margin-top:10px;margin-left:10px;">
    <div class="col-xs-8">
        <p>Закажите печать постера</p>
        <?
        $sql = mysql_query("select * from p_poster where kod = '".$re['id']."'");
//        $pf = $re['p_konstr'] * 1.15;
        $i = 0;
        while($r = mysql_fetch_array($sql)){
        print   "
            <script>
                p_poster_n[i] = '".$r['name']."';
                p_poster_p[i] = '".$r['price']."';
                i++;
            </script>
                ";
            print "<label>
                        <input type='checkbox' class='p_poster_".$i."' name='pri' value=".$r['name'].">
                        <f >".$r['name']."</f> (+
                        <f >".$r['price']."</f> грн.)
                   </label><br>";
            $i++;
        }?>
    </div>
</div>
