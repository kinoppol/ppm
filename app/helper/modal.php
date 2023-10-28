<?php
class modal{
    public $body='';
    public $title='';
    public $confirmCallback='';
    public $id='';
    
    function __construct($id='modal',$title='',$body='',$callBack='') {
        $this->id=$id;
        if(!empty($title))$this->title=$title;
        if(!empty($body))$this->body=$body;
        if(!empty($callBack))$this->$confirmCallback=$callBack;
    }

    function box(){
        $callBack='';
        if (!empty($this->confirmCallback)){
            $callBack='onClick="'.$this->confirmCallback.'"';
        }
        $ret='<div class="modal fade" id="'.$this->id.'" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="smallmodalLabel">'.$this->title.'</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        '.$this->body.'
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                    <button type="button" class="btn btn-primary"'.$callBack.'>ยืนยัน</button>
                </div>
            </div>
        </div>
    </div>';
    return $ret;
    }
    function button(){
        $ret='
        <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#'.$this->id.'">
        '.$text.'
        </button>
    ';
    return $ret;
    }
    function button_ref(){
        $ret='data-toggle="modal" data-target="#'.$this->id.'"';
        return $ret;
    }
}