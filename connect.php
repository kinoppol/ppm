<?php
/* Database config */
$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database	= 'sales'; 

/* End config */

$db = new mysqli($db_host,$db_user,$db_pass,$db_database);


function pq($str,$force=false){
    if((is_numeric($str)||empty($str))&&!$force) return $str;
    return "'".$str."'";
}
?>