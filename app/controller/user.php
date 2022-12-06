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
}