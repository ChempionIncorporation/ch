<?session_start()?>
<!DOCTYPE html>
<meta charset="utf-8">
<body>

<?
    include("../header.php");
include('modules/functions.php');
$id = $_SESSION['id'];
$login = $_SESSION['login'];
$psw = $_SESSION['password'];?>
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
    <div class="row" style="background: #88212a;border-bottom:1px solid black;">
        <div class="col-xs">
            <div class="box">
                <h2 style="font-weight:800;text-align: center;">Мобильные стэнды</h2>
            </div>
        </div>
    </div>
    <div class="row" style="background: #88212a">
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
        <? } ?>
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
