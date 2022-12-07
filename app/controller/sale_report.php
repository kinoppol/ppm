<?php
class sale_report{
    function index(){
    }
    function daily(){
        $store=model('store');
        $stores=$store->get_store(array('id'=>$_SESSION['user']['store_id'],'status'=>'operated'));
        $data['title']=$stores[0]['name'];
        $data['store_name']=$stores[0]['name'];
        $data['sub_name']=$stores[0]['sub_name'];

        $data['content']='Dialy Report';
        return view('template/main',$data);
    }
    function monthly(){
        $store=model('store');
        $stores=$store->get_store(array('id'=>$_SESSION['user']['store_id'],'status'=>'operated'));
        $data['title']=$stores[0]['name'];
        $data['store_name']=$stores[0]['name'];
        $data['sub_name']=$stores[0]['sub_name'];

        $data['content']='Monthly Report.';
        return view('template/main',$data);
    }
    function annual(){
        $store=model('store');
        $stores=$store->get_store(array('id'=>$_SESSION['user']['store_id'],'status'=>'operated'));
        $data['title']=$stores[0]['name'];
        $data['store_name']=$stores[0]['name'];
        $data['sub_name']=$stores[0]['sub_name'];

        $data['content']='Annual Report.';
        return view('template/main',$data);
    }
    function custom(){
        $store=model('store');
        $stores=$store->get_store(array('id'=>$_SESSION['user']['store_id'],'status'=>'operated'));
        $data['title']=$stores[0]['name'];
        $data['store_name']=$stores[0]['name'];
        $data['sub_name']=$stores[0]['sub_name'];

        $data['content']='Custom Report.';
        return view('template/main',$data);
    }
}