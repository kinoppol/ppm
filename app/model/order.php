<?php

class order{
    private $db;
    function __construct($db_ref){
        $this->db=$db_ref;
    }
    function add_item($data=array()){
        $sql='insert into sales_order set '.arr2set($data);
        //print $sql;
        $result=$this->db->query($sql);
        return $result;        
    }
    function update_item($data=array(),$where=array()){
        $sql='update sales_order set '.arr2set($data).' where '.arr2and($where);
        //print $sql;
        $result=$this->db->query($sql);
        return $result;        
    }
    function get_item($data=array()){
        $sql='select * from sales_order where '.arr2and($data);
        //print $sql;
        $result=$this->db->query($sql);

            $res=array();
            while($row=$result->fetch_assoc()){
                $res[]=$row;
            }
            return $res;
        
    }
    
    function delete_item($where=array()){
        $sql='delete from sales_order where '.arr2and($where);
        //print $sql;
        $result=$this->db->query($sql);
        return $result;        
    }
}