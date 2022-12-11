<?php
class barcode{
    function index(){
    }
    function scan(){
        
        $product=model('product');
        $where=array(array('store_id'=>$_SESSION['user']['store_id'],'product_code'=>$_POST['product_code']));
        $pdata=$product->get_product($where);
        if(count($pdata)<1){
            $data['content']=view('product/form_product',array('product_code'=>$_GET['q']));
        }else{
            redirect(site_url('inventory/form_product/&product_id='.$pdata[0]['product_id']));
            //$data['content']=view('product/form_product',array('product_id'=>$pdata[0]['product_id']));
        }
        return view('template/main',$data);
    }
}