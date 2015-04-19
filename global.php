<?php
function_exists('date_default_timezone_set') && date_default_timezone_set ('Asia/Shanghai');
error_reporting(1);
include_once("define.php");
header('content-type:text/html;charset=utf-8');

function pA($arr) 
{
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}
function vD($arr) 
{
	echo '<pre>';
	var_dump($arr);
	echo '</pre>';
}
function CreateDir($dir, $isMore = true)
{
	if(file_exists($dir) && is_dir($dir))
	{
		return false;
	}
	else{
		mkdir($dir, 0777, $isMore);//否则就创造这个目录
		return true;
	}
}
function f_post($f,$bHtml=false)
{
	if(!isset($_POST[$f]))
		return "";
	if(is_array($_POST[$f]))
		return $_POST[$f];
		
	$str=$_POST[$f];

	if(!get_magic_quotes_gpc())
		return str_replace("$","\$",addslashes($str));
	else
		return str_replace("$","\$",$str);
}

function f_get($f)
{
	if(!isset($_GET[$f]))
		return "";
	if(!get_magic_quotes_gpc())
		return str_replace("$","\$",addslashes($_GET[$f]));
	else
		return str_replace("$","\$",$_GET[$f]);
}