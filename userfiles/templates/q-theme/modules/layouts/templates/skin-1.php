<?php

/*

type: layout

name: CLEAN CONTAINER

position: 0

*/

?>

<?php
if (!$classes['padding_top']) {
    $classes['padding_top'] = 'p-t-100';
}
if (!$classes['padding_bottom']) {
    $classes['padding_bottom'] = 'p-b-100';
}

$layout_classes = ' ' . $classes['padding_top'] . ' ' . $classes['padding_bottom'] . ' ';
?>

<section class="section <?php print $layout_classes; ?> nodrop clean-container edit" field="layout-skin-1-<?php print $params['id'] ?>" rel="module">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                 <div class="element mw-empty-element allow-drop"></div>
            </div>
        </div>
    </div>
</section>