<!DOCTYPE html>
<?
include_once("../header.php");
?>
<br><br><br>
<div class="container">
    <div class="row">

        <div class="col-xs-3" style="background:white;border:1px solid silver">
            <div class="box">
                <?include_once("modules/left-bar.php");?>
            </div>
          </div>

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
        <div class="col-xs" style="margin:0px 20px;background: white;border:1px solid silver;padding:20px">
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
                        <th>Создан</th>
                        <th>Прийдет</th>
                        <th>Сумма</th>
                        <th>Удалить</th>
                    </tr>
                    </thead>
                    <tbody>
                        <?$s1=0;$i =0;
                        while($r = mysql_fetch_array($s)){
                           $t = explode("+", $r['full_my_text']);
                           foreach($t as $v):
                               $tt = explode("|", $v);
                               $s1 = $tt[4]*$tt[3] + $s1;
                           endforeach;
                           if($r['id'] != $op){
                                print "<a data-toggle='modal' data-target='#myModal'><tr id='p_".$i."'>"?>
                                    <td><? print "<a id='".$r['id']."' onclick='k(".$i.")' data-toggle='modal' data-target='#myModal' style='color:#88212a;cursor: pointer'>".$r['id']."</a>"; ?></td>
                                    <td><? print $r['cdate']; ?></td>
                                    <td><? print $r['cdate']; ?></td>
                                    <td><? print $s1 ?> грн.</td>
                                    <td><?print "<a onclick='un(".$i.")' style='color:red;font-weight:900;cursor:pointer;'>X</a>";?></td>
                                </tr></a>
                           <?
                               $i++;
                           }
                       }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body">
                <?
                    $so = mysql_query("select * from zayavka where key_p = '".$_SESSION['password']."'");
                $i =0;
                    while($ro = mysql_fetch_assoc($so)){
                        $id[$i] = $ro['id'];
                        $date[$i] = $ro['cdate'];
                        $fmt[$i] = $ro['full_my_text'];
                        $i++;
                    }
                ?>

                <script>
                    var id = <?= json_encode($id)?>;
                    var date = <?= json_encode($date)?>;
                    var fmt = <?= json_encode($fmt)?>;

                    function k(c) {
                        var itog = 0;
                        $('.bo').html("");
                        var arr = fmt[c].split("+");
                        for (var i = 0; i < arr.length; i++) {
                            var ar = arr[i].split("\|");
                            if(ar[2] != undefined && arr[1] != 'underfined') {
                                $('.bo').append(
                                    "<div class='row middle-xs'>" +
                                    "<div class='col-xs-4'>" +
                                    "<div class='box'>" + ar[1] + "</div>" +
                                    "</div>" +
                                    "<div class='col-xs-3'>" +
                                    "<div class='box'>" + ar[2] + "</div>" +
                                    "</div>" +
                                    "<div class='col-xs-2'>" +
                                    "<div class='box'>" + ar[3] + "</div>" +
                                    "</div>" +
                                    "<div class='col-xs-1'>" +
                                    "<div class='box'>" + ar[4] + "</div>" +
                                    "</div>" +
                                    "<div class='col-xs-1'>" +
                                    "<div class='box'>" + ar[3]*ar[4] + "</div>" +
                                    "</div>" +
                                    "</div>");
                                itog = ar[3]*ar[4] + itog;
                            }
                        }
                        $('.itog').html("Итого: <b>"+itog+"</b>");
                    }
                    var size = [],i=0;

                    function un(o){
                        $('#p_'+o).css("display", "none");
                        $('#ssave').css("display", "block");

                        size[i] = o;
                        i++;
                        $('#ssave').click(function(){
                            var ssize = "&size="+size.length;
                            var idd = "";
                            for(var c=0; c < size.length; c++){
                                    idd = id[c] + "|" + idd;
                            }
                            window.location.assign("?set=1?"+ssize+"&id="+idd);
                        });
                    }

                </script>


                <div class="b1o">
                    <div class='row'>
                            <div class="col-xs-4">
                                <div class="box">
                                    Назв.Конструкции
                                </div>
                            </div>
                            <div class="col-xs-3">
                                <div class="box">
                                    Назв.Опции
                                </div>
                            </div>
                            <div class="col-xs-2">
                                <div class="box">
                                    Цена шт.
                                </div>
                            </div>
                            <div class="col-xs-1">
                                <div class="box">
                                    Кол.
                                </div>
                            </div>
                            <div class="col-xs-1">
                                <div class="box">
                                    Сумма
                                </div>
                            </div>
                    </div>
                    <hr>
                    <div class="bo">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-xs start-xs">
                        <div class="box">
                            <div class="itog">
                                0
                            </div>
                        </div>
                    </div>
                    <div class="col-xs">
                        <div class="box">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>

