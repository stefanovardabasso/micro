<?php
/*

  type: layout

  name: Footer

  description: Footer

 */
?>

<div class="alert alert-success margin-bottom-30" id="msg<?php print $form_id; ?>" style="display:none;">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong><?php _lang("Thank You", "templates/new-world"); ?>!</strong> <?php _lang("Your message successfully sent", "templates/new-world"); ?>!
</div>


<form method="post" id="newsletters-form-<?php print $params['id'] ?>" data-form-id="<?php print $form_id ?>" name="<?php print $form_id ?>" method="post">
    <?php print csrf_form(); ?>

    <div class="row" style="display: none;">
        <div class="col-12">
            <module type="custom_fields"/>
        </div>
    </div>

    <div class="row m-0 footer-newsletter">
        <div class="col-12 col-sm-9 p-0">
            <input type="email" name="email" class="form-control input-lg" placeholder="Email"/>
        </div>

        <div class="col-12 col-sm-3 p-0">
            <button class="btn btn-primary btn-block text-center" type="submit" style="padding: 7px 0 !important;"><?php echo _e('Go'); ?></button>
        </div>
    </div>

    <?php if (get_option('disable_captcha', $params['id']) != 'y'): ?>
        <div class="row">
            <div class="col-12">
                <div class="control-group form-group">
                    <label><?php _e("Security code"); ?></label>
                    <div class="mw-ui-row captcha-holder">
                        <div class="mw-ui-col">
                            <module type="captcha"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
</form>