<?php
class user{
    function index(){
    }

    function logout(){
        unset($_SESSION['user']);
        $content=redirect(site_url(''),2);
        $content.='กรุณารอสักครู่..';
        return $content;//view('template/authen',array('content'=>$content));
    }

    function list(){
        $store=model('store');
        $stores=$store->get_store(array('id'=>$_SESSION['user']['store_id'],'status'=>'operated'));
        $data['title']=$stores[0]['name'];
        $data['store_name']=$stores[0]['name'];
        $data['sub_name']=$stores[0]['sub_name'];

        $data['content']='รายชื่อผู้ใช้';
        return view('template/main',$data);
    }
}