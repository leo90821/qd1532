<?php
include 'global.php';
include 'file_copy.php';
include 'class_resizeimg.php';

$_opt			= f_post('_opt');
$product_no		= f_post('product_no');
$product_title	= f_post('product_title');
$title_arr		= f_post('title');
$content_arr	= f_post('content');

// 接收图片和图片描述，共六类
$pImgs = f_post('pImgs');
$desc = f_post('desc');

// 生成商品编码目录
if (!$product_no) {
	$info = array('info'=>'error', 'msg'=>'商品编码不得为空！');
	exit(json_encode($info));
}
if (!$product_title) {
	$info = array('info'=>'error', 'msg'=>'商品标题不得为空！');
	exit(json_encode($info));
}

//商品目录
$productPath	= PATH_ROOT.'/'.$product_no;
//商品图片目录
$imgPath = $productPath.'/pic';
if (!CreateDir($productPath)) {
	$info = array('info'=>'error', 'msg'=>'该商品已经录入完成，不能重复录入！');
	exit(json_encode($info));
}
CreateDir($imgPath);

//复制图片、CSS、javascript
$css_src = "src/css";
$css_dst = $productPath."/css";
recurse_copy($css_src,$css_dst);

$img_src = "src/images";
$img_dst = $productPath."/images";
recurse_copy($img_src,$img_dst);

$js_src = "src/js";
$js_dst = $productPath."/js";
recurse_copy($js_src,$js_dst);


// 条目：array(array('t1'=>'c1'), array('t2'=>'c2'))
$tmp_arr = array();
$item_list = array();
foreach ($title_arr as $k=>$v) {
	foreach ($content_arr as $k1=>$v1) {
		if ($k == $k1) {
			if ($v == '' && $v1 == '') {
				break;
			}
			$item_list[] = $tmp_arr[] = array(trim($v)=>trim($v1));
		}
	}
}


// 移动图片到生成的目录下，命名格式：pic_0_0.jpg
// 0.首页大图,1:产品细节,2:产品检测,3:生产厂商,4:生产基地,5:仓储物流
// 'productDesc' => array(array('pic'=>array('XXX', 'XXX'), 'desc'=>'XXX'));
$tem_arr1 = array();
$menu = array();
$oimg = new ResizeImg(90);
$heightTemp	= 1000;
for ($i=0,$len=6; $i<$len; $i++) {
	$tmp = array();
	if (isset($pImgs[$i])) {
		foreach ($pImgs[$i] as $key => $value) {
			$path_info = pathinfo($value);
			$extension = $path_info['extension'];
			
			if(!CreateDir($imgPath)){
				copy($value, $imgPath.'/pic_'.$i.'_'.$key.'.'.$extension);
				$realfilename = $smallfilename = $imgPath.'/pic_'.$i.'_'.$key.'.'.$extension;
				if($i == 0){
					$heightTemp	= 450;
				}else{
					$heightTemp	= 1000;
				}
				$oimg->resizeimg($realfilename, $smallfilename, 320, $$heightTemp);
				$tmp[] = 'pic_'.$i.'_'.$key.'.'.$extension;
			}
		}
	}
	
	// 二维数组，存放图片地址
	$menu[$i]['pic'] = $tem_arr1[]['pic'] = $tmp;
	// 图片描述，存放图片描述
	//$menu[$i]['desc'] = $tem_arr1[]['desc'] = $desc[$i];
	$menu[$i]['desc'] = $tem_arr1[]['desc'] = str_replace("<p>", '<p class="cont">', $desc[$i]);
}


//生成首页
$index_image = './pic/'.$menu[0]['pic'][0];
if($menu[0]['pic'][0] == '') 
{
	$index_image	= './images/noimg.png';
}
$index_detail_cont = "";
foreach( $item_list as $arr_k => $arr_v){
	foreach( $arr_v as $item_list_key => $item_list_val){
	
		$index_detail_item = "
		
			<p>
				<span>{$item_list_key}</span><i>:</i>
				<span>{$item_list_val}</span>
			</p>
		
	";
		$index_detail_cont .= $index_detail_item;
	}
}
include "template_index.php";
file_put_contents( PATH_ROOT.'/'.$product_no.'/'."index.php",$index_html );


