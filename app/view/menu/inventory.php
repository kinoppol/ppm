<?php

$menu['คลังสินค้า']=array(
    'supplier'=>array(
        'label'=>'ตัวแทนจำหน่าย',
        'bullet'=>'fa fa-truck',
        'url'=>site_url('inventory/supplier'),
        'item'=>array(),
    ),
    'product'=>array(
        'label'=>'สินค้า',
        'bullet'=>'fa fa-dropbox',
        'url'=>site_url('inventory/product'),
        'item'=>array(),
    ),
);

print gen_menu($menu);