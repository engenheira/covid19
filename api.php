<?php
require_once './config.php';

//STATES
$urlStates = STATES;
$initStates = curl_init($urlStates);
curl_setopt($initStates, CURLOPT_RETURNTRANSFER, true);
curl_setopt($initStates, CURLOPT_SSL_VERIFYPEER, false);
$results = json_decode(curl_exec($initStates));
curl_close($initStates);


//retornar os dados da api, tranformando o array em objetos
foreach ($results as  $result) {
  $dados = json_encode($result);
  echo $dados;
}
