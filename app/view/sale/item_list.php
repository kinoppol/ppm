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
                                            <td>'.$pd['product_code'].'</td>
                                            <td>'.$pd['name'].'</td>
                                            <td><input type="number" min="1" value="'.$pd['qty'].'" clase="from-control" size="3"></td>
                                            <td>'.$pd['price'].'</td>
                                            <td>'.$pd['discount'].'</td>
                                            <td>'.($pd['price']*$pd['qty']).'</td>
                                            </tr>';
                                        }
                                        ?>
                                    </tbody>
</table>
