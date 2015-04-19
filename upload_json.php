<?php
/**
 * KindEditor PHP
 *
 * 本PHP程序是演示程序，建议不要直接在实际项目中使用。
 * 如果您确定直接使用本程序，使用之前请仔细确认相关安全设置。
 *
 */

include 'global.php';
include 'inc_JSON.php';

$php_path	= dirname(__FILE__) . '/';
$php_url	= dirname($_SERVER['PHP_SELF']) . '/';

//文件保存目录路径
$save_path	= PATH_ROOT . '/temp/';


if(!is_uploaded_file($_FILES['imgFile']['tmp_name'])){
	alert("#请选择图片");//请选择图片
}
$recFile	= $_FILES["imgFile"];
if($recFile['size']>=512000){
	alert("#不能上传大于1M的文件");//不能上传大于1M的文件
}

$imagesArr	= array('jpg', 'jpeg', 'gif', 'bmp', 'png', 'JPG', 'JPEG', 'GIF', 'BMP', 'PNG');
//生成图片名字字符串
$arrName	= explode(".", $recFile["name"]);
$extension	= $arrName[count($arrName)-1];
if(!in_array($extension, $imagesArr)){
	alert("#不能上传除.jpg,.gif,.png,.bmp以外类型的文件");//不能上传除.jpg,.gif,.png,.bmp以外类型的文件
}

$fileName		= date('Ymd').time().mt_rand(0, 10).'.'.$extension;
$fileNameFull	= $save_path.$fileName;

$ind	= 0;//文件名变化增量
while ( file_exists($fileNameFull) != FALSE ){
	$fileName		= date('Ymd').time().mt_rand(0, 10).'.'.$extension;
	$fileNameFull	= $save_path.$fileName;
	$ind++;
}
move_uploaded_file($recFile['tmp_name'], $fileNameFull);

if(file_exists($fileNameFull))
{
	$json = new Services_JSON();
	echo $json->encode(array('error' => 0, 'url' => './temp/'.$fileName));
	exit;
}
else
{
	alert("#上传过程遇到未知异常，上传失败！");
}

function alert($msg) {
	header('Content-type: text/html; charset=UTF-8');
	$json = new Services_JSON();
	echo $json->encode(array('error' => 1, 'message' => $msg));
	exit;
}