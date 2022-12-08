<?php

class product{
    private $db;
    function __construct($db_ref){
        $this->db=$db_ref;
    }
    function add_product($data=array()){
        $sql='insert into products set '.arr2set($data);
        //print $sql;
        $result=$this->db->query($sql);
        return $result;        
    }
    function get_product($data=array()){
        $sql='select * from products where '.arr2and($data);
        //print $sql;
        $result=$this->db->query($sql);

            $res=array();
            while($row=$result->fetch_assoc()){
                $res[]=$row;
            }
            return $res;
        
    }
}