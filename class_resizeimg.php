<?php
	class ResizeImg
	{
		private  $sourceFile		= '';
		private  $targetFile		= '';
		private  $newWidth			= 25; //缩略图 宽度
		private  $newHeight			= 30;//缩略图 高度
		private  $method			= 'gd2';
		private  $imgType			= array('PNG', 'JPG', 'GIF');
		private  $imgTypeIndex		= array(1, 2, 3);
		private  $quality			= 80;
		private  $mode				= 0666;
		
		public function __construct($quality=80)
		{
			
			$this->quality	= $quality;
		}
		
		public function resizeimg($sourceFile, $targetFile, $newWidth = 320, $newHeight = 1000)
		{
			$this->sourceFile	= $sourceFile;
			$this->targetFile	= $targetFile;
			$this->newWidth		= $newWidth;
			$this->newHeight	= $newHeight;
			if(empty($this->sourceFile)){
				return false;
			}
			
			/**
			* get image information
			* 0 => width
			* 1 => height
			* 2 => 1 = GIF,2 = JPG,3 = PNG,4 = SWF,5 = PSD,6 = BMP,7 = TIFF(intel byte order),8 = TIFF(motorola byte order),9 = JPC,10 = JP2,11 = JPX,12 = JB2,13 = SWC,14 = IFF,15 = WBMP,16 = XBM
			* 3 => width='' height=''
			*/
			$imgInfo		= getimagesize($this->sourceFile);
			if(!$imgInfo){
				return false;
			}
			if(!in_array($imgInfo[2], $this->imgTypeIndex) && ($this->method = 'gd2' || $this->method = 'gd1')){
				return false;
			}			
			
			$sourceWidth		= $imgInfo[0];
			$sourceHeight		= $imgInfo[1];

			//如果原图的尺寸大于就进行处理，不大于，就保持原尺寸
			if($sourceWidth>$this->newWidth||$sourceHeight>$this->newHeight) {
				$ratio				= max($sourceWidth/$this->newWidth, $sourceHeight/$this->newHeight);
				$targetWidth		= $sourceWidth/$ratio;
				$targetHeight		= $sourceHeight/$ratio;
			}else{
				//$targetWidth=$sourceWidth;
				//$targetHeight=$sourceHeight;
				//直接复制后返回
				copy($this->sourceFile,$this->targetFile);
				return true;
			}		



			
			switch ($this->method){
				case 'gd1':
					if(!function_exists('imagecreatefromjpeg')){
						return false;
					}
					$targetImg		= imagecreate($targetWidth, $targetHeight);
					switch ($imgInfo[2]){
							case 1:
								$sourceImg		= imagecreatefromgif($this->sourceFile);
								if(!$sourceImg){
									return false;
								}				
									imagecopyresized($targetImg, $sourceImg, 0, 0, 0, 0, $targetWidth, $targetHeight, $sourceWidth, $sourceHeight);
									imagegif($targetImg, $this->targetFile);
								break;
							case 2:
								$sourceImg		= imagecreatefromjpeg($this->sourceFile);
								if(!$sourceImg){
									return false;
								}				
								imagecopyresized($targetImg, $sourceImg, 0, 0, 0, 0, $targetWidth, $targetHeight, $sourceWidth, $sourceHeight);
								imagejpeg($targetImg, $this->targetFile, $this->quality);
								break;
							case 3:
								$sourceImg		= imagecreatefrompng($this->sourceFile);
								if(!$sourceImg){
									return false;
								}				
								imagecopyresized($targetImg, $sourceImg, 0, 0, 0, 0, $targetWidth, $targetHeight, $sourceWidth, $sourceHeight);
								imagepng($targetImg, $this->targetFile);
								break;						
					}
					imagedestroy($targetImg);
					imagedestroy($sourceImg);
					break;
				case 'gd2':
						if(!function_exists('imagecreatefromjpeg') || !function_exists('imagecreatetruecolor')){
							return false;
						}
						$targetImg		= imagecreatetruecolor($targetWidth, $targetHeight);
						switch ($imgInfo[2]){
							case 1:
								$sourceImg		= imagecreatefromgif($this->sourceFile);
								if(!$sourceImg){
									return false;
								}				
								imagecopyresampled($targetImg, $sourceImg, 0, 0, 0, 0, $targetWidth, $targetHeight, $sourceWidth, $sourceHeight);
								imagegif($targetImg, $this->targetFile);
								break;
							case 2:
								$sourceImg		= imagecreatefromjpeg($this->sourceFile);
								if(!$sourceImg){
									return false;
								}				
								imagecopyresampled($targetImg, $sourceImg, 0, 0, 0, 0, $targetWidth, $targetHeight, $sourceWidth, $sourceHeight);
								imagejpeg($targetImg, $this->targetFile, $this->quality);
								break;
							case 3:
								$sourceImg		= imagecreatefrompng($this->sourceFile);
								if(!$sourceImg){
									return false;
								}				
								imagecopyresampled($targetImg, $sourceImg, 0, 0, 0, 0, $targetWidth, $targetHeight, $sourceWidth, $sourceHeight);
								imagepng($targetImg, $this->targetFile);
								break;
						}
						imagedestroy($targetImg);
						imagedestroy($sourceImg);				
					break;
				}
				chmod($this->targetFile, $this->mode);
				$targetImgInfo		= getimagesize($this->targetFile);
				if(!$targetImgInfo){
					@unlink($this->targetFile);
					return false;
				}else{
					return true;
				}
			}//END FUNCTION	
			
			function setNewWH($newWidth, $newHight)
			{
				$this->newWidth			= $newWidth;
				$this->newHeight		= $newHight;
			}

			function setImgType($imgType, $imgTypeIndex)
			{
				$this->imgType			= $imgType;
				$this->imgTypeIndex		= $imgTypeIndex;
			}
			
			function setMothod($mothod)
			{
				$this->setMothod		= $mothod;
			}
			
			function setMode($mode)
			{
				$this->mode				= $mode;
			}
			
			function getTargetFile()
			{
				return $this->targetFile;
			}
		}
?>