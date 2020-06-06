<?php 

########
# URIS #
########
define('STATES', "https://covid19-brazil-api.now.sh/api/report/v1");
define('BRASIL', "https://covid19-brazil-api.now.sh/api/report/v1/brazil");
date_default_timezone_set('America/Sao_Paulo');

########
# DATE #
function to_date($data): string
{
  return date('d/m/Y H:i:s', strtotime($data));
}