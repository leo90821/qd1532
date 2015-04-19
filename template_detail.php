<?php
	$detail_html = <<< EOD
<?php
?>
<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-touch-fullscreen" content="yes" />
<meta name="format-detection" content="telephone=no" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<title>产品细节</title>
<link rel="stylesheet" href="css/base.css">
<script src="js/TouchSlide.1.1.source.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.lazyload.js"></script>
</head>
<body>
<div id="content">
	<div class="header">
		<div class="back">
			<a href="index.php"><i class="icon-back"></i></a>
		</div>
		<div class="tit">
			<h1>产品细节</h1>
		</div>
		<div class="menu"></div>
	</div>
	<div class="info">
		<p class="cont"></p>
		{$detail_image_list}	
	</div>
</div>
<script>
$(function(){
	$("img.lazy").lazyload({effect : "fadeIn"});
	$("body").scrollTop(1);
});
</script>
</body>
</html>
EOD;
?>