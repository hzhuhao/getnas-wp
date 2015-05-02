<?php
	$post = $wp_query->post;
	if ( is_category( array('hardware','cpu','memory','motherboard','harddrive','fan','extend','network','case','power')) ) {
	    include(TEMPLATEPATH . '/category-hardware.php');
	} else {
	    include(TEMPLATEPATH . '/category-default.php');
	}
?>