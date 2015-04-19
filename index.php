<?php
include 'global.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>青岛壹伍叁贰商品目录生成工具</title>
<meta name="keywords" content="青岛壹伍叁贰">
<meta name="description" content="青岛壹伍叁贰 ">
<link rel="stylesheet" href="./public/style.css" type="text/css">
<link rel="stylesheet" href="./public/default.css" type="text/css">
<!--文件上传样式-->
<link rel="stylesheet" href="./public/themes/default/default.css" />
<script type="text/javascript" src="./public/jquery.js"></script>
<script type="text/javascript" src="./public/artDialog.js"></script>
<!--文件上传js-->
<script src="./public/kindeditor.js"></script>
<script src="./public/zh_CN.js"></script>
<script src="./public/ke_dialog.js"></script>

<style type="text/css">
	#add_content{
		padding:4px;
		position:absolute;
		right:80px;
		top:35px;
		cursor:pointer;
		background:#1f6598;
		color:#fff;
		font-family:bold;
	}
	#content-table-up tr{
		height:100px;
	}
	textarea,input { font-size:13px; }
	.desc { width:595px;height:60px;border:1px solid #a8a8a8;max-width:595px;min-height:60px; }
	#pImgPreview1 label {display:inline-block;padding-right:5px;}
	#pImgPreview1 label img { width:100px;}
	#pImgPreview2 label {display:inline-block;padding-right:5px;}
	#pImgPreview2 label img {width:100px;}
	#pImgPreview3 label {display:inline-block;padding-right:5px;}
	#pImgPreview3 label img { width:100px; }
	#pImgPreview4 label {display:inline-block;padding-right:5px;}
	#pImgPreview4 label img { width:100px; }
	#pImgPreview5 label {display:inline-block;padding-right:5px;}
	#pImgPreview5 label img { width:100px; }
	#pImgPreview6 label {display:inline-block;padding-right:5px;}
	#pImgPreview6 label img { width:100px; }
</style>
</head>
<body>
<div id="toppage" class="w960">
	<div class="mcontent nop" style="border:0 none;">
		<div class="form_hd">
			<ul class="c mt8 mb8">
				<li class="fcitic f16 bold">
					<h1>青岛壹伍叁贰商品目录生成工具</h1>
				</li>
			</ul>
			<div id="id_return"></div>
		</div>
	</div>
</div>
<div id="page" class="w960 mt5">
	<div class="main-content-bd mcontent" id="">
		<form action="/xxx/xxx/add" id="base_form" method="post">
			<input id="_opt" type="hidden" name="_opt" value="hd3gds893">
			<div class="group mb10" style="padding:20px 20px 5px 150px;">
				<div style="display: block;" id="id_div_edit" class="nodisplay">
					<b class="f14 youmkt">请您填写商品编码</b>
					<br>
				</div>
			</div>
			<table class="content-table">
				<tbody>
				<!--商品编码-->
				<tr>
					<td class="c red tableborder w101"></td>
					<td class="td_title_edit"><b class="youmkt">商品编码</b><span class="red">*</span>&nbsp;&nbsp;</td>
					<td class="td_content_edit">
						<input id="id_product_no" name="product_no" class="text w200" type="text">
					</td>
				</tr>
				
				<!--商品标题-->
				<tr>
					<td class="c red tableborder w101"></td>
					<td class="td_title_edit"><b class="youmkt">商品标题</b><span class="red">*</span>&nbsp;&nbsp;</td>
					<td class="td_content_edit">
						<input id="id_product_title" name="product_title"  class="text w200" type="text">
					</td>
				</tr>
				</tbody>
			</table>
			<div class="group mb10" style="padding:20px 20px 5px 150px;">
				<div style="display: block;" id="id_div_edit" class="nodisplay">
					<b class="f14 youmkt">请您填写商品基本信息</b>
					<br>
				</div>
			</div>
			<table class="content-table" id="content-table">
				<tbody>
				<!--条目1-->
				<tr>
					<td class="c red w101"></td>
					<td class="td_title_edit_noborder"><b class="youmkt">条目一</b><span class="red">*</span>&nbsp;&nbsp;</td>
					<td class="td_content_edit_noborder">
						<input  id="id_aaa_title" class="post_title text"  name="title[]" class="text w200" type="text"><br >
					</td>
				</tr>
				<tr>
					<td class="c red tableborder w101"></td>
					<td class="td_title_edit"></td>
					<td class="td_content_edit">
						<textarea class="post_content" name="content[]" id="id_aaa_content"></textarea>
					</td>
				</tr>
				
				<!--条目2-->
				<tr>
					<td class="c red w101"></td>
					<td class="td_title_edit_noborder"><b class="youmkt">条目二</b><span class="red">*</span>&nbsp;&nbsp;</td>
					<td class="td_content_edit_noborder">
						<input  id="id_bbb_title" class="post_title text"  name="title[]" class="text w200" type="text"><br >
					</td>
				</tr>
				<tr>
					<td class="c red tableborder w101"></td>
					<td class="td_title_edit"></td>
					<td class="td_content_edit">
						<textarea class="post_content" name="content[]" id="id_bbb_content"></textarea>
					</td>
				</tr>
				
				<!--条目3-->
				<tr>
					<td class="c red w101"></td>
					<td class="td_title_edit_noborder"><b class="youmkt">条目三</b><span class="red">*</span>&nbsp;&nbsp;</td>
					<td class="td_content_edit_noborder">
						<input  id="id_ccc_title" class="post_title text" name="title[]" class="text w200" type="text"><br >
					</td>
				</tr>
				<tr>
					<td class="c red tableborder w101"></td>
					<td class="td_title_edit"></td>
					<td class="td_content_edit">
						<textarea class="post_content" name="content[]" id="id_ccc_content"></textarea>
						<span id="add_content">增加一条条目</span>
					</td>
				</tr>
				
				<!--条目4-->
				<tr>
					<td class="c red w101"></td>
					<td class="td_title_edit_noborder"><b class="youmkt">条目四</b><span class="red">*</span>&nbsp;&nbsp;</td>
					<td class="td_content_edit_noborder">
						<input  id="id_ddd_title" class="post_title text"  name="title[]" class="text w200" type="text"><br >
					</td>
				</tr>
				<tr>
					<td class="c red tableborder w101"></td>
					<td class="td_title_edit"></td>
					<td class="td_content_edit">
						<textarea class="post_content" name="content[]" id="id_ddd_content"></textarea>
					</td>
				</tr>
				
				<!--条目5-->
				<tr>
					<td class="c red w101"></td>
					<td class="td_title_edit_noborder"><b class="youmkt">条目五</b><span class="red">*</span>&nbsp;&nbsp;</td>
					<td class="td_content_edit_noborder">
						<input  id="id_eee_title" class="post_title text"  name="title[]" class="text w200" type="text"><br >
					</td>
				</tr>
				<tr>
					<td class="c red tableborder w101"></td>
					<td class="td_title_edit"></td>
					<td class="td_content_edit">
						<textarea class="post_content" name="content[]" id="id_eee_content"></textarea>
					</td>
				</tr>
				
				<!--条目6-->
				<tr>
					<td class="c red w101"></td>
					<td class="td_title_edit_noborder"><b class="youmkt">条目六</b><span class="red">*</span>&nbsp;&nbsp;</td>
					<td class="td_content_edit_noborder">
						<input  id="id_fff_title" class="post_title text"  name="title[]" class="text w200" type="text"><br >
					</td>
				</tr>
				<tr>
					<td class="c red tableborder w101"></td>
					<td class="td_title_edit"></td>
					<td class="td_content_edit">
						<textarea class="post_content" name="content[]" id="id_fff_content"></textarea>
					</td>
				</tr>
				
				<!--条目7-->
				<tr>
					<td class="c red w101"></td>
					<td class="td_title_edit_noborder"><b class="youmkt">条目七</b><span class="red">*</span>&nbsp;&nbsp;</td>
					<td class="td_content_edit_noborder">
						<input  id="id_ggg_title" class="post_title text"  name="title[]" class="text w200" type="text"><br >
					</td>
				</tr>
				<tr>
					<td class="c red tableborder w101"></td>
					<td class="td_title_edit"></td>
					<td class="td_content_edit">
						<textarea class="post_content" name="content[]" id="id_ggg_content"></textarea>
					</td>
				</tr>
				
				</tbody>
			</table>
			
			<div class="group mb10" style="padding:20px 20px 5px 150px;">
				<div style="display: block;" id="id_div_edit" class="nodisplay">
					<b class="f14 youmkt">请您上传相关图片并且进行描述</b>
					<br>
				</div>
			</div>
			
			<table class="content-table" id="content-table-upd">
				<!--上传1-->
				<tr>
					<td class="c red tableborder w101"></td>
					<td class="td_title_edit_noborder"><b class="youmkt">上传一(首页大图)</b></td>
					<td class="td_content_edit">
						<div class="td_content_edit">
							<div class="fleft" id="id_uploadimage">
								<input type="button" class="button" value="上传" id="id_button_uploadimage1" />
							</div>
							<div class="confirm2 ">首页大图只能上传<b class="red">1</b>&nbsp;张图片，单张图片容量不超过&nbsp;<b class="red">1M</b>&nbsp;</div>
							
							<div>
								<fieldset class="group2 ml5" style="clear:both;">
									<legend>图片列表</legend>
									<div id="pImgPreview1">
									</div>
								</fieldset>
							</div>
							<div style="margin-top:5px;display:none;"><textarea placeholder="您可以对产品进行描述。。" class="desc" name="desc[]"></textarea></div>
							<div class="clear"></div>
						</div>
					</td>
				</tr>
				
				<!--上传2-->
				<tr>
					<td class="c red tableborder w101"></td>
					<td class="td_title_edit_noborder"><b class="youmkt">上传二(产品细节)</b></td>
					<td class="td_content_edit">
						<div class="td_content_edit">
							<div class="fleft" id="id_uploadimage">
								<input type="button" class="button" value="上传" id="id_button_uploadimage2" />
							</div>
							<div class="confirm2 ">产品细节最多保存&nbsp;<b class="red">5</b>&nbsp;张图片，单张图片容量不超过&nbsp;<b class="red">1M</b>&nbsp;</div>
							
							<div>
								<fieldset class="group2 ml5" style="clear:both;">
									<legend>图片列表</legend>
									<div id="pImgPreview2">
									</div>
								</fieldset>
							</div>
							<div style="margin-top:5px;display:none;"><textarea placeholder="您可以对产品细节进行描述。。" class="desc" name="desc[]"></textarea></div>
							<div class="clear"></div>
						</div>
					</td>
				</tr>
				
				<!--上传3-->
				<tr>
					<td class="c red tableborder w101"></td>
					<td class="td_title_edit_noborder"><b class="youmkt">上传三(产品检测)</b></td>
					<td class="td_content_edit">
						<div class="td_content_edit">
							<div class="fleft" id="id_uploadimage">
								<input type="button" class="button" value="上传" id="id_button_uploadimage3" />
							</div>
							<div class="confirm2 ">产品检测最多保存&nbsp;<b class="red">5</b>&nbsp;张图片，单张图片容量不超过&nbsp;<b class="red">1M</b>&nbsp;</div>
							
							<div>
								<fieldset class="group2 ml5" style="clear:both;">
									<legend>图片列表</legend>
									<div id="pImgPreview3">
									</div>
								</fieldset>
							</div>
							<div style="margin-top:5px;display:none;"><textarea placeholder="您可以对产品检测进行描述。。" class="desc" name="desc[]"></textarea></div>
							<div class="clear"></div>
						</div>
					</td>
				</tr>
				
				<!--上传4-->
				<tr>
					<td class="c red tableborder w101"></td>
					<td class="td_title_edit_noborder"><b class="youmkt">上传四(生产厂商)</b></td>
					<td class="td_content_edit">
						<div class="td_content_edit">
							<div class="fleft" id="id_uploadimage">
								<input type="button" class="button" value="上传" id="id_button_uploadimage4" />
							</div>
							<div class="confirm2 ">生产厂商最多保存&nbsp;<b class="red">5</b>&nbsp;张图片，单张图片容量不超过&nbsp;<b class="red">1M</b>&nbsp;</div>
							
							<div>
								<fieldset class="group2 ml5" style="clear:both;">
									<legend>图片列表</legend>
									<div id="pImgPreview4">
									</div>
								</fieldset>
							</div>
							<div style="margin-top:5px;">
							<textarea placeholder="您可以对生产厂商进行描述。。" class="desc" name="desc[]" style="width:auto;height:100px;"></textarea></div>
							<div class="clear"></div>
						</div>
					</td>
				</tr>
				
				<!--上传5-->
				<tr>
					<td class="c red tableborder w101"></td>
					<td class="td_title_edit_noborder"><b class="youmkt">上传五(生产基地)</b></td>
					<td class="td_content_edit">
						<div class="td_content_edit">
							<div class="fleft" id="id_uploadimage">
								<input type="button" class="button" value="上传" id="id_button_uploadimage5" />
							</div>
							<div class="confirm2 ">生产基地最多保存&nbsp;<b class="red">5</b>&nbsp;张图片，单张图片容量不超过&nbsp;<b class="red">1M</b>&nbsp;</div>
							
							<div>
								<fieldset class="group2 ml5" style="clear:both;">
									<legend>图片列表</legend>
									<div id="pImgPreview5">
									</div>
								</fieldset>
							</div>
							<div style="margin-top:5px;">
							<textarea placeholder="您可以对生产基地进行描述。。" class="desc" name="desc[]" style="width:auto;height:100px;"></textarea>
							<div class="clear"></div>
						</div>
					</td>
				</tr>
				
				<!--上传6-->
				<tr>
					<td class="c red tableborder w101"></td>
					<td class="td_title_edit_noborder"><b class="youmkt">上传六(仓储物流)</b></td>
					<td class="td_content_edit">
						<div class="td_content_edit">
							<div class="fleft" id="id_uploadimage">
								<input type="button" class="button" value="上传" id="id_button_uploadimage6" />
							</div>
							<div class="confirm2 ">仓储物流最多保存&nbsp;<b class="red">5</b>&nbsp;张图片，单张图片容量不超过&nbsp;<b class="red">1M</b>&nbsp;</div>
							
							<div>
								<fieldset class="group2 ml5" style="clear:both;">
									<legend>图片列表</legend>
									<div id="pImgPreview6">
									</div>
								</fieldset>
							</div>
							<div style="margin-top:5px;display:none;"><textarea placeholder="您可以对仓储物流进行描述。。" class="desc" name="desc[]"></textarea></div>
							<div class="clear"></div>
						</div>
					</td>
				</tr>
				
			</table>
			<div class="group mb10" style="padding:20px 20px 5px 150px;">
				<div style="display: block;" id="id_div_edit" class="">
					<br>
				</div>
			</div>
			<table class="content-table" style="">
				<tbody>
				<tr>
					<td class="c red tableborder w101"></td>
					<td class="td_title_edit" style=""></td>
					<td class="td_content_edit">
						<div class="ml5">
							<br>
							<input id="base_form_submit" value="点击生成商品目录" class="essubmit f14 bold" onclick="" type="button">
							<br>
						</div>
					</td>
				</tr>
				</tbody>
			</table>
		</form>
	</div>
</div>

<script>

$(document).ready(function(){
	
	// dialog defaults
	(function (d) {
		d['okValue'] = '确定';
		d['cancelValue'] = '取消';
		d['title'] = '提示';
		d['lock'] = true;
		d['fixed'] = true;
	})(art.dialog.defaults);
	
	// 共七条隐藏后四条
	var obj = $('#content-table');
	obj.find('tr:gt(5)').hide();
	
	// 修正FF刷新input仍有值的问题
	$('#id_product_no').val('');
	$('#id_product_title').val('');
	$('textarea').val('');
	$("input[name='title[]']").val('');
	
	$('textarea').on('focus', function () {
		$(this).css('border', '1px solid #1f6598');
	}).on('blur', function () {
		$(this).css('border', '1px solid #ccc');
	});
	
	$(document).on('click', '#add_content', function (e) {
		e.preventDefault;
		var len = obj.find('tr:visible').length;
		console.log(len);
		if (len == 14) {
			return false;
		}
		// 增加两条
		obj.find('tr:eq('+ len +')').show().end().find('tr:eq('+ (len + 1) +')').show();
		// 移除前一条的span
		var html = $(this).clone(true);
		$(this).remove();
		obj.find('tr:eq('+ (len+1) +') .td_content_edit').append(html);
		return false;
	});

	$("#base_form_submit").click(function(e) {
		var objNo = $('#id_product_no');
		var objTitle = $('#id_product_title');
		var productId = objNo.val();
		var productTitle = objTitle.val();
		
		if (!productId || !productTitle) {
			art.dialog({
				content: '<p style="color:#FF0000;">商品编号和标题不得为空！</p>',
				ok:function () {
					objNo.focus();
				},
				cancel:false
			});
			return false;
		}
		
//		// 必须为数字
//		if (!/^\d+$/.test(productId)) {
//			art.dialog({
//				content: '<p style="color:#FF0000;">商品编码必须位数字哦</p>',
//				ok:function () {
//					objNo.focus();
//				},
//				cancel:false
//			});
//			return false;
//		}
		
		var registerForm = $('#base_form');
		if (1){
			var dialog = art.dialog({
				id:'artdialog',
				content:'正在生成中...',
				ok:false,
				cancel:false
			});
			//获得所有上传图像
			var post_images1 = new Array();
			$(".post_image1").each(
				function(i){
					post_images1[i] = $(this).val();
				}
			);
			var post_images2 = new Array();
			$(".post_image2").each(
				function(i){
					post_images2[i] = $(this).val();
				}
			);var post_images3 = new Array();
			$(".post_image3").each(
				function(i){
					post_images3[i] = $(this).val();
				}
			);var post_images4 = new Array();
			$(".post_image4").each(
				function(i){
					post_images4[i] = $(this).val();
				}
			);
			var post_images5 = new Array();
			$(".post_image5").each(
				function(i){
					post_images5[i] = $(this).val();
				}
			);
			var post_images6 = new Array();
			$(".post_image6").each(
				function(i){
					post_images6[i] = $(this).val();
				}
			);
			var post_images = new Array();
			post_images[0] = post_images1;
			post_images[1] = post_images2;
			post_images[2] = post_images3;
			post_images[3] = post_images4;
			post_images[4] = post_images5;
			post_images[5] = post_images6;
			//获得所有条目标题
			var post_title = new Array();
			$(".post_title").each(
				function(i){
					post_title[i] = $(this).val();
				}
			);
			//获得所有条目内容
			var post_content = new Array();
			$(".post_content").each(
				function(i){
					post_content[i] = $(this).val();
				}
			);
			//获得所有描述内容
			var post_desc = new Array();
			$(".desc").each(
				function(i){
					post_desc[i] = $(this).val();
				}
			);			
			//创建对象
			var data = {
				'_opt':$("#_opt").val(),
				'product_no':productId,
				'product_title':productTitle,
				'title':post_title,
				'content':post_content,
				'pImgs':post_images,
				'desc':post_desc
			};

			$.post(
				"./index_opt.php", data, function(data){
					if (data.info == 'error') {
						dialog.close();
						art.dialog({
							content: '<p style="color:#FF0000;">'+data.msg+'</p>',
							ok:true,
							cancel:false
						});
						return false;
					}else if (data.info == 'ok') {
						dialog.close();
						art.dialog({
							content: data.msg,
							ok: function () {
								window.location.reload();
							},
							cancel:false
						});
						return true;
					}
				},
				'json'
			);
		}
		
	});

});
</script>
<script type="text/javascript">
var editorImg;   
KindEditor.ready(function(K) {
	editorImg = K.editor({
		allowFileManager : true,
		uploadJson : './upload_json.php'
	});
	K('#id_button_uploadimage1').click(function() {
		var nowCount = K('#pImgPreview1').children('label').length;
		if (nowCount >= 1)
		{
			keDialog('', '<br>首页图片只能上传一张！');
			return false;
		}
		editorImg.loadPlugin('image', function() {
			editorImg.plugin.imageDialog({
				showRemote : false,
				//imageUrl : K('#url3').val(),
				clickFn : function(url, title, width, height, border, align) {
					var div = K('#pImgPreview1');
					var newUrl	= url.split('temp/');
					var nowUrl	= newUrl[newUrl.length-1];
					//alert(newUrl[newUrl.length-1]);
					var imgstr	= '<label>' + 
									'<img src="./temp/' + (nowUrl) + '" />' + 
									'<ul>' +
									'<li>[<a class="delImg red" onclick="delImg(jQuery(this));" href="javascript:void(0);">X</a>]</li>' + 
									'</ul>' + 
									'<input type="hidden" class="post_image1"  value="./temp/' + (nowUrl) + '" name="pImgs[0][]" />' +
									'</label>';
					div.append(imgstr);
					editorImg.hideDialog();
				}
			});
		});
	});
	K('#id_button_uploadimage2').click(function() {
		var nowImgNum	= jQuery('#pImgPreview').children('label').length;
		if (nowImgNum >= 5)
		{
			keDialog('', '超过允许保存的最大数量 5 张，请删除后添加新图片！');
		}
		else
		{
			//alert('__PUBLIC__');
			editorImg.loadPlugin('multiimage', function() {
				editorImg.plugin.multiImageDialog({
					showRemote : true,
					//imageUrl : K('#url1').val(),
					clickFn : function(urlList) {
						var div = K('#pImgPreview2');
						//div.html('');
						K.each(urlList, function(i, data) {
							var imgstr	= '<label>' + 
							'<img src="' + (data.url) + '" />' + 
							'<ul>' +
							'<li>[<a class="delImg red" onclick="delImg(jQuery(this));" href="javascript:void(0);">X</a>]</li>' + 
							'</ul>' + 
							'<input type="hidden" class="post_image2" value="' + (data.url) + '" name="pImgs[1][]" />' +
							'</label>';
							nowImgNum++;
							if (nowImgNum <= 5)
							{
								div.append(imgstr);
							}
						});
						//alert(nowImgNum);
						editorImg.hideDialog();
					}
				});
			});
		}
	});
	K('#id_button_uploadimage3').click(function() {
		var nowImgNum	= jQuery('#pImgPreview').children('label').length;
		if (nowImgNum >= 5)
		{
			keDialog('', '超过允许保存的最大数量 5 张，请删除后添加新图片！');
		}
		else
		{
			//alert('__PUBLIC__');
			editorImg.loadPlugin('multiimage', function() {
				editorImg.plugin.multiImageDialog({
					showRemote : true,
					//imageUrl : K('#url1').val(),
					clickFn : function(urlList) {
						var div = K('#pImgPreview3');
						//div.html('');
						K.each(urlList, function(i, data) {
							var imgstr	= '<label>' + 
							'<img src="' + (data.url) + '" />' + 
							'<ul>' +
							'<li>[<a class="delImg red" onclick="delImg(jQuery(this));" href="javascript:void(0);">X</a>]</li>' + 
							'</ul>' + 
							'<input type="hidden" class="post_image3"  value="' + (data.url) + '" name="pImgs[2][]" />' +
							'</label>';
							nowImgNum++;
							if (nowImgNum <= 5)
							{
								div.append(imgstr);
							}
						});
						//alert(nowImgNum);
						editorImg.hideDialog();
					}
				});
			});
		}
	});
	K('#id_button_uploadimage4').click(function() {
		var nowImgNum	= jQuery('#pImgPreview').children('label').length;
		if (nowImgNum >= 5)
		{
			keDialog('', '超过允许保存的最大数量 5 张，请删除后添加新图片！');
		}
		else
		{
			//alert('__PUBLIC__');
			editorImg.loadPlugin('multiimage', function() {
				editorImg.plugin.multiImageDialog({
					showRemote : true,
					//imageUrl : K('#url1').val(),
					clickFn : function(urlList) {
						var div = K('#pImgPreview4');
						//div.html('');
						K.each(urlList, function(i, data) {
							var imgstr	= '<label>' + 
							'<img src="' + (data.url) + '" />' + 
							'<ul>' +
							'<li>[<a class="delImg red" onclick="delImg(jQuery(this));" href="javascript:void(0);">X</a>]</li>' + 
							'</ul>' + 
							'<input type="hidden" class="post_image4"  value="' + (data.url) + '" name="pImgs[3][]" />' +
							'</label>';
							nowImgNum++;
							if (nowImgNum <= 5)
							{
								div.append(imgstr);
							}
						});
						//alert(nowImgNum);
						editorImg.hideDialog();
					}
				});
			});
		}
	});
	K('#id_button_uploadimage5').click(function() {
		var nowImgNum	= jQuery('#pImgPreview').children('label').length;
		if (nowImgNum >= 5)
		{
			keDialog('', '超过允许保存的最大数量 5 张，请删除后添加新图片！');
		}
		else
		{
			//alert('__PUBLIC__');
			editorImg.loadPlugin('multiimage', function() {
				editorImg.plugin.multiImageDialog({
					showRemote : true,
					//imageUrl : K('#url1').val(),
					clickFn : function(urlList) {
						var div = K('#pImgPreview5');
						//div.html('');
						K.each(urlList, function(i, data) {
							var imgstr	= '<label>' + 
							'<img src="' + (data.url) + '" />' + 
							'<ul>' +
							'<li>[<a class="delImg red" onclick="delImg(jQuery(this));" href="javascript:void(0);">X</a>]</li>' + 
							'</ul>' + 
							'<input type="hidden" class="post_image5"  value="' + (data.url) + '" name="pImgs[4][]" />' +
							'</label>';
							nowImgNum++;
							if (nowImgNum <= 5)
							{
								div.append(imgstr);
							}
						});
						//alert(nowImgNum);
						editorImg.hideDialog();
					}
				});
			});
		}
	});
	K('#id_button_uploadimage6').click(function() {
		var nowImgNum	= jQuery('#pImgPreview').children('label').length;
		if (nowImgNum >= 5)
		{
			keDialog('', '超过允许保存的最大数量 5 张，请删除后添加新图片！');
		}
		else
		{
			//alert('__PUBLIC__');
			editorImg.loadPlugin('multiimage', function() {
				editorImg.plugin.multiImageDialog({
					showRemote : true,
					//imageUrl : K('#url1').val(),
					clickFn : function(urlList) {
						var div = K('#pImgPreview6');
						//div.html('');
						K.each(urlList, function(i, data) {
							var imgstr	= '<label>' + 
							'<img src="' + (data.url) + '" />' + 
							'<ul>' +
							'<li>[<a class="delImg red" onclick="delImg(jQuery(this));" href="javascript:void(0);">X</a>]</li>' + 
							'</ul>' + 
							'<input type="hidden" class="post_image6"  value="' + (data.url) + '" name="pImgs[5][]" />' +
							'</label>';
							nowImgNum++;
							if (nowImgNum <= 5)
							{
								div.append(imgstr);
							}
						});
						//alert(nowImgNum);
						editorImg.hideDialog();
					}
				});
			});
		}
	});
});
var editor;
KindEditor.ready(function(K) {
	editor = K.create('textarea[name="desc[]"]', {
		allowFileManager : false,
		items : [],
		afterCreate : function() {
			//必须要加下面这句，否则，提交获取不到值
			this.sync(); 
			var self = this;
			K.ctrl(document, 13, function() {
				self.sync();
				K('form[name=desc]')[0].submit();
			});
			K.ctrl(self.edit.doc, 13, function() {
				self.sync();
				K('form[name=desc]')[0].submit();
			});
		},
		afterBlur:function(){
			//必须要加下面这句，否则，提交获取不到值
			this.sync(); 
		} 
	});
});
KindEditor.ready(function(K) {
	editor = K.create('textarea[name="desc[]"]', {
		allowFileManager : false,
		items : [],
		afterCreate : function() {
			//必须要加下面这句，否则，提交获取不到值
			this.sync(); 
			var self = this;
			K.ctrl(document, 13, function() {
				self.sync();
				K('form[name=desc]')[0].submit();
			});
			K.ctrl(self.edit.doc, 13, function() {
				self.sync();
				K('form[name=desc]')[0].submit();
			});
		},
		afterBlur:function(){
			//必须要加下面这句，否则，提交获取不到值
			this.sync(); 
		} 
	});
});
function delImg(obj)
{
	if(!confirm("确定要删除该图片?"))
		return false;
	obj.parents('label').remove();
}
</script>
<div id="footer" class="w960">
	<div class="logo-menu" style="width:800px;">
		<span>Copyright &copy; 2012-2015 北京京安利德科技有限公司 版权所有</span>
		<a href="###"></a> <a href="###"></a> <a href="###"></a>
	</div>
</div>

</body>
</html>