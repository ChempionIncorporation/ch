<?session_start();
    include_once('control.php');
    if(checkName('group', $_SESSION['password']) == 'Админ' ){
        $re['name'] = $_SESSION['name'] = checkName('name', $_SESSION['password']);
        include_once('../../../header.php');?>
<div class="container" style="margin-top:80px;">
    <div class="row center-xs">
        <div class="col-xs">
            <div class="box">
                Hello
            </div>
        </div>
        <div class="col-xs">
            <div class="box">
                Hello
            </div>
        </div>
        <div class="col-xs">
            <div class="box">
                Hello
            </div>
        </div>
        <div class="col-xs">
            <div class="box">
                Hello
            </div>
        </div>
    </div>
</div>





<?}?>
