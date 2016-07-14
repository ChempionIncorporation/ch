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

<div class="row center-xs middle-xs">
    <div class="col-xs-3 center-xs">
        <div class="box">ID
            <input onkeyup="sort_spis()" class="form-control r" id="iid" type="text" name="id">
        </div>
    </div>
    <div class="col-xs-4 center-xs">
        <div class="box">
            Фамилия: <input onkeyup="sort_spis()" class="form-control input-sm r" id="f" type="text">
            Имя: <input onkeyup="sort_spis()" class="form-control input-sm r" id="i" type="text" name="i">
            Отчество: <input onkeyup="sort_spis()" class="form-control input-sm r" id="o" type="text" name="o">
        </div>
    </div>
    <div class="col-xs-4 start-xs">
        <div class="box">
            <div class="form-group">
                <label for="sel1">Статус:</label>
                <select onclick="sort_spis()" class="form-control" id="status">
                    <option value="" selected>Выбор</option>
                    <option value="1">Процесс ответа от менеджера</option>
                    <option value="2">Процесс разработки</option>
                    <option value="3">Отпавлено</option>
                </select>
            </div>
        </div>
    </div>
</div>

<script>
function sort_spis(){
    $('.lol').html("<img width='20px' src='/img/load.gif'> Загрузка...");
    setTimeout(function (){
        $.ajax({
            url: "/pages/services/profile/send_edit.php",
            method: "POST",
            data: {
                id: $("#iid").val(),
                f: $("#f").val(),
                i: $("#i").val(),
                o: $("#o").val(),
                s: $("#status").val(),
                razdel: "Search"
            }
        }).done(function(data){
            sessionStorage.setItem('group', 'admin');
            $('.op').css("display", "none");
            var va = $(data).filter('.o').html();
            var er = $(data).filter('.m').html();

//            console.log("Otvet: "+va);
//            console.log("Error: "+er);

            $('.gleb').html(er);
            var arr = va.split("+");
            for (var i = 0; i <= arr.length; i++) {
                console.log(arr[i]);
                $("#gl_" + arr[i]).css("display", "block");
            }
            $('.lol').html("");
        }).fail(function() {
            alert( "error" );
        });
    }, 100);
}
</script>


<div class="row middle-xs" style="border-bottom:2px solid black">
    <div class="col-xs-1">
        <div class="box sss">Номер</div>
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

<div class="lol">
</div>
    <?
    $i=0;
    while($r = mysql_fetch_array($s))
    {
        ?>
        <div id='gl_<?=$r['id']?>' class="row middle-xs <?="xx_".$i?> op" style="border-bottom:1px solid silver;">
            <div class="col-xs-1" >
                <div class="box">
                    <a id="id" onclick='k(<?=$i?>,<?=$r['id']?>)' data-toggle='modal' data-target='#z_list' style="color: #88212a;">
                        <?=$r['id']?>
                    </a>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="box">
                       <f class="f_<?=$i?>"><?= gp($r['key_p'], 'f')?></f>
                       <f class='i_<?=$i?>'><?=gp($r['key_p'], 'i')?></f>
                       <f class='o_<?=$i?>'><?=gp($r['key_p'], 'o')?></f>
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
                            $('.pp_'+c).html("<img width='20px' src='/img/load.gif'>");
                            setTimeout(function (){
                                $.ajax({
                                    url: "/pages/services/profile/send_edit.php",
                                    method: "POST",
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
