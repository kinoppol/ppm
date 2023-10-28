<?php
print $qr;
?>
<br>
<div class="row form-group">
    <div class="col-12 col-md-4">
        <label for="text-input" class=" form-control-label">ยอด</label>
    </div>
    <div class="col-12 col-md-8">                                                                       
        <?php print number_format($pay_data['total'],2); ?> บาท
    </div>                                                               
</div>