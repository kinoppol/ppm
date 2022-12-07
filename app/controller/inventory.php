<?php
class inventory{
    function index(){
    }
    function supplier(){
        

        $data['content']='ตัวแทนจำหน่าย';
        return view('template/main',$data);
    }
    function product(){
        $data=array();

        $product=model('product');
        $products=$product->get_product(array('store_id'=>$_SESSION['user']['store_id']));
        $data['content']=view('product/list',array('products'=>$products));
        return view('template/main',$data);
    }
}