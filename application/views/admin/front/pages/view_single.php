<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View Textblock</title>
</head>
<body>
	<h1><?php echo $pages->title ?></h1>
	<p>Description: <?php echo $pages->page_body; ?></p>
	<span>Icon: <?php echo $pages->seo_keyword; ?></span>
	<span>Icon: <?php echo $pages->seo_desc; ?></span>
	<span>Type: <?php echo page_type($pages->page_type); ?></span>
	<p>Posted on: <?php echo display_date($pages->posted); ?></p>
	<p><a href="<?php echo base_url('admin/content_box/edit_block/'.$pages->id); ?>">Edit</a> | <a href="<?php echo base_url('admin/content_box/') ?>">View All</a></p>
</body>
</html>