<?php

/*

type: layout

name: Payments 1

description: Payments 1

*/
?>
<script type="text/javascript">
    $(document).ready(function () {
        var logoPath = mw.$('.mw-payment-gateway-<?php print $params['id']; ?>').find('option:selected').data('logo');
        $('.js-gateway-img-holder').find('img').attr('src', logoPath);


        mw.$('.mw-payment-gateway-<?php print $params['id']; ?>').on('change', function () {
            mw.$('.mw-payment-gateway-selected-<?php print $params['id']; ?> .module:first').attr('data-selected-gw', $(this).find('option:selected'));
            mw.load_module('' + this.value, '#mw-payment-gateway-selected-<?php print $params['id']; ?>');

            var logoPath = $(this).find('option:selected').data('logo');
            $('.js-gateway-img-holder').find('img').attr('src', logoPath);
        });

        $('.methods input, .methods select').addClass('input-lg');
    });
</script>

<div class="mw-shipping-and-payments">
    <?php if ( $payment_options and count($payment_options) > 0): ?>
        <div class="m-t-20">
            <div class="edit nodrop" field="checkout_payment_information_title" rel="global" rel_id="<?php print $params['id'] ?>">
                <p class="bold m-b-10"><?php _e("Choose Payment Method"); ?></p>
            </div>
        </div>

        <div class="methods">
            <div class="row">
                <div class="fields">
                    <div class="field-holder">
                        <select name="payment_gw" class="selectpicker mw-payment-gateway mw-payment-gateway-<?php print $params['id']; ?>">
                            <?php $count = 0;
                            foreach ($payment_options as $payment_option) : $count++; ?>
                                <option id="option-<?php print $count; ?>" <?php if ($count == 1): ?> selected="selected" <?php endif; ?> value="<?php print  $payment_option['gw_file']; ?>" data-logo="<?php print $payment_option['icon']; ?>"><?php print  _e($payment_option['name']); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="text-center m-t-20 m-b-20 js-gateway-img-holder"><br/>
                <img src="<?php print template_url(); ?>assets/uploads/stripe.png" style="max-width: 240px;"/>
            </div>

            <div class="">
                <div class="fields">
                    <div id="mw-payment-gateway-selected-<?php print $params['id']; ?>">
                        <?php if (isset($payment_options[0])): ?>
                            <module type="<?php print $payment_options[0]['gw_file'] ?>"/>
                        <?php endif; ?>
                    </div>
                    <hr/>
                </div>
            </div>


            <div class="row">
                <?php $print_total = cart_total(); ?>
                <div class="col-xs-6 total-lable"><?php _e("Total"); ?></div>
                <div class="col-xs-6 right total-price">
                    <?php print currency_format($print_total); ?>
                </div>
            </div>


        </div>
    <?php endif; ?>

</div>
