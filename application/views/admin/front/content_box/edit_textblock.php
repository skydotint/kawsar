<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit Textblock</title>
</head>
<body>
	
	<h1>Edit Textblock</h1>
	<?php echo form_open('admin/content_box/edit_block'); ?>
	<p class="title input_row">
	<label>Title: </label>
	<?php echo form_input('title', $textblock->title); ?>
	</p>
	<p class="title input_row">
	<label>Description: </label>
	<?php echo form_textarea('description', $textblock->description); ?>
	</p>
	<p class="title input_row">
	<label>Icon: </label>
	<?php echo form_input('icon', $textblock->icon); ?>
	</p>
	<p class="title input_row">
	<label>Type: </label>
	<?php echo form_dropdown('type', textblock_type_data(), $textblock->type); ?>
	</p>
	<p class="title input_row">
	<?php echo form_hidden('modified', time()); ?>
	<?php echo form_hidden('id', $textblock->id); ?>
	<?php echo form_submit('', 'Submit'); ?>
	</p>
	<?php echo form_close(); ?>
</body>
</html>