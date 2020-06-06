<?php
require_once './config.php';


//BRASIL
$url = BRASIL;
$ch = curl_init($url);
//converte
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//verifica
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$data = json_decode(curl_exec($ch));
curl_close($ch);
// var_dump($data);

