<?
if(!empty($re['p_konstr']) || $re['p_konstr'] != 0){
    include_once('p_konstr.php');
}
if(!empty($re['p_razn']) || $re['p_razn'] != 0){
    include_once('p_razn.php');
}
if(!empty($re['p_format']) || $re['p_format'] != 0){
    include_once('p_format.php');
}
if(!empty($re['p_poster']) || $re['p_poster'] != 0){
    include_once('p_poster.php');
}
if(!empty($re['p_compl']) || $re['p_compl'] != 0){
    include_once('p_compl.php');
}
if(!empty($re['p_option']) || $re['p_option'] != 0){
    include_once('p_option.php');
}

?>
