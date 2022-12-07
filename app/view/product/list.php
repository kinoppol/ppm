<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">สินค้า</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ชื่อสินค้า</th>
                                            <th>บาร์โค๊ด</th>
                                            <th>ราคาซื้อ</th>
                                            <th>ราคาขาย</th>
                                            <th>กำไร/หน่วย</th>
                                            <th>ตัวแทนจำหน่าย</th>
                                            <th>จำนวนคงเหลือ</th>
                                            <th>จัดการ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach($products as $row){
                                        ?>
                                        <tr>
                                            <td><?php print $row['gen_name']; ?></td>
                                            <td><?php print $row['product_code']; ?></td>
                                            <td><?php print $row['o_price']; ?></td>
                                            <td><?php print $row['price']; ?></td>
                                            <td><?php print $row['profit']; ?></td>
                                            <td><?php print $row['supplier']; ?></td>
                                            <td><?php print $row['qty']; ?></td>
                                            <td><a href="#" class="btn btn-primary btn-sm"><i class="fa fa-search"></i></a>
                                            <a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
        <?php
        systemFoot("
        <script>
        jQuery(document).ready(function(){
            jQuery('#bootstrap-data-table-export').DataTable({
            lengthMenu: [[10, 25, 50, -1], [10, 25, 50, \"All\"]],
            buttons: ['copy', 'csv', 'excel', 'pdf', 'print'],
            \"language\": {
                \"sProcessing\": \"กำลังดำเนินการ...\",
                \"sLengthMenu\": \"แสดง _MENU_ รายการต่อหน้า\",
                \"sZeroRecords\": \"ไม่พบข้อมูล\",
                \"sInfo\": \"แสดงรายการที่ _START_ ถึงรายการที่ _END_ จากทั้งหมด _TOTAL_ รายการ\",
                \"sInfoEmpty\": \"แสดงรายการที่ 0 ถึงรายการที่ 0 จากทั้งหมด 0 รายการ\",
                \"sInfoFiltered\": \"(กรองข้อมูล _MAX_ ทุกแถว)\",
                \"sInfoPostFix\": \"\",
                \"sSearch\": \"ค้นหา:\",
                \"sUrl\": \"\",
                \"oPaginate\": {
                              \"sFirst\": \"เิริ่มต้น\",
                              \"sPrevious\": \"ก่อนหน้า\",
                              \"sNext\": \"ถัดไป\",
                              \"sLast\": \"สุดท้าย\"
                }
       }
        });
        });
        </script>");
        ?>