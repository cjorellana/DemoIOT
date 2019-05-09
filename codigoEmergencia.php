<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$region = 'America/Guatemala';
date_default_timezone_set($region);
    
$d1=new DateTime(date("Y-m-d H:i:s"));
$d2=new DateTime(date("Y-m-d"));

$d1=$d1->format('Y-m-d H:i:s');
$d2=$d2->format('Y-m-d');

$temp=rand(90, 100);
$horno=1;

$data = array(
    'fecha' => $d2,
    'hora' => $d1,
    'temperatura' => $temp,
    'horno' => $horno
);

//llamada a api
$url = 'https://api.cjorellana.com/monitor';

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response_json = curl_exec($ch);
curl_close($ch);
$response=json_decode($response_json, true);

echo 'Horno 1: ' .$response . ' '. $d1 . ' '. $temp;
echo "\n";

//horno 2
$d1=new DateTime(date("Y-m-d H:i:s"));
$d2=new DateTime(date("Y-m-d"));

$d1=$d1->format('Y-m-d H:i:s');
$d2=$d2->format('Y-m-d');

$temp=rand(90, 100);
$horno=2;

$data = array(
    'fecha' => $d2,
    'hora' => $d1,
    'temperatura' => $temp,
    'horno' => $horno
);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response_json = curl_exec($ch);
curl_close($ch);
$response=json_decode($response_json, true);
echo 'Horno 2: ' .$response . ' '. $d1  . ' '. $temp;;
echo "\n";
