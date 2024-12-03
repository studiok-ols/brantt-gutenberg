<?php
$query = new WP_Query(
	array(
		'post_type' => 'post',
		'orderby' => 'title',
		'order'   => $attributes['order'],
		'posts_per_page' => -1,
	)
);


$html = null;
if(!empty($query->posts)){

	$html .= '<div ' . get_block_wrapper_attributes(). '>';

	$html .= '<ul>';

	foreach ($query->posts as $k=>$v) {

		$html .= '<li>';
		$html .= '<a href="'.get_permalink($v).'" class="post-work-link">';

		$html .= '<div class="post-work-image-wrapper">';
		$html .= get_the_post_thumbnail($v->ID, 'full');
		$html .= '</div>';

		$html .= '<div class="post-work-text-wrapper">';

		if(0==$k) {
			$html .= '<span class="featured-post">Featured post</span>';
		}

		$html .= '<h2 class="title">' . $v->post_title . '</h2>';
		$blocks = parse_blocks( $v->post_content );
		if(!empty($blocks)){
			foreach ($blocks as $block) {
				$html .= render_block($block);
			}
		}

		$html .= '<span class="post-read-more">Read More</span>';
		$html .= '</div>';

		$html .= '</a>';
		$html .= '</li>';
	}

	$html .= '</ul>';
	$html .= '</div>';
}
echo $html;
