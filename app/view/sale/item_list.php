<?php //print date('Y-m-d H:i:s'); 
if(empty($editable)){
    $editable=false;
}
?>
<style>
input[type='number']{
    width: 60px;
} 
</style>
<table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>รายการ</th>
                                            <th>จำนวน</th>
                                            <th>ราคา</th>
                                            <th>รวมเงิน</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach($product_list as $pd){
                                            if($editable){
                                                $code=date('H:i:s',strtotime($pd['date'])).' '.$pd['product_code'];
                                                $qty='<input type="number" min="1" id="qty_'.$pd['transaction_id'].'" value="'.$pd['qty'].'" clase="from-control" size="3">';
                                            }else{
                                                $code=$pd['product_code'];
                                                $qty=$pd['qty'];
                                            }
                                            print '<tr>
                                            <td>'.$code.'</td>
                                            <td>'.$pd['name'].'</td>
                                            <td>'.$qty.'</td>
                                            <td>'.$pd['price'].'</td>
                                            <td>'.($pd['price']*$pd['qty']).'</td>
                                            </tr>';
                                        }
                                        ?>
                                    </tbody>
</table>
<?php
if($editable){
    $script='<script>';
        foreach($product_list as $pd){
            $script.='jQuery("#qty_'.$pd['transaction_id'].'").on("change",function(){
                //alert(jQuery("#qty_'.$pd['transaction_id'].'").val());
                var url="'.site_url('sale/update/tid/'.$pd['transaction_id'].'/qty/').'"+jQuery("#qty_'.$pd['transaction_id'].'").val();
                jQuery(location).attr(\'href\',url);
            });
            ';
        }
    $script.='</script>';
    systemFoot($script);
}
?>
