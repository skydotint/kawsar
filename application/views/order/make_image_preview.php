<?php if (count($images)>0): ?>
	<?php foreach ($images as $img): ?>
		<div class="span3 img-item">
			<div class="img"><img src="<?php echo base_url('uploads/projects/'.$username.'/'.$img['job_id'].'/before/'.$img['file_name']); ?>" alt=""></div>
			
			<?php if ($edit): ?>
				<div class="controls">
					<a href="<?php echo base_url('order/del_image/'.$img['id']) ?>" class="del_image"><i class="icon-remove"></i></a>
					<a href="#<?php //echo base_url('order/add_img_instruction/'.$img['id']) ?>" class="edit_img" id="img-<?php echo $img['id'] ?>" data-toggle="popover" title="<?php echo $img['id'] ?>: Instruction" data-content="<textarea>And here's some <b>amazing</b> content. It's very engaging. right?</textarea><br><br><a class='add_img_instruction btn'>Edit Instruction</a>" data-original-title="A Title"><i class="icon-edit"></i></a>
				</div>
			<?php endif ?>
		</div>

	<?php endforeach ?>
<?php endif ?>