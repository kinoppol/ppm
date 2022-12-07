<?php
class inventory{
    function index(){
    }
    function supplier(){
        $store=model('store');
        $stores=$store->get_store(array('id'=>$_SESSION['user']['store_id'],'status'=>'operated'));
        $data['title']=$stores[0]['name'];
        $data['store_name']=$stores[0]['name'];
        $data['sub_name']=$stores[0]['sub_name'];

        $data['content']='ตัวแทนจำหน่าย';
        return view('template/main',$data);
    }
    function product(){
        $store=model('store');
        $stores=$store->get_store(array('id'=>$_SESSION['user']['store_id'],'status'=>'operated'));
        $data=array();
        $data['title']=$stores[0]['name'];
        $data['store_name']=$stores[0]['name'];
        $data['sub_name']=$stores[0]['sub_name'];

        $product=model('product');
        $products=$product->get_product(array('store_id'=>$_SESSION['user']['store_id']));
        $data['content']=view('product/list',array('products'=>$products));
        return view('template/main',$data);
    }
}