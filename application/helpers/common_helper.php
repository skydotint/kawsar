<?php

if (!function_exists('site_seo_title')) {
	function site_seo_title($title='')
	{
		$default = 'Clipping Path Family';
		$title_sap = '';

		if ($title!='') {
			$title_sap = ' | ';
		}

		if(current_url()==site_url()){
		    return $default . $title_sap . $title;
		}
		return $title . $title_sap . $default;
	}
}


if (!function_exists('outsider_blog')) {
	function outsider_blog(){
		$CI =& get_instance();
		$query = "Select * FROM wp_posts WHERE post_type='post' AND post_status='publish' ORDER BY id DESC LIMIT 5";

	    $q = $CI->db->query($query);
		
		$blog_list = "<ul>";
	    if ($q->num_rows()>0) {
	    	foreach ($q->result() as $value) {
		    	// echo "<pre>";
		    	// print_r($value);
		    	// echo "</pre>";
		    	$blog_list .= "<li>";
			    	$blog_list .= '<a href="'.$value->guid.'">';
			    		$blog_list .= '<p class="blog-title">'.$value->post_title.'</p>';
			    	$blog_list .= '</a>';
		    	$blog_list .= '</li>';
	    	}
	    } else {
	    	$blog_list .= '<li><a href="#">No blog post found</a></li>';
	    }
		$blog_list .= '</ul>';

		return $blog_list;
	}
}

if (!function_exists('display_date')) {
	function display_date($int_time='', $format='d-m-Y')
	{
		return date($format, $int_time);
	}
}

// end common helper
?>