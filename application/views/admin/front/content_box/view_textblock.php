<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View Textblock</title>
</head>
<body>
	<h1><?php echo $textblock->title ?></h1>
	<span>Type: <?php echo textblock_type($textblock->type) ?></span>
	<span>Icon: <?php echo $textblock->icon ?></span>
	<p>Description: <?php echo $textblock->description ?></p>
	<p>Posted on: <?php echo display_date($textblock->posted); ?></p>
	<p><a href="<?php echo base_url('admin/content_box/edit_block/'.$textblock->id) ?>">Edit</a> | <a href="<?php echo base_url('admin/content_box/') ?>">View All</a></p>
</body>
</html>