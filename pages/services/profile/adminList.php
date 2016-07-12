<?
connect();

function gp($key, $text){
    $s = mysql_query("SELECT login from user_l where key_p='".$key."'");
        $r = mysql_fetch_array($s);
    $s2 = mysql_query("select * from profile where login = '".$r['login']."'");
        $r = mysql_fetch_array($s2);

    return $r[$text];
}


$s = mysql_query(
    "Select * from zayavka"
);?>
    <div class="row">
        <div class="col-xs center-xs">
            <div class="box" style="font-size: 21pt;">Полный список</div>
        </div>
    </div>

<div class="row middle-xs">
    <div class="col-xs-1">
        <div class="box">
            <input onchange="search($('#id').val())" class="form-control" id="id" type="text"name="id">
        </div>
    </div>
    <div class="col-xs-4">
        <div class="box">
            <input class="form-control" id="inputdefault" type="text"name="fio">
        </div>
    </div>
    <div class="col-xs-2">
        <div class="box">
            <input class="form-control" id="inputdefault" type="text" name="np">
        </div>
    </div>
    <div class="col-xs-1">
        <div class="box">
            <input class="form-control" id="inputdefault" type="text" name="cdate">
        </div>
    </div>
    <div class="col-xs-3">
        <div class="box">
            <input class="form-control" id="inputdefault" type="text" name="status">
        </div>
    </div>
</div>
<script>
    function search(v){
//        $('.pp_'+c).html("sss<img width='50px' src='/img/load.gif'>");

        setTimeout(function (){
            $.ajax({
                url: "/pages/services/profile/send_edit.php",
                method: "POST",
                data: {
                    razdel: "sear"
                }
            }).done(function(data) {
                alert(v)
            }).fail(function() {

            });
        }, 200);
    }
</script>

<div class="row middle-xs" style="border-bottom:2px solid black">
    <div class="col-xs-1">
        <div class="box">Номер</div>
    </div>
    <div class="col-xs-4">
        <div class="box">ФИО</div>
    </div>
    <div class="col-xs-2">
        <div class="box">Ном.Телефона</div>
    </div>
    <div class="col-xs-1">
        <div class="box">Дата Созд.</div>
    </div>
    <div class="col-xs-3">
        <div class="box">Статус</div>
    </div>
</div>

<?
$i=0;
while($r = mysql_fetch_array($s))
{
    ?>
    <div id='<?="id_".$r['id']?>' class="row middle-xs" style="border-bottom:1px solid silver;display:none">
        <div class="col-xs-1" >
            <div class="box">
                <a id='<?="id_".$r['id']?>' onclick='k(<?=$i?>)' data-toggle='modal' data-target='#z_list' style="color: #88212a">
                    <?=$r['id']?>
                </a>
            </div>
        </div>
        <div class="col-xs-4">
            <div class="box">
                    <?= gp($r['key_p'], 'f')." ".gp($r['key_p'], 'i')." ".gp($r['key_p'], 'o')?>
            </div>
        </div>
        <div class="col-xs-2">
            <div class="box"><?= gp($r['key_p'], 'number_phone')?></div>
        </div>
        <div class="col-xs-1">
            <div class="box"><?= $r['cdate']?></div>
        </div>
        <div class="col-xs-4 tt_<?=$i?>">
            <div class="box">
                <?
                switch($r['status']) {
                    case "Процесс ответа менеджера":
                        $otv = 'selected';
                        break;
                    case "Процесс разработки":
                        $otv = 'selected';
                        break;
                    case "Отправлено":
                        $otv = 'selected';
                        break;
                }
                print "<div class='pp_".$i."'>".$r['status']."</div>";
                ?>
                <script>
                    var len = <?php print $i?>;
                    function sel(c,id){
                        var otv = $("#s_"+c).val();
//                        alert($("#s_"+c).val());
                        $('.pp_'+c).html("<img width='50px' src='/img/load.gif'>");
                        setTimeout(function (){
                            $.ajax({
                                url: "/pages/services/profile/send_edit.php",
                                method: "POST",
//                                dataType: 'html',
                                data: {
                                    n: id,
                                    m: otv,
                                    razdel: "alc"
                                }
                            }).done(function(data) {
                                var po = $(data).filter('.o').html();
//                                        alert(po+"~"+id+"~"+ c);
                                $('.pp_'+c).html(po);
                                $('#s_'+c).css("display", "block");
                            }).fail(function() {
                                alert( "error" );
                            });
                        }, 800);
                    }
                </script>
                <select size="1" onchange="sel(<?=$i?>,<?=$r['id']?>)" id='s_<?=$i?>'>
                    <option selected value='0'>Выбрать</option>
                    <option value='1'>Процесс ответа менеджера</option>
                    <option value='2'>Процесс разработки</option>
                    <option value='3'>Отправлено</option>
                </select>
            </div>
        </div>
    </div>
<?$i++;
}?>

