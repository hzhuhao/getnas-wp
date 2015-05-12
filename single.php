<?php
$post = $wp_query->post;
if ( in_category( array('hardware','cpu','motherboard','memory','extend','fan','case','power','harddrive','network')) ) {
    include(TEMPLATEPATH . '/single-hardware.php');
} else {
    include(TEMPLATEPATH . '/single-default.php');
}
?>