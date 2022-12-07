<?php
class barcode{
    function index(){
    }
    function search(){
        $data['content']=$_GET['q'];
        return view('template/main',$data);
    }
}