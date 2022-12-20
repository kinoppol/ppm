<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <strong class="card-title">ตัวแทนจำหน่าย</strong>
                                <!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#product"> -->
                                <a href="<?php print site_url('inventory/form_product'); ?>" class="btn btn-success">
                                    <i class="fa fa-plus"></i> เพิ่มข้อมูลตัวแทนจำหน่าย
                                </a>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ชื่อตัวแทนจำหน่าย</th>
                                            <th>ที่อยู่</th>
                                            <th>เบอร์โทรศัพท์ติดต่อ</th>
                                            <th>พนักงานขาย</th>
                                            <th>หมายเหตุ</th>
                                            <th>จัดการ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach($supliers as $row){
                                        ?>
                                        <tr>
                                            <td><?php print $row['suplier_name']; ?></td>
                                            <td><?php print $row['suplier_address']; ?></td>
                                            <td><?php print $row['suplier_contact']; ?></td>
                                            <td><?php print $row['contact_person']; ?></td>
                                            <td><?php print $row['note']; ?></td>
                                            <td>
                                            <a href="<?php print site_url('inventory/form_suplier'); ?>&suplier_id=<?php print $row['suplier_id']; ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
                                            <a href="#" onClick="delSuplier(<?php print $row['suplier_id'].',\''.$row['suplier_name'].'\''; ?>)" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a></td>
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
        systemFoot("<script>
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
        
    var table = jQuery('#bootstrap-data-table-export').DataTable();
    jQuery('#bootstrap-data-table-export tbody').on('click', 'tr', function () {
      if (jQuery(this).hasClass('selected')) {
          //jQuery(this).removeClass('selected');
      } else {
          jQuery('tr.selected').removeClass('selected');
          jQuery(this).addClass('selected');
      }
  });
});

        
     function delSuplier(sid,sname){
        swal({
          title: \"ยืนยันการลบข้อมูลตัวแทนจำหน่าย \\n\\\"\"+sname+\"\\\"\",
          text: \"การดำเนินการนี้กู้คืนไม่ได้!\",
          type: \"warning\",
          showCancelButton: true,
          cancelButtonText: \"ยกเลิก\",
          confirmButtonColor: \"#DD6B55\",
          confirmButtonText: \"ใช่, ลบข้อมูลตัวแทนจำหน่าย!\",
          closeOnConfirm: false
        },
        function(){
          jQuery.ajax(\"".site_url('inventory/delSuplier')."&id=\"+sid);
          var table=jQuery('#bootstrap-data-table-export').DataTable();
          
  
          var rows = table
      .rows('.selected')
      .remove()
      .draw();
      swal(\"สำเร็จ!\", \"ข้อมูลตัวแทนจำหน่ายถูกลบแล้ว.\", \"success\");
        });
       }
       
       </script>
       ");
        ?>