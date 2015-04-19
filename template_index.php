<?php
	$index_html = <<< EOD
<?php
?>
<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-touch-fullscreen" content="yes" />
<meta name="format-detection" content="telephone=no" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">  
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<title>{$product_title}</title>
<link rel="stylesheet" href="css/base.css">
<style>
html{font-size:14px;}body,*{margin:0;padding:0;}body{font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:1rem;line-height:1.5rem;color:#6e0592;background:#FFF;}body,p,input,h1,h2,h3,h4,h5,h6,ul,li,dl,dt,dd,form{margin:0;padding:0;list-style:none;vertical-align:middle;font-weight:normal;}.header{width:100%;height:auto;line-height:0.5rem;display:block;}.header img{width:100%;height:auto;display:inline-block;}.info{padding:0.5rem 1.1rem;}.info .tit{font-size:1.3rem;color:#fff;width:auto;text-align:center;padding:0.3rem;background:#6e0592;display:inline-block;}.info,.menu-list{padding-right:1.1rem;padding-left:1.1rem;}.info{padding-top:0rem;padding-bottom:0.3rem;}
</style>
</head>
<body>
	<div class="header">
		<img src="images/header.jpg"/>
	</div>
	<div class="content">
				<img src="{$index_image}" />
	</div>
	<div class="info">
		<div class="tit">{$product_title}</div>
		<div class="detail">
			{$index_detail_cont}
		</div>
	</div>
	<div class="menu-list">
		<div class="row">
			<div class="line">
				<div class="box">
					<div class="string"></div>
					<div class="circle"></div>
					<div class="string"></div>
				</div>
			</div>
			<div class="btn1"><a href="detail.php">产品细节</a></div>
		</div>
		<div class="row">
			<div class="btn3" style="clear:both;"><a href="base.php">生产基地</a></div>
			<div class="btn1"><a href="factory.php">生产厂商</a></div>
		</div>
		
		<div class="row">
			<div class="btn3"><a href="express.php">仓储物流</a></div>
			<div class="btn1"><a href="check.php">产品检测</a></div>
		</div>
	</div>
	<!-- footer -->
	<div class="footer">
		<p>青岛慧众泰山壹伍叁贰商贸有限公司版权所有</p>
		<p>2002-2014 All Rights Reserved</p>
	</div>
</body>
</html>
EOD;
?>