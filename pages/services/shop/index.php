<?session_start()?>
<!DOCTYPE html>
<meta charset="utf-8">
<body>

<?
    include("../header.php");
include('modules/functions.php');
$id = $_SESSION['id'];
$login = $_SESSION['login'];
$psw = $_SESSION['password'];

if(checkuser($_SESSION['password']) < 70){
    print "<script>alert('У вас в профиле есть пустые поля. Вы будете не аутентифицированы!')</script>";
    $_SESSION['ssuc'] = 0;
}else{
    $_SESSION['ssuc'] = 1;
}


?>
<style>
    .col-xs hr{
        border-radius: 100%;
    }
    .uul a{
        color: white;
    }
    a .box{
        background: #86222b;
        text-align: center;
        margin:5px;
        padding:5px;
        color: white;
        font-weight: 600;
    }
    a .box:hover{
        background: #91242d;
        font-weight: 900;
    }
</style>
<div class="container" style="margin-top:100px">
    <div class="row middle-xs" style="background: #88212a;border:2px solid silver;">
        <div class="col-xs">
            <div class="box" >
                <h2 style="font-weight:800;text-align: center;">Мобильные стэнды</h2>
            </div>
        </div>
        <script>
            $(function(){
                var po = 0, count = 0;
                for(var i=0; i <= sessionStorage.getItem("Count"); i++){
                    po = sessionStorage.getItem("APrice_"+i)*1 + po*1;
                }
                if(sessionStorage.getItem("Count") == null)
                    count = 0;
                else
                    count = sessionStorage.getItem("Count");
               $('itog').html("Товаров: ("+count+":"+po+ " грн.)");
            });
        </script>
        <div class="col-xs">
            <div class="box end-xs">
                <?
                if($_SESSION['ssuc'] == 0) {
                    ?>
                    <a type="button" style="display:none" class="btn btn-info btn-lg" data-toggle="modal" data-target="" disabled>
                        <itog>Товаров: (0:0 грн.)</itog>
                    </a>
                    <?
                }else{
                    ?>
                    <a type="button"  class="btn btn-info btn-lg" data-toggle="modal" data-target="#cart">
                        <itog>Товаров: (0:0 грн.)</itog>
                    </a>
                <?}?>
            </div>
        </div>
    </div>
    <div class="row" style="background: #88212a;border:2px solid silver;">
        <div class="col-xs">
            <div class="box">
        <?
        connect();
        $z = mysql_query("select * from p_catalog");
        while ($re = mysql_fetch_array($z)) { ?>
            <div class="col-xs-3">
                <a href="/shop/<? print $re["name"]; ?>" style="text-decoration: none">
                    <div class="box">
                        <? print $re['name'] ?>
                        </div>
                </a>
                </div>
        <?}?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs" style="padding:20px;margin-top:10px;background: #fff;border:1px solid #e8e8e8;">
            <div class="row">
                    <?
                    switch($_GET['prod']) {
                        case '1':
                            include_once('modules/prod/prod-all.php');
                            break;
                        case '2':
                            include_once('modules/prod/product.php');
                            break;
                        default:
                            include_once('modules/prod/show.php');
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

<?
    include_once('modules/cart/view.php');
?>