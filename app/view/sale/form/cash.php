<div class="row form-group">
    <div class="col-12 col-md-4">
        <label for="text-input" class=" form-control-label">ยอดรวม</label>
    </div>
    <div class="col-12 col-md-8">                                                                       
        <?php print number_format($pay_data['total'],2); ?>
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
<?php
systemFoot('
<script>
var total='.$pay_data['total'].';
var payment=0;
var change=0;
jQuery( "#'.$hookId.'" ).on(\'shown.bs.modal\', function(){
    jQuery("#cash").focus();
});
jQuery( "#cash" ).on(\'keyup\', function(){
    payment=jQuery("#cash").val();
    change=payment-total;
    jQuery( "#change" ).text(change.toFixed(2));
});
</script>
');