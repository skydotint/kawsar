<?php $this->load->view('header'); ?>
    <div class="testimonial-area">
        <div class="container jobs">
            <div class="row">
                <div class="span12">
                    <h1 class="page-title">Current Jobs <a class="new-order btn btn-success" href="<?php echo base_url('order'); ?>"><i class="icon-book"></i> Dashboard</a></h1>
                </div>
                <p class="big_job_id span12">Job #<?php echo $new_job_id ?></p>
                <div class="span12">
                    <?php echo $this->session->flashdata('message'); ?>
                </div>
                <div class="span6">
                    <?php //echo form_open_multipart('order/create'); ?>
                    <form action="<?php echo base_url('order/create'); ?>" method="post">
                        <input type="hidden" name="images" value="" id="uploaded_images">
                        <input type="hidden" name="job_id" value="<?php echo $new_job_id ?>">
                        <div class="input_row row">
                            <div class="span3"><label class="" for="job_name">Your Job Name</label></div>
                            <div class="span3"><input type="text" id="job_name" name="name" placeholder="Write your job name" value="#<?php echo $new_job_id ?>"></div>
                        </div>
                        <div class="input_row row">
                            <div class="span3"><label class="" for="todo_note">Add Your Default Instruction</label></div>
                            <div class="span3"><span id="add_default_instruction" class="btn">Attach my default instruction</span></div>
                        </div>
                        <div class="input_row row">
                            <div class="span3"><label class="" for="todo_note">Your Instruction</label></div>
                            <div class="span3"><textarea name="todo" id="todo_note" cols="30" rows="10" placeholder="Write what you need us to do?" class=""></textarea>
                            <label class=""><input type="checkbox" name="make_default_instruction"> Save it as your default instruction for future</label></div>
                        </div>
                        <div class="input_row text-right">
                            <input type="submit" id="job_submit" value="Submit Job" class="hide submit-order">
                        </div>
                    </form>
                </div>

                <div class="span6">
                    <div class="input_row file_upload">
                        <!-- add drag and drop area for multiple image update -->
                        <!-- after successfully upload image, image data should saved in "images" table in mysql -->
                        <!-- <div id="mulitplefileuploader">Upload</div>
                        <div id="status"></div> -->
                        <p class="upload-info fetch-ftp text-error">Fetch from your FTP server?</p>
                        <div id="fetch-ftp">
                            <div id="fetch_msg_box">
                                <div class="alert alert-info">Add a folder to your FTP server and put all your files on that folder(don't zip it). Now please enter your FTP login information below.</div>
                            </div>
                            <?php echo form_open('order/fetch'); ?>
                            <div class="input_row">
                                <label class="" for="ftp_server">Your FTP Server IP/Address</label>
                                <input type="text" id="ftp_server" name="ftp_server" placeholder="Write your FTP server address" value="">
                            </div>
                            <div class="input_row">
                                <label class="" for="ftp_user">Your FTP Username</label>
                                <input type="text" id="ftp_user" name="ftp_user" placeholder="Write your FTP username" value="">
                            </div>
                            <div class="input_row">
                                <label class="" for="ftp_pass">Your FTP Password</label>
                                <input type="text" id="ftp_pass" name="ftp_pass" placeholder="Write your FTP password" value="">
                            </div>
                            <div class="input_row">
                                <label class="" for="ftp_directory">Your FTP Flder Address</label>
                                <input type="text" id="ftp_directory" name="ftp_directory" placeholder="Write your FTP directory address" value="">
                            </div>
                            <div class="input_row text-right">
                                <a href="#" class="check_status">Check connection</a>
                                <?php echo form_submit('', 'Fetch Files', 'class="btn" id="fetch-ftp-submit"'); ?>
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>

                <div class="file-uploading-box">
                    <div class="span4">
                        <div id="mulitplefileuploader">Upload</div>
                        <div id="status"></div>
                    </div>
                    <div class="span4"></div>
                    <div class="span4">
                        
                    </div>
                </div>
                <div class="clear"></div>

                <div class="image_preview_box">image_preview_box</div>
                
                <?php if (isset($image_preview_box)): ?>
                <div class="span12">
                    <div id="image_preview_box" class="row preview-area">
                        <?php echo $image_preview_box; ?>
                    </div>
                </div>
                <?php endif ?>

                <div class="trial-button-area">
                    <a href="#" id="submit-order" class="trial-button">Submit Job</a>
                </div>
            </div>
        </div>
    </div>
<?php $this->load->view('footer'); ?>