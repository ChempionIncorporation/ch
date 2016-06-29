<?session_start()?>
<!DOCTYPE html>
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
<div class="container" style="position:static;margin-top:50px">
</div>
    <div class="container">
        <div class="row ">
            <div class="col-xs-3" style="margin-top:20px;border:1px solid #e8e8e8">
<!--                <div class="col-xs-3" style="margin-top:20px;background: #88212a;border:1px solid #e8e8e8">-->
                <div class="box" >
                    <div class="col-xs">

                        <div class="box" style="margin-bottom: 10px;background: #88212a">
                            <h3 style="text-align: center;margin-top:0px;background: #7e212a;padding:10px;color: white;">
                                <b>Champ-Shop</b>
                            </h3>
                            <?
                            connect();
                            $z = mysql_query("select * from p_catalog");
                            while($re = mysql_fetch_array($z)) {?>
                                <a href="/shop/<?print $re["name"];?>">
                                    <div class="box" style="">
                                        <?print $re['name']?>
                                    </div>
                                </a>
                            <?}?>
                            <hr>
                        </div>

                        <div class="box box_cart" style="margin-bottom: 10px;background: #88212a">
                            <?include_once('modules/cart/view.php');?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs" style="padding:20px;margin-top:20px;background: #fff;height:100%;margin-left:10px;border:1px solid #e8e8e8;">
                <div class="row start-xs">
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
