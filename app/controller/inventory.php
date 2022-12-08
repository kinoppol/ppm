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
    function add_product(){
        $product_data=array(
            'store_id'=>$_SESSION['user']['store_id'],
            'product_code'=>$_POST['barcode'],
            'gen_name'=>$_POST['gen_name'],
            'product_name'=>$_POST['product_name'],
            'o_price'=>$_POST['o_price'],
            'price'=>$_POST['price'],
            'profit'=>$_POST['profit'],
            'supplier'=>$_POST['supplier'],
            'qty'=>$_POST['qty'],
            'expiry_date'=>$_POST['expiry_date'],
            'date_arrival'=>$_POST['date_arrival'],
        );

        $product=model('product');
        $result=$product->add_product($product_data);
        $data=array();
        $data['content']=redirect(site_url('inventory/product'));
        return view('template/authen',$data);
    }
}