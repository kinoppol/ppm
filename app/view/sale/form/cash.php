<form action="<?php print site_url('sale/end_record/inv/'.$pay_data['inv_no']); ?>" method="post">
<div class="row form-group">
    <div class="col-12 col-md-4">
        <label for="text-input" class=" form-control-label">ยอดรวม</label>
    </div>
    <div class="col-12 col-md-8">                                                                       
        <?php print number_format($pay_data['total']??0,2); ?>
    </div>                                                               
</div>
<div class="row form-group">
    <div class="col-12 col-md-4">
        <label for="text-input" class=" form-control-label">รับเงินมา</label>
    </div>
    <div class="col-12 col-md-8">                                                                       
        <input type="number" value="" min="<?php print $pay_data['total']; ?>" name="cash" id="cash" required>
    </div>                                                               
</div>
<div class="row form-group">
    <div class="col-12 col-md-4">
        <label for="text-input" class=" form-control-label">เงินทอน</label>
    </div>
    <div class="col-12 col-md-8" id="change">                                                                       
        <?php
            print number_format('0',2);
        ?>
    </div>                                                               
</div>

<div class="row form-group" id="cfendsale">
    <div class="col-12 col-md-4">
        <label for="text-input" class=" form-control-label">ยืนยัน</label>
    </div>
    <div class="col-12 col-md-8" id="cfendsalebtn">                                                                       
        <button class="btn btn-success" type="submit">จบการขาย</button>
    </div>                                                               
</div>
</form>
<?php
systemFoot('
<script>
jQuery(function(){
    jQuery("#cfendsale").hide();
});
var total='.($pay_data['total']??0).';
var payment=0;
var change=0;
jQuery( "#'.$hookId.'" ).on(\'shown.bs.modal\', function(){
    jQuery("#cash").focus();
});
jQuery( "#cash" ).on(\'keyup\', function(){
    updChange();
});

jQuery( "#cash" ).on(\'change\', function(){
    updChange();
});
function updChange(){
    payment=jQuery("#cash").val();
    change=payment-total;
    jQuery( "#change" ).text(change.toFixed(2));
}
</script>
');