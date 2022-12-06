<?php
error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);
session_start();

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

    $inc_file='controller/'.$c.'.php';
    
    require_once($inc_file);

    $page=new $c();

    if(empty($f)){
        print $page->index();
    }else{
        print $page->$f();
    }

?>