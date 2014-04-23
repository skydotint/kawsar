    </div>
    <div class="clear"></div>
    <footer class="">
        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="span12 text-center">Copyright &copy; 2014, Clipping Path Family</div>
                </div>
            </div>
        </div>
    </footer>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery-ui.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <?php if (ENVIRONMENT=='development') { ?>
        <script src="<?php echo base_url('assets/js/jquery.preloader.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.lavalamp.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.isotope.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.hoverIntent.minified.js'); ?>"></script>

        <!-- LayerSlider styles -->
        <!-- jQuery with jQuery Easing JS -->
        <script src="<?php echo base_url('assets/layerslider/jQuery/jquery-easing-1.3.js'); ?>"></script>
         
        <!-- LayerSlider from Kreatura Media -->
        <script src="<?php echo base_url('assets/layerslider/js/layerslider.kreaturamedia.jquery.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.autoclass.js'); ?>"></script>

    <?php } else { ?>
        <script src="<?php echo base_url('assets/js/all.min.js'); ?>"></script>
    <?php } ?>

    <!-- custom scripts -->
    <script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>
    
    <!-- file upload -->
    <?php if (isset($file_upload) && $file_upload==true ): ?>
        <script src="<?php echo base_url('assets/js/jquery.form.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js/jquery.uploadfile.min.js'); ?>"></script>
        <script>
        jQuery(document).ready(function()
        {
            var img_ids = '';
            var settings = {
                url: base_url + "order/upload/",
                dragDrop:true,
                showStatusAfterSuccess:false,
                fileName: "myfile",
                // allowedTypes:"psd,jpg,png,gif,doc,pdf,zip",  
                returnType:"json",
                onSelect:function(files){ return true;},            
                onSubmit: function (files, xhr) {},
                onError: function (files, status, message) {
                   // alert((data));
                   // console.log(files);
                   // console.log(xhr);
                   // console.log(data);
                },
                onSuccess:function(files,data,xhr)
                {
                    // alert((data));
                    // console.log(files);
                    // console.log(xhr);
                    console.log(data);

                    if (img_ids=='') {
                        img_ids = data.image_id;
                    } else {
                        img_ids = img_ids +','+ data.image_id;
                    }

                    console.log("img_ids: " + img_ids);

                    jQuery('#uploaded_images').attr('value', img_ids);
                    jQuery('.image_preview_box').trigger('click');
                    jQuery('.image_preview_box_other').trigger('click');
                },
                showDelete:true,
                deleteCallback: function(data,pd)
                {
                    for(var i=0;i<data.length;i++)
                    {
                        jQuery.post("delete.php",{op:"delete",name:data[i]},
                        function(resp, textStatus, jqXHR)
                        {
                            //Show Message  
                            jQuery("#status").append("<div>File Deleted</div>");      
                        });
                    }      
                    pd.statusbar.hide(); //You choice to hide/not.
                }
            }
            // console.log(settings);
            var uploadObj = jQuery("#mulitplefileuploader").uploadFile(settings);
        });
        </script>
    <?php endif ?>
    
</body>
</html>