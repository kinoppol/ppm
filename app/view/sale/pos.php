<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-md-8">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <strong class="card-title">การขาย #<?php print $inv_no; ?></strong>
                                </div>
                                <div class="card-body">
                                 <div class="col-md-12 col-lg-12">
</div>

<div class="row form-group">
                                                                    <div class="col col-md-12">
                                                                    <form id="pos_scan" action="<?php print site_url('sale/check_products'); ?>" method="post"><div class="input-group">
<input type='hidden' name="store_id" value="<?php print $store_id; ?>">
<input type='hidden' name="inv_no" value="<?php print $inv_no; ?>">
                                                                            <input type="text" id="barcode" name="barcode" 
                                                                            placeholder="บาร์โค๊ด/ชื่อสินค้า" class="form-control"
                                                                            value=""
                                                                            >
                                                                            <div class="input-group-btn"><button class="btn btn-primary">ตกลง</button>
                                                                        </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
</div>
                    
                                <div class="card-body">
                                 <div class="col-md-12 col-lg-12">
</div>
<?php
    print $item_list;
?>
</div>
                            </div>
                    </div>

                    
                    <div class="col-md-4">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <strong class="card-title">ราคา/ยอดขาย</strong>
                                </div>
                                
                            <div class="card-body">
                                 <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="p-0 clearfix">
                <i class="fa fa-usd bg-success p-4 font-2xl mr-3 float-left text-light"></i>
                <div class="h5 text-primary mb-0 pt-3"><?php print number_format($last_price,2); ?></div>
                <div class="text-muted text-uppercase font-weight-bold font-xs small">สินค้าล่าสุด</div>
            </div>
        </div>
    </div>
<div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="p-0 clearfix">
                <i class="fa fa-usd bg-danger p-4 font-2xl mr-3 float-left text-light"></i>
                <div class="h5 text-primary mb-0 pt-3"><?php print number_format($total,2); ?></div>
                <div class="text-muted text-uppercase font-weight-bold font-xs small">ราคารวม</div>
            </div>
        </div>
    </div>
</div>
                            </div>
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <strong class="card-title">จัดการ</strong>
                                </div>
                                
                            <div class="card-body">
                            <button type="button" class="btn btn-success btn-lg btn-block" onclick="sale_end()">สรุปการขาย (F10)</button>
                                        <button type="button" class="btn btn-warning btn-lg btn-block" onclick="sale_hold()">พักการขาย (F9)</button>
                                        <button type="button" class="btn btn-danger btn-lg btn-block" onclick="sale_cancel()">ยกเลิกการขาย</button>
</div>
                    </div>
                </div>

            </div>
</div>
<?php
if(!empty($_SESSION['POS_ERROR'])){
    //print $_SESSION['POS_ERROR'];
    systemFoot("<script>
        alert('".$_SESSION['POS_ERROR']."');
        </script>");
        unset($_SESSION['POS_ERROR']);
}
        systemFoot("
        <script>
        jQuery(document).ready(function(){
            jQuery(\"#barcode\").focus();

            jQuery('#bootstrap-data-table-export').DataTable({
                //scrollX: true,
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
        jQuery(\"#product\").on('shown.bs.modal', function () {
            jQuery(\"#barcode\").focus();
          });
          jQuery(\"#ENQUIRY_VIEWMETER\").keydown(function(event) {
            if(event.which == 121) { //F10
                //alert('END Sale.');
                sale_end()
                return false;
            }
            if(event.which == 120) { //F9
                //alert('Hold Sale.');
                sale_hold();
                return false;
            }
        });
        function sale_hold(){
            if(confirm('พักการขาย ". $inv_no." ?')){    
                var url='".site_url('sale/hold/inv/'.$inv_no)."';                
                jQuery(location).attr('href',url);
            }
        }
        function sale_end(){    
                
                var url='".site_url('sale/end/inv/'.$inv_no)."';                
                jQuery(location).attr('href',url);
        }
        function sale_cancel(){
            if(confirm('ยกเลิกการขาย ". $inv_no." ?')){    
                var url='".site_url('sale/cancel/inv/'.$inv_no)."';                
                jQuery(location).attr('href',url);
            }
        }
        </script>");
    ?>
