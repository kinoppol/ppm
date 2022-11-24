<?php
require_once('main/config/setup.php');

/* End config */

$db = new mysqli($db_host,$db_user,$db_pass,$db_database);

if(!$db){
    print "Can't connect db";
    exit();
}
$db-> set_charset("utf8mb4");

function pq($str,$force=false){
    if((is_numeric($str)||empty($str))&&!$force) return $str;
    return "'".$str."'";
}
?>