
<?
connect();
if(isset($_GET['set']) && $_GET['set']==1){
    $id = $_GET['id'];
    $size = $_GET['size'];
    $ar = explode("|", $id);
    for($i =0; $i < $size; $i++){
        if($ar[$i] != ""){
            mysql_query("delete from zayavka where id=".$ar[$i]);
//                print "<script>alert('".$ar[$i]."')</script>";
        }
    }
}
$s = mysql_query("Select * from zayavka where key_p='".$_SESSION['password']."'");
?>
<div class="box">
    <div class="row">
        <div class="col-xs">
            <div class="box">
                <h3>Стенды</h3>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs">
            <div class="box">
                <button type="button" style="display: none;margin:10px" id="ssave"
                        class="btn btn-success">Сохранить
                </button>
            </div>
        </div>
    </div>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Номер</th>
            <th>Сумма</th>
            <th>Создан</th>
            <th>Прийдет</th>
            <th>Процесс</th>
            <th>Удалить</th>
        </tr>
        </thead>
        <tbody>
        <?$s1=0;$i =0;
        while($r = mysql_fetch_array($s)){
           $t = explode("+", $r['full_text']);
           foreach($t as $v):
               $tt = explode("†", $v);
               foreach($tt as $vv):
                   $ttt = explode("|", $vv);
                   $s1 = $ttt[4]*$ttt[3] + $s1;
               endforeach;
           endforeach;
           if($r['id'] != $op){
    print  "<tr>"?>
                <td><? print "<a id='".$r['id']."' onclick='k(".$i.", ".$r['id'].")' data-toggle='modal' data-target='#z_list' class='kol_".$i."' style='color:#88212a;cursor: pointer'>".$r['id']."</a>"; ?></td>
                <td><? print $s1 ?> грн.</td>
                <td><? print $r['cdate']; ?></td>
                <td><? print $r['cdate']; ?></td>
                <td><? print $r['status']; ?></td>
<!--                <td>--><?//print "<a onclick='un(".$i.")' style='color:red;font-weight:900;cursor:pointer;'>X</a>";?><!--</td>-->
            </tr>
           <?
               $i++;
           }
       }
        ?>
        </tbody>
    </table>
</div>