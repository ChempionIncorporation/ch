<script>
    var i=0;
    var r_name = new Array()
    var r_price = new Array()
</script>
<?
$sql = mysql_query("select * from p_raznoe_shop where kod = '".$re['id']."'");
$pf = $re['p_konstr'] * 1.15;
$i = 0;
while($r = mysql_fetch_array($sql)){?>
    <div class="row"  style="padding-top:10px;">
        <div class="col-xs-8">
            <o class="mname_r"><?print $r['name']?></o><br>
            <?
            print "
                <script>
                    r_name[i] = '".$r['name']."';
                    r_price[i] = '".$r['price']."';
                    sessionStorage.setItem('p_razn_n_'+i, '".$r['name']."');
                    sessionStorage.setItem('p_razn_p_'+i, '".$r['price']."');
                    i++;
                </script>
            ";
            ?>
            <f style="font-size:8pt">
                Цена ед.: <b class="mname"><?print $r['price']?></b>.00 грн.<br>
            </f>
        </div>
        <div class="col-xs">
            <?print "<input type='text' id='p_razn' class='p_razn_".$i."' name='price' size='5' maxlength='3' value='0'>";?><br>
        </div>
    </div>
<?
    $i++;
}?>