//生成产品细节页面
foreach( $menu[1]['pic'] as $k => $p ){
	//$detail_image_list .= '<li><a href="javascript:void(0);"><img src="./pic/'.$p.'" /></a></li>';
	$file_name = $imgPath."/{$p}";
	$size = getimagesize($file_name);
	
	$detail_image_list .= '<div class="pline" style="width:'.$size[0].'px;margin:1rem auto 0 auto;"><div class="img-panel" style="width:'.$size[0].'px;height:'.$size[1].'px;"><img class="lazy" src="./images/loading.gif" data-original="./pic/'.$p.'" /></div></div>';

}
include "template_detail.php";
file_put_contents( PATH_ROOT.'/'.$product_no.'/'."detail.php",$detail_html );


//生成产品检测页面
foreach( $menu[2]['pic'] as $k => $p ){
	//$check_image_list .= '<li><a href="javascript:void(0);"><img src="./pic/'.$p.'" /></a></li>';
	$file_name = $imgPath."/{$p}";
	$size = getimagesize($file_name);
	
	$check_image_list .= '<div class="pline" style="width:'.$size[0].'px;margin:1rem auto 0 auto;"><div class="img-panel" style="width:'.$size[0].'px;height:'.$size[1].'px;"><img class="lazy" src="./images/loading.gif" data-original="./pic/'.$p.'" /></div></div>';

}
include "template_check.php";
file_put_contents( PATH_ROOT.'/'.$product_no.'/'."check.php",$check_html );


//生成生产厂商页面
foreach( $menu[3]['pic'] as $k => $p ){
	$file_name = $imgPath."/{$p}";
	$size = getimagesize($file_name);
	$factory_image_list .= '<div class="pline" style="width:'.$size[0].'px;margin:1rem auto 0 auto;"><div class="img-panel" style="width:'.$size[0].'px;height:'.$size[1].'px;"><img class="lazy" src="./images/loading.gif" data-original="./pic/'.$p.'" /></div></div>';
}
$factory_info = $menu[3]['desc'];
include "template_factory.php";
file_put_contents( PATH_ROOT.'/'.$product_no.'/'."factory.php",$factory_html );


//生成生产生产基地页面
foreach( $menu[4]['pic'] as $k => $p ){
	$file_name = $imgPath."/{$p}";
	$size = getimagesize($file_name);
	
	$base_image_list .= '<div class="pline" style="width:'.$size[0].'px;margin:1rem auto 0 auto;"><div class="img-panel" style="width:'.$size[0].'px;height:'.$size[1].'px;"><img class="lazy" src="./images/loading.gif" data-original="./pic/'.$p.'" /></div></div>';
}
$base_info = $menu[4]['desc'];
include "template_base.php";
file_put_contents( PATH_ROOT.'/'.$product_no.'/'."base.php",$base_html );


//生成产品检测页面
foreach( $menu[5]['pic'] as $k => $p ){
	$file_name = $imgPath."/{$p}";
	$size = getimagesize($file_name);
	
	$express_image_list .= '<div class="pline" style="width:'.$size[0].'px;margin:1rem auto 0 auto;"><div class="img-panel" style="width:'.$size[0].'px;height:'.$size[1].'px;"><img class="lazy" src="./images/loading.gif" data-original="./pic/'.$p.'" /></div></div>';
}
include "template_express.php";
file_put_contents( PATH_ROOT.'/'.$product_no.'/'."express.php",$express_html );


//生成JSON文本文件
$writeArray		= array(
					'productId'	=> $product_no,
					'productTitle' => $product_title,	// 产品标题
					'productContent' => $tmp_arr,		// 产品条目
					'productDesc' => $tem_arr1 			// 产品图片及描述
				);

$resFile = fopen($productPath."/a.txt", "w");
$writeJson	= json_encode($writeArray);
fwrite($resFile, $writeJson);
fclose($resFile);

// 返回成功success
$info = array('info'=>'ok', 'msg'=>'恭喜您，该商品录入成功');
exit(json_encode($info));

?>