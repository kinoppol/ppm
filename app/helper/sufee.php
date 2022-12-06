<?php

function gen_submenu($arr=array()){    
    $ret='';
    if(is_array($arr['item'])&&count($arr['item'])>0){
        $ret.='<a href="'.$arr['url'].'" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon '.$arr['bullet'].'"></i>'.$arr['label'].'</a>
                    <ul class="sub-menu children dropdown-menu">';
            foreach($arr['item'] as $row){
                $ret.='
                <li>
                    <i class="menu-icon '.$row['bullet'].'"></i><a href="'.$row['url'].'">'.$row['label'].'</a>
                </li>';
            }
        $ret.='</ul>';
    }else{
        $ret.='<li>
            <a href="'.$arr['url'].'"> <i class="menu-icon '.$arr['bullet'].'"></i>'.$arr['label'].' </a>
        </li>';
    }
    return $ret;
}
function gen_menu($arr=array()){
    $ret='';
    foreach($arr as $k=>$v){
        $ret='<h3 class="menu-title">'.$k.'</h3>';
        foreach($v as $row){
            $ret.='<li class="menu-item-has-children dropdown">';
            $ret.=gen_submenu($row);
            $ret.='</li>';
        }
    }
    return $ret;
}