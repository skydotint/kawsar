<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add Textblock</title>
</head>
<body>
	
	<h1>Add Textblock</h1>
	<?php echo form_open('admin/content_box/add_block'); ?>
	<p class="title input_row">
	<label>Title: </label>
	<?php echo form_input('title', set_value('title')); ?>
	</p>
	<p class="title input_row">
	<label>Description: </label>
	<?php echo form_textarea('description', set_value('description')); ?>
	</p>
	<p class="title input_row">
	<label>Icon: </label>
	<?php echo form_input('icon', set_value('icon')); ?>
	</p>
	<p class="title input_row">
	<label>Type: </label>
	<?php echo form_dropdown('type', textblock_type_data(), set_value('type')); ?>
	</p>
	<p class="title input_row">
	<?php echo form_hidden('posted', time()); ?>
	<?php echo form_submit('', 'Submit'); ?>
	</p>
	<?php echo form_close(); ?>
</body>
</html>