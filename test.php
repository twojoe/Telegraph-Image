<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <meta name="format-detection" content="telephone=no"/>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
    ；
    <title>test</title>


</head>
<?php
//require_once('pdo.php');
session_start();


echo "t:".time();
echo '日期：'.date("Y-m-d H:i:s",time());
echo '日期：'.date("Y-m-d 00:00:01",time()-60*60*24);
//echo "sessionId:".session_id();

$date = "1993-02-15";
$dateNow = "2023-06-18";
echo "time" . time();
echo ",时间戳 dateNow:". strtotime($dateNow) . ",data:" . strtotime($date) . "<br>";
echo strtotime($dateNow) - strtotime($date) / (60 * 60 * 24 * 365);
var_dump(getdate());
$date = getdate(strtotime($date));
$dateNow = getdate();
echo "year" . ($dateNow['year'] - $date["year"]);

echo "<br>sessionId: " . session_id();
echo "<br>";
//print_r($_SERVER);
$row['avatar'] = "http://sfljs";
if (! strpos("a" . $row['avatar'], 'http')) {
    echo "t";
} else {
    echo "f";

}

echo str_ireplace("WORLD","Shanghai"," World Hello world!");

//            echo $sql;







