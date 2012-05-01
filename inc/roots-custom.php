<?php

<<<<<<< HEAD
function my_list_categories( $args ) {

	// get category objects
	$categories = get_categories($args);

	// set vars
	$output = '';

	// loop objects
	foreach($categories as $category) {

		// build output
		$output .= '<li class="' . "well span1" . '">';
		$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
		$output .= '</li>';	
	} 

	// return output
	return $output;
}?>
=======
// Custom functions
>>>>>>> fc9f001d96b20a9dba507b1c80f824d39d5645b9
