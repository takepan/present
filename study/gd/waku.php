<?php

$file = "sample.png";

list($width,$height) = getimagesize($file);

$img     = imagecreatefrompng($file);
$lineimg = imagecreatetruecolor($width+2,$height+2);

imagecolorallocate($lineimg,0,0,0);
imagecopy($lineimg,$img,1,1,0,0,$width,$height);

if (1 == 0) {
    mb_http_output("pass");
    header("Content-Type: image/png");
    imagepng($lineimg);
        
    imagedestroy($img);
    imagedestroy($lineimg);

} else {
    header('Content-Disposition: attachment; filename="'.$file.'"');
    // header('Content-Disposition: filename="'.$file.'"');
     
    // ファイルを読み込みダウンロードを実行
    // readfile($filepath);    
    imagepng($lineimg);
        
    // imagedestroy($img);
    // imagedestroy($lineimg);
}


