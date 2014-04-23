
		<form id="upload" method="post" action="<?php echo base_url('upload/do_upload'); ?>" enctype="multipart/form-data">
			<div id="drop">
				Drop Here Your Images to Upload<br>

				<a class="btn btn-info">Select Images</a>
				<input type="file" name="files[]" multiple />
				<!-- <input type="submit" value="Submit" /> -->
			</div>

			<ul>
				<!-- The file uploads will be shown here -->
			</ul>

		</form>
        
		<!-- JavaScript Includes -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="<?php echo base_url('assets/js/file_upload/jquery.knob.js'); ?>"></script>

		<!-- jQuery File Upload Dependencies -->
		<script src="<?php echo base_url('assets/js/file_upload/jquery.ui.widget.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/file_upload/jquery.iframe-transport.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/file_upload/jquery.fileupload.js'); ?>"></script>
		
		<!-- Our main JS file -->
		<script src="<?php echo base_url('assets/js/file_upload/script.js'); ?>"></script>
