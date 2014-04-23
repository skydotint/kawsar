<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$type = array(
			1 => 'Single Column',
			2 => 'Multi Column'
		);
	date_default_timezone_set('GMT');

	?>

	<a href="<?php echo base_url('admin/content_box/add_block'); ?>">Add Text Block</a>
	<table>
		<thead>
			<tr>
				<th>SN</th>
				<th>Title</th>
				<th>Description</th>
				<th>Icon</th>
				<th>Type</th>
				<th>Posted</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php $sn=0; foreach ($content_boxes as $value): $sn++ ?>				
			<tr>
				<td><?php echo $sn; ?></td>
				<td><?php echo $value['title']; ?></td>
				<td><?php echo $value['description']; ?></td>
				<td><?php echo $value['icon']; ?></td>
				<td><?php echo textblock_type($value['type']); ?></td>
				<td><?php echo date('Y-m-d', $value['posted']); ?></td>
				<td><a href="<?php echo base_url('admin/content_box/edit_block/'.$value['id']) ?>">Edit</a> | <a href="<?php echo base_url('admin/content_box/view/'.$value['id']) ?>">View</a> | <a href="<?php echo base_url('admin/content_box/delete/'.$value['id']) ?>">Delete</a></td>
			</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</body>
</html>