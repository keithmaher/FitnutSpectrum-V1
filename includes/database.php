<?php
$db["db_host"]="sql307.ezyro.com";
$db["db_user"]="ezyro_20052625";
$db["db_pass"]="Fitnut";
$db["db_name"]="ezyro_20052625_evan";
foreach($db as $key => $value){
    define(strtoupper($key), $value);
}
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if(!$connection){
    echo "no connection";
}
