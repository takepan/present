<?php
ini_set('error_reporting', E_ALL & ~E_NOTICE);

$file = $_FILES['userfile']['tmp_name'];
if ($file) {
    if ($_FILES['userfile']['error'] == 0) {

    } else {
        switch ($_FILES['userfile']['error']) {
            case 2:
                exit('filesize exceeded');
                break;
            default:
                exit('error other');
                break;
        }
    }
$filename = $_FILES['userfile']['name'];

$rpos = strrpos($filename, ".");
if ($rpos !== false) {
    $filename = substr($filename, 0, $rpos) . "_waku." . substr($filename, $rpos + 1);
}
    $colorR = 255;
    $colorG = 255;
    $colorB = 255;

    // var_dump($_FILES);
    // exit;


    list($width,$height) = getimagesize($file);

    $img     = imagecreatefrompng($file);
    $lineimg = imagecreatetruecolor($width + 2, $height + 2);

    $white = imagecolorallocate($lineimg, $colorR, $colorG, $colorB);
    $black = imagecolorallocate($lineimg, 0, 0, 0);
    $red = imagecolorallocate($lineimg, 255, 0, 0);

    imagefilledrectangle ( $lineimg , 0 , 0 , $width + 2 , $height + 2 , $black );

    imagecopy($lineimg,$img,1,1,0,0,$width,$height);

    if (1 == 0) {
        mb_http_output("pass");
        header("Content-Type: image/png");
        imagepng($lineimg);
            
        imagedestroy($img);
        imagedestroy($lineimg);

    } else {
        header('Content-Disposition: attachment; filename="'.$filename.'"');
        // header('Content-Disposition: filename="'.$file.'"');
         
        // ファイルを読み込みダウンロードを実行
        // readfile($filepath);    
        imagepng($lineimg);
            
        // imagedestroy($img);
        // imagedestroy($lineimg);
    }
    exit;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <form enctype="multipart/form-data" action="" method="POST">
        <!-- MAX_FILE_SIZE は、必ず "file" input フィールドより前になければなりません -->
        <input type="hidden" name="MAX_FILE_SIZE" value="2000000" />
        <!-- input 要素の name 属性の値が、$_FILES 配列のキーになります -->
        このファイルをアップロード: <input name="userfile" type="file" />
        <input type="submit" value="ファイルを送信" />
    </form>
</body>
</html>
