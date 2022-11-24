<?php
require_once('main/config/setup.php');

/* End config */

$db = new mysqli($db_host,$db_user,$db_pass,$db_database);

if(!$db){
    print "Can't connect db"
}

function pq($str,$force=false){
    if((is_numeric($str)||empty($str))&&!$force) return $str;
    return "'".$str."'";
}
?>