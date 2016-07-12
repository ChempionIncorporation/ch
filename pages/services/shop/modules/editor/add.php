<?
include_once('../../../header.php');
connect();
if (!empty($_POST['name']))
    $n = $_POST['name'];
if (!empty($_POST['img']))
    $img = $_POST['img'];

if (!empty($_POST['cat']))
    $cat = $_POST['cat'];
if (!empty($_POST['nal']))
    $nal = $_POST['nal'];
if (!empty($_POST['pri']))
    $pri = $_POST['pri'];
if (!empty($_POST['hei']))
    $h = $_POST['hei'];
if (!empty($_POST['wid']))
    $w = $_POST['wid'];
if (!empty($_POST['des']))
    $des = $_POST['des'];
if (!empty($_POST['req']))
    $req = $_POST['req'];
if (!empty($_POST['cha']))
    $cha = $_POST['cha'];

if (!empty($_POST['inp']))
    $inp = $_POST['inp'];
if (!empty($_POST['rad']))
    $rad = $_POST['rad'];
if (!empty($_POST['che']))
    $che = $_POST['che'];


if (mysql_query("INSERT INTO stend_pn  VALUES (NULL, '" . $n . "', '" . $img . "', '" . $cat . "', '" . $nal . "', '" . $pri . "', '" . $h . "', '" . $w . "', '" . $des . "', '" . $cha . "', '" . $req . "', '" . $inp . "', '" . $rad . "', '" . $che . "')")) {
// print_r($_POST);
    print "<div class='Result_text'>Добавлен</div>>";
}

?>