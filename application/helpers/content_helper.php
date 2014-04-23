<?php

if (!function_exists('page_type')) {
    function page_type($type_id='')
    {
        $type = array(
                1 => 'Normal',
                2 => 'Service with slider',
                3 => 'Service with before after',
                4 => 'Service with banner'
            );
        return $type[$type_id];
    }
}


if (!function_exists('textblock_type')) {
    function textblock_type($type_id='')
    {
        $type = array(
                1 => 'Single Column',
                2 => 'Multi Column',
                3 => 'Multi Column(Home)'
            );
        return $type[$type_id];
    }
}

if (!function_exists('textblock_type_data')) {
    function textblock_type_data()
    {
        $type = array(
                1 => 'Single Column',
                2 => 'Multi Column',
                3 => 'Multi Column(Home)'
            );
        return $type;
    }
}


if (!function_exists('easy_way_block')) {
	function easy_way_block()
	{
		$block = '';
        $block .= '<div class="easy-way-area">';
            $block .= '<div class="item-box span4">';
                $block .= '<img src="'. base_url('assets/images/easy-01.png') .'">';
                $block .= '<p class="content-title">Create Job</p>';
            $block .= '</div>';
            $block .= '<div class="item-box span4">';
                $block .= '<img src="'. base_url('assets/images/easy-02.png') .'">';
                $block .= '<p class="content-title">We Process</p>';
            $block .= '</div>';
            $block .= '<div class="item-box span4">';
                $block .= '<img src="'. base_url('assets/images/easy-03.png') .'">';
                $block .= '<p class="content-title">You Happy</p>';
            $block .= '</div>';
        $block .= '</div>';
        return $block;
	}
}


if (!function_exists('easy_way_title')) {
	function easy_way_title()
	{
		$block = '';
        $block .= '<div class="we-are service-head-area">';
            $block .= '<span class="left-shadow"></span>';
            $block .= '<h3 class="we-are-head">Easy Way</h3>';
            $block .= '<span class="right-shadow"></span>';
        $block .= '</div>';
        return $block;
	}
}


if (!function_exists('service_feat_block1')) {
	function service_feat_block1()
	{
		$block = '';
        $block .= '<div class="item-box secured span10 offset1">';
            $block .= '<div class="img left">secured</div>';
            $block .= '<div class="content left">';
                $block .= '<p class="content-title">Data Secured</p>';
                $block .= '<p class="service-main-content">We know you always want your Images to be in a safe hand. It is our duty to make sure that and we have arranged all the necessaries. We make sure only we both have the access to your images by providing you with fully encrypted web based application. The easiest, safest and the fasted process where you can share your files.</p>';
            $block .= '</div>';
        $block .= '</div>';
        return $block;
	}
}


if (!function_exists('service_feat_block2')) {
	function service_feat_block2()
	{
		$block = '';
        $block .= '<div class="item-box fast span10 offset1">';
            $block .= '<div class="img left">fast</div>';
            $block .= '<div class="content left">';
                $block .= '<p class="content-title">Super Fast Delivery</p>';
                $block .= '<p class="service-main-content">We guarantee you a faster delivery time than anyone else can offer. This is just not a commitment but a bible we rely on. We have Employees with great skills and speed who can deliver your requirements within your expected time frame.</p>';
            $block .= '</div>';
        $block .= '</div>';
        return $block;
	}
}


if (!function_exists('service_feat_block3')) {
	function service_feat_block3()
	{
		$block = '';
        $block .= '<div class="item-box price span10 offset1">';
            $block .= '<div class="img left">price</div>';
            $block .= '<div class="content left">';
                $block .= '<p class="content-title">Best Price</p>';
                $block .= '<p class="service-main-content">Where quality means everything to you price comes as next consideration. Clipping path family is one of the largest in the industry to offer you with both, Supper quality and Best price.  We have set our prices as economical as possible by all means to ensure better price than in-house editing.</p>';
            $block .= '</div>';
        $block .= '</div>';
        return $block;
	}
}




?>