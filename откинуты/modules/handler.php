<?php  
header('Content-type: text/html; charset=utf-8');
//Валидация и сохранение файла
//...
//echo 'Получен файл:';
//echo $_FILES['attachment']['name']."<br />";
//echo $_FILES['attachment']['tmp_name'];
include_once("meta/JPEG.php");
include_once("meta/JFIF.php");


$text = $_FILES['attachment']['name'];
//$name = substr($text, 0,strpos($text, ".psd"));

$rs = substr(strrchr($text, "."), 1);
$name = substr($text,0,stripos($text,"."));

$dir = '';
$tmpName = '';
$saveFileType = '';
$width = '';
$height = '';

$aa = 0;
$width_a = 0;
$height_a = 0;
$gg = '';
$bb = 0;
if($rs=='psd' OR $rs=='jpg' OR $rs=='jpeg' OR $rs=='png' OR $rs=='tif'){

$uploaddir = $_SERVER['DOCUMENT_ROOT'].'/uploads/';
$uploadfile = $uploaddir . basename($_FILES['attachment']['name']);
$size_file = $_FILES['attachment']['size'];
//echo $size_file;
//echo '<pre>';
if (move_uploaded_file($_FILES['attachment']['tmp_name'], $uploadfile)) {
    //echo "Файл корректен и был успешно загружен.\n";
}

function thumbGenerator($dir,$tmpName,$fileType,$size,$size_fe){
    $saveFileType = "jpg";
  //  echo $dir.$tmpName.".".$fileType;;
    $imagePath = $dir.$tmpName.".".$fileType;
    $image = new Imagick();
    $image->readimage($imagePath);
    if($fileType == "psd"){
        $image->setIteratorIndex(0);
    } else  $image->setIteratorIndex(0);
    $dimensions = $image->getImageGeometry();
    $width = $dimensions['width'];
    $height = $dimensions['height'];
    if($size == "large"){
        $maxWidth = 720;
        $maxHeight = 720;
    }
    if($size == "small"){
        $maxWidth = 250;
        $maxHeight = 250;
    }
    if($height > $width){
        //Portrait
        if($height > $maxHeight)
            $image->thumbnailImage(0, $maxHeight);
            $dimensions = $image->getImageGeometry();
            if($dimensions['width'] > $maxWidth){
                $image->thumbnailImage($maxWidth, 0);
            }
    }elseif($height < $width){
        //Landscape
        $image->thumbnailImage($maxWidth, 0);
    }else{
        //square
        $image->thumbnailImage($maxWidth, 0);
    }
    if($size == "large"){
        $image->writeImage($dir . $tmpName."-lg.".$saveFileType);
        //echo Imagick::getImageCompressionQuality("1.jpg");
        $image_header = get_jpeg_header_data($dir . $tmpName."-lg.".$saveFileType);
		$image_info = get_JFIF($image_header);
		//echo $width_a;

		$width_a = (int)(round($width/11.811));
		//echo $width_a;
		$height_a = (int)(round($height/11.811023));
		$aa = getimagesize($dir . $tmpName."-lg.".$saveFileType);
		if($aa['channels']==3) $gg = "RGB";
		if($aa['channels']==4) $gg = "CMYK";
        $bb = $image_info['XDensity'];
        //echo $size_fe;

?>
        <input type='hidden' name='denisty' class='denisty_1' value='<?php echo $bb ?>'>
        <input type='hidden' name='w' class='width_1' value='<?php echo $width_a ?>'>
        <input type='hidden' name='h' class='height_1' value='<?php echo $height_a ?>'>
     
        <input type='hidden' name='g' class='rgb_1' value='<?php echo $gg ?>'>
        <input type='hidden' name='channel' class='size_1' value='<?php echo $size_fe ?>'>

<?php

    }
    if($size == "small"){
        $image->writeImage($dir . $tmpName."-sm.".$saveFileType);

    }
   // echo "<img src=\"".$dir . $tmpName."-lg.".$saveFileType."\" width=\"".$width."\" height=\"".$height."\">";
    echo "<img src=\"/uploads/".$tmpName."-lg.".$saveFileType."\" width='300' height='169' style='position: relative'>";
    //echo $width;
}

thumbGenerator($_SERVER['DOCUMENT_ROOT'].'/uploads/',$name,$rs,'large',$size_file);
}
//thumbGenerator($_SERVER['DOCUMENT_ROOT'].'/modules/',$name,'psd','large');
//var_dump($_FILES);
//Валидация данных и запись их куда-нибудь
//...
//echo 'Получены данные:';
//var_dump($_POST);
?>