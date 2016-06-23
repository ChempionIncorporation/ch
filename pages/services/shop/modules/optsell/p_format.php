<script>
    var i=0;
    var p_format_n = new Array();
    var p_format_p = new Array();
</script>
<div class="row" style="margin-top:10px;margin-left:10px;">
    <div class="col-xs-8">
        <p><f style="color: red">*</f>Доступные форматы</p>
<?
//print "<script>alert('".$re['id']."');</script>";
$sql = mysql_query("select * from p_format where kod = '".$re['id']."'");
$pf = $re['p_konstr'] * 1.15;
$i = 0;
while($r = mysql_fetch_array($sql)){
    print   "
            <script>
                p_format_n[i] = '".$r['name']."';
                p_format_p[i] = '".$r['price']."';
                sessionStorage.setItem('p_razn_n_'+i, '".$r['name']."');
                i++;
            </script>
                ";
    print   "<label>
                <input type='radio' name='pri' class='p_format_".$i."' value='".$r['price']."'>";
    print   "
                ".$r['name']." - ".$r['price']." грн<br>
            </label>
            ";
    $i++;

}?>
    </div>
</div>
