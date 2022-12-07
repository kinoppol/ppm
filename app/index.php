<?php
ob_start();
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
    require_once('../connect.php');
    require_once('function.php');
    if(!empty($_GET['p'])){
    $p=$_GET['p'];
    $seg=explode('/',$p);
    $c=$seg[0];
    if(!empty($seg[1]))$f=$seg[1];
    }

    if(empty($c)){
        $c='login';
    }

    $controller_guest_allowed=array('login',
                                    'register'
                                 );
    
    if(!is_numeric(array_search($c,$controller_guest_allowed))){
        print redirect(site_url('login/form'));
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