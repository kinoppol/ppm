<?php
class sale{
    function index(){
    }
    function pos(){
        $order=model('order');
        $total=0;
        $last_price=0;
        if(!empty($_SESSION['last_price'])){
            $last_price=$_SESSION['last_price'];
        }
        if(!isset($_SESSION['inv_no'])||empty($_SESSION['inv_no'])){    
            $_SESSION['inv_no']='RS-'.$_SESSION['user']['store_id'].time();
            $product_list=array();
        }else{
            $inv_data=array('invoice'=>$_SESSION['inv_no'],'store_id'=>$_SESSION['user']['store_id']);
            $product_list=$order->get_item($inv_data);
            $total=$order->get_total($inv_data);
            //$last_item=0;
            //foreach($product_list as $pd){
                //$total+=$pd['qty']*$pd['price'];
                /*if(strtotime($pd['date'])>$last_item){
                    $last_item=strtotime($pd['date']);
                    $last_price=$pd['price'];
                }*/
            //}
        }
        $data=array(
            'total'=>$total,
            'last_price'=>$last_price,
            'inv_no'=>$_SESSION['inv_no'],
            'store_id'=>$_SESSION['user']['store_id'],
            'item_list'=>view('sale/item_list',array('product_list'=>$product_list,'editable'=>true)),
        );
        $data['content']=view('sale/pos',$data);
        return view('template/main',$data);
    }
    function daily_report(){

        $data['content']='Dialy Report.';
        return view('template/main',$data);
    }

    function check_products(){
        $product=model('product');
        $order=model('order');
        //print_r($_POST);
        $data=array(
            'store_id'=>$_POST['store_id'],
            'product_code'=>$_POST['barcode'],
        );
        $product_data=$product->get_product($data);
        //print_r($product_data);
        if(count($product_data)==0){
            $_SESSION['POS_ERROR']="ไม่พบสินค้า";
            return redirect(site_url('sale/pos'));
        }else{
            $product_data=$product_data[0];
            $_SESSION['last_price']=$product_data['price'];
            $data=array(
            'store_id'=>$_POST['store_id'],
            'product_code'=>$_POST['barcode'],
            'invoice'=>$_POST['inv_no'],
            );
            $check_order=$order->get_item($data);
            if(count($check_order)==0){
                $item_data=array(
                'store_id'=>$_POST['store_id'],
                'product_code'=>$_POST['barcode'],
                'qty'=>1,
                'amount'=>(1*$product_data['price']),
                'invoice'=>$_POST['inv_no'],
                'product'=>$product_data['product_id'],
                'gen_name'=>$product_data['gen_name'],
                'name'=>$product_data['product_name'],
                'price'=>$product_data['price'],
                'date'=>(date('Y-m-d H:i:s')),
                );
                $order->add_item($item_data);
            }else{
                $item_data=$check_order[0];
                $where=array(
                    'transaction_id'=>$item_data['transaction_id'],
                );
                $new_data=array(
                    'qty'=>$item_data['qty']+1,
                    'amount'=>($item_data['qty']+1)*$item_data['price'],
                );
                $order->update_item($new_data,$where);
            }
        }
        return redirect(site_url('sale/pos'));
    }
    function update(){
        global $hGET;
        print_r($hGET);
        if(!empty($hGET['tid'])&&!empty($hGET['qty'])){
            $order=model('order');
            $where=array(
                'transaction_id'=>$hGET['tid'],
            );
            $order->update_item(array('qty'=>$hGET['qty']),$where);
        }
        return redirect(site_url('sale/pos'));
    }
    function hold(){
        global $hGET;
        print_r($hGET);
     }
     function end(){
        global $hGET;
        $order=model('order');
        //print_r($hGET);
        $inv_data=array('invoice'=>$hGET['inv'],'store_id'=>$_SESSION['user']['store_id']);
        $product_list=$order->get_item($inv_data);
        $total=$order->get_total($inv_data);
        $data['inv_no']=$hGET['inv'];
        $data['content']=view('sale/item_list',array('product_list'=>$product_list));
        $pay_data=array(
            'id'=>'0632612572',
            'amount'=>$total,
            'total'=>$total,
            'discount'=>0,
            'payment'=>$total,
        );
        $data['pay_data']=$pay_data;
        $data['qr']=view('promtpay/qr',$pay_data);
        $data['content']=view('sale/summary',$data);
        return view('template/main',$data);
     }
     function cancel(){
        global $hGET;
        print_r($hGET);
     }
}