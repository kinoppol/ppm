
<div class="col-md-8">
<div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center bg-info">
                                    <strong class="card-title">สรุปรายการ</strong>
                                </div>
                                
                            <div class="card-body">


<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <strong class="card-title">ข้อมูลผู้ซื้อ</strong>
    </div>
    <div class="card-body">
        <div class="col-md-12 col-lg-12">
        <div class="input-group">
        <input type="text" id="barcode" name="barcode" 
                                                                            placeholder="รหัสสมาชิก/เบอร์โทร" class="form-control"
                                                                            value=""
                                                                            >
                                                                            <div class="input-group-btn"><button class="btn btn-primary">ตกลง</button>
</div>
        </div>
        </div>
    </div>
</div>
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>
                                                                    </div>
                                                                    </div>
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <strong class="card-title">สรุปรายการ #<?php print $inv_no; ?></strong>
        </div>
        <div class="card-body">
            <div class="col-md-12 col-lg-12">
            </div>
    
<?php
print $content;
?>

                                                                    </div>

                                                                    </div>
                    </div>
        </div>
</div>

    <div class="col-md-4">
<div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center bg-warning">
                                    <strong class="card-title">ชำระเงิน</strong>
                                </div>
                                
                            <div class="card-body">
                            <div class="row form-group">
                                                                <div class="col col-md-6"><label for="text-input" class=" form-control-label">ยอดรวม</label></div>
                                                                <div class="col-12 col-md-6">
                                                                    1,254.00
                                                                </div>                                                               
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-6"><label for="text-input" class=" form-control-label">รหัสส่วนลด</label></div>
                                                                <div class="col-12 col-md-6"><input type="text" id="text-input" name="text-input" placeholder="Text" class="form-control"></div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-6"><label for="text-input" class=" form-control-label">ส่วนลด</label></div>
                                                                <div class="col-12 col-md-6">
                                                                    1,254.00
                                                                </div>                                                               
                                                            </div>
                            <div class="row form-group">
                                                                <div class="col col-md-6"><label for="text-input" class=" form-control-label">ยอดที่ต้องชำระ</label></div>
                                                                <div class="col-12 col-md-6">
                                                                    1,254.00
                                                                </div>                                                               
                                                            </div>
                                                            <button type="button" class="btn btn-success btn-lg btn-block" onclick="sale_end()">ชำระด้วยเงินสด</button>
                                                            <button type="button" class="btn btn-primary btn-lg btn-block" onclick="sale_end()">ชำระด้วยการโอนเงิน</button>
                            <button type="button" class="btn btn-success btn-lg btn-block" onclick="sale_end()">พิมพ์ใบเสร็จ (F10)</button>
                                        <button type="button" class="btn btn-warning btn-lg btn-block" onclick="sale_hold()">แก้ไขข้อมูล (F9)</button>
                                        <img width="100%" src="https://promptpay.io/0849555096/300.png">
</div>
                    </div>
                </div>


