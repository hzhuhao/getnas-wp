<?php
$post = $wp_query->post;
if ( in_category( array('hardware','cpu','memory')) ) {
    include(TEMPLATEPATH . '/single-hardware.php');
} else {
    include(TEMPLATEPATH . '/single-default.php');
}
?>