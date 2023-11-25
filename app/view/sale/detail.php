
<div class="col-md-8">
<div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <strong class="card-title">ข้อมูลการขาย</strong>
                                </div>
                                
                            <div class="card-body">
                            <?php print $content; ?>
                            </div>
</div>
</div>
<div class="col-md-4">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center bg-success">
            <strong class="card-title">สถานะการขาย</strong>
        </div>
        <div class="card-body">
            ชำระเงินแล้ว
            <button type="button" class="btn btn-success btn-lg btn-block" onclick="print_slipt()">พิมพ์ใบเสร็จ (F10)</button>
        </div>
    </div>
</div>

