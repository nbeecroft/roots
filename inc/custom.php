<?php
//Custom Functions
function my_list_categories( $args ) {

	// get category objects
	$categories = get_categories($args);

	// set vars
	$output = '';

	// loop objects
	foreach($categories as $category) {

		// build output
		$output .= '<li class="' . "" . '">';
		$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
		$output .= '</li>';	
	} 

	// return output
	return $output;
}?>
