<?php

/*
 * Disable WooCommerce JetPack nag
 */
add_filter( 'jetpack_just_in_time_msgs', '__return_false' );

/*
 * Remove acf-post2post nag
 */
add_filter('remove_hube2_nag', '__return_true');
