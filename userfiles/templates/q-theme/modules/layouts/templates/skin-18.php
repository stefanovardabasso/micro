<?php

/*

type: layout

name: Blog Posts - 3 per row

position: 18

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-50';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-50';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section <?php print $layout_classes; ?> fx-deactivate edit safe-mode nodrop" field="layout-skin-18-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <module type="posts" template="default" limit="3" hide_paging="true" />
    </div>
</section>