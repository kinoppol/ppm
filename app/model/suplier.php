<?php

class suplier{
    private $db;
    function __construct($db_ref){
        $this->db=$db_ref;
    }
    function add_suplier($data=array()){
        $sql='insert into supliers set '.arr2set($data);
        //print $sql;
        $result=$this->db->query($sql);
        return $result;        
    }
    function update_suplier($data=array(),$where=array()){
        $sql='update supliers set '.arr2set($data).' where '.arr2and($where);
        //print $sql;
        $result=$this->db->query($sql);
        return $result;        
    }
    function get_suplier($data=array()){
        $sql='select * from supliers where '.arr2and($data);
        //print $sql;
        $result=$this->db->query($sql);

            $res=array();
            while($row=$result->fetch_assoc()){
                $res[]=$row;
            }
            return $res;
        
    }
    
    function delete_suplier($where=array()){
        $sql='delete from supliers where '.arr2and($where);
        //print $sql;
        $result=$this->db->query($sql);
        return $result;        
    }
}