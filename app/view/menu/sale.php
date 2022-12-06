<?php

$menu['โปรแกรมบันทึกเงินสด']=array(
    'pos'=>array(
        'label'=>'ขายหน้าร้าน',
        'bullet'=>'fa fa-desktop',
        'url'=>site_url('sale/pos'),
        'item'=>array(),
    ),
    'report'=>array(
        'label'=>'รายงานการขาย',
        'url'=>site_url('sale/report'),
        'bullet'=>'fa fa-dollar',
        'item'=>array(
            'daily'=>array(
                'label'=>'รายวัน',
                'bullet'=>'fa fa-calendar',
                'url'=>site_url('sale/daily_report'),
            ),
            'monthly'=>array(
                'label'=>'รายเดือน',
                'bullet'=>'fa fa-calendar',
                'url'=>site_url('sale/monthly_report'),
            ),
            'annual'=>array(
                'label'=>'รายปี',
                'bullet'=>'fa fa-calendar',
                'url'=>site_url('sale/annual_report'),
            ),
            'custom'=>array(
                'label'=>'กำหนดเอง',
                'bullet'=>'fa fa-calendar',
                'url'=>site_url('sale/custom_report'),
            )
        ),
    )
);

print gen_menu($menu);