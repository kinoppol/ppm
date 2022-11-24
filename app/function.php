<?php

function view($file,$arr=array()){
    ob_start();
        extract($arr);
        require('view/'.$file.'.php');
    $res = ob_get_contents();
    ob_end_clean();
    return $res;
}

function site_url($uri,$direclink=false){
    global $site_url;
    if(!$direclink){
        return $site_url.'app/?p='.$uri;
    }else{
        return $site_url.$uri;
    } 
}

function redirect($url,$delay=0){
    return '<meta http-equiv="refresh" content="'.$delay.';'.$url.'">';
}

function arr2and($data=array()){
    $ret='';
    foreach($data as $k=>$v){
        if(!empty($ret))$ret.=' AND ';
        $ret.=$k.'='.pq($v);
    }
    return $ret;
}

function model($file){
    global $db;
    require('model/'.$file.'.php');
    $obj=new $file($db);
    return $obj;
}