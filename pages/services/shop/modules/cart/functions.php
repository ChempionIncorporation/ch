<?
    include_once('functions.php');
function maxVal(){
    connect();
    $sql = mysql_query("SELECT max(id) from p_shop_montag");
    $result = mysql_fetch_array($sql);
    return $result['max(id)'];
}
function getName($id,$n){
    connect();
    $sql = mysql_query("SELECT * from p_shop_montag where id='".$id."'");
    $result = mysql_fetch_array($sql);
    return $result[$n];
}
function phpSession($n, $val){
    $_SESSION[$n] = $val;
    return $_SESSION[$n];
}
?>