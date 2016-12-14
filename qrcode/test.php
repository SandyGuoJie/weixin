<?php 
/* include "phpqrcode/phpqrcode.php";
$value="http://www.jb51.net";
$errorCorrectionLevel = "L";
$matrixPointSize = "4";
QRcode::png($value, false, $errorCorrectionLevel, $matrixPointSize);
exit;
 */
include('phpqrcode.php');
// 二维码数据
$data = 'http://www.jb51.net';
// 生成的文件名
$filename = '1112.jpg';
// 纠错级别：L、M、Q、H
$errorCorrectionLevel = 'H';
// 点的大小：1到10
$matrixPointSize = 4;
QRcode::png($data, $filename, $errorCorrectionLevel, $matrixPointSize, 2);

// file_put_contents('/vdb/www/html/spread/'.$file,$res);
?>