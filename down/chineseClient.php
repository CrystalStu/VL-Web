<?php
date_timezone_set('PRC');
$ct = time();
if (abs($_GET['t'] / 1000 - $ct) > 5) {
    exit("Invaild Link.");
}
$fileName = 'chineseClient.zip';
$clientFileName = "chineseClient" . $_GET['t'] . ".zip";
$downloadRate = 100;
header('Cache-control: private');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename='.$clientFileName);
header ("Accept-Ranges: bytes");
flush();
$file = fopen($fileName, "r");
while (!feof($file)) {
set_time_limit(0);
print fread($file, round($downloadRate * 1024));
flush();
ob_flush();
sleep(1);
}
fclose($file);