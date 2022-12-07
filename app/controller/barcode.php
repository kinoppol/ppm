<?php
class barcode{
    function index(){
    }
    function scan(){

        $data['content']=$_GET['q'];
        return view('template/main',$data);
    }
}