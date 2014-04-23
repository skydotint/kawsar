<html>
    <head>   
	<link href="<?php echo base_url('public/assets/dropzone/css/dropzone.css'); ?>" type="text/css" rel="stylesheet" />
	<script src="<?php echo base_url('public/assets/dropzone/dropzone.js'); ?>"></script>
    </head>
    <body>
	<form action="<?php echo base_url('dropzone/upload'); ?>" class="dropzone" id="cpf-dropzone">
		<div class="fallback">
			<input name="file" type="file" multiple />
		</div>
	</form>
	<script>
// "myAwesomeDropzone" is the camelized version of the HTML element's ID
Dropzone.options.cpfDropzone = {
  paramName: "file", // The name that will be used to transfer the file
  maxFilesize: 2, // MB
  accept: function(file, done) {
  	console.log(file);
  	console.log(done);
    if (file.name == "justinbieber.jpg") {
      done("Naha, you don't.");
    }
    else { done(); }
  }
};
	</script>
    </body>
</html>
