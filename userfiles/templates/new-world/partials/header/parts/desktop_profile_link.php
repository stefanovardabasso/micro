<?php if ($profile_link == 'true'): ?>
    <script>
        var $window = $(window), $document = $(document);
        $document.ready(function () {
            $('.js-register-modal').on('click', function () {
                $(".js-login-window").hide();
                $(".js-forgot-window").hide();
                $(".js-register-window").show();
            });
            $('.js-login-modal').on('click', function () {
                $(".js-register-window").hide();
                $(".js-forgot-window").hide();
                $(".js-login-window").show();
            });
        });
    </script>
    <li class="dropdown btn-member ml-4">
        <a href="#" class="dropdown-toggle btn btn-primary" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle-o d-none"></i><?php if (user_id()): ?><?php print user_name(); ?><?php else: ?><?php echo _e('Log in'); ?><?php endif; ?></a>
        <ul class="dropdown-menu">
            <?php if (user_id()): ?>
                <li><a href="#" data-toggle="modal" data-target="#loginModal"><?php _e("Profile"); ?></a></li>
                <li><a href="#" data-toggle="modal" data-target="#ordersModal"><?php _e("My Orders"); ?></a></li>
            <?php else: ?>
                <li><a href="#" class="js-login-modal" data-toggle="modal" data-target="#loginModal"><?php _e("Login"); ?></a></li>
                <li><a href="#" class="js-register-modal" data-toggle="modal" data-target="#loginModal"><?php _e("Register"); ?></a></li>
            <?php endif; ?>

            <?php if (is_admin()): ?>
                <li><a href="<?php print admin_url() ?>"><?php _e("Admin panel"); ?></a></li>
            <?php endif; ?>

            <?php if (user_id()): ?>
                <li><a href="<?php print api_link('logout') ?>"><?php _e("Logout"); ?></a></li>
            <?php endif; ?>
        </ul>
    </li>
<?php endif; ?>