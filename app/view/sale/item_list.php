<?php //print date('Y-m-d H:i:s'); 
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
                                            <th>ส่วนลด</th>
                                            <th>รวมเงิน</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach($product_list as $pd){
                                            print '<tr>
                                            <td>'.date('H:i',strtotime($pd['date'])).' '.$pd['product_code'].'</td>
                                            <td>'.$pd['name'].'</td>
                                            <td><input type="number" min="1" id="qty_'.$pd['transaction_id'].'" value="'.$pd['qty'].'" clase="from-control" size="3"></td>
                                            <td>'.$pd['price'].'</td>
                                            <td>'.$pd['discount'].'</td>
                                            <td>'.($pd['price']*$pd['qty']).'</td>
                                            </tr>';
                                        }
                                        ?>
                                    </tbody>
</table>
<?php
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
?>
