<?php
ob_start();
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

define('INC_PATH', str_replace('\\', '/', dirname(__FILE__)) . '/');
define('BASE_PATH', dirname(INC_PATH) . '/');
date_default_timezone_set("Asia/Bangkok");
error_reporting(E_ALL);
    require_once('../connect.php');
    require_once('function.php');
    if(!empty($_GET['p'])){
    $p=$_GET['p'];
    $seg=explode('/',$p);
    $c=$seg[0];
    $hGET=array();
    if(count($seg)>2){
        for($i=0;$i<(count($seg)-2);$i+=2){
            if(!empty($seg[$i])&&!empty($seg[$i+1]))
            $hGET[$seg[$i+2]]=$seg[$i+3];
        }
    }
    if(!empty($seg[1]))$f=$seg[1];
    }

    if(empty($c)){
        $c='login';
    }

    $controller_guest_allowed=array('login',
                                    'register'
                                 );
    
    if(empty($_SESSION['user'])&&!is_numeric(array_search($c,$controller_guest_allowed))){
        print "Restrict access.";
        print redirect(site_url('login'),2);
        exit();
    }

    $inc_file='controller/'.$c.'.php';
    
    require_once($inc_file);

    $page=new $c();

    if(empty($f)){
        print $page->index();
    }else{
        print $page->$f();
    }

?>