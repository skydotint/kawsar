
                <div class="row app-slide" data-div-slide="2">
                    <div class="span4 file-upload-box">
                        <div class="file-uploading-box">
                            <div id="mulitplefileuploader">Upload</div>
                            <div id="status"></div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div class="span4 file-upload-box">
                        <div class="u_images_ftp">
                            <h3>Upload your images via FTP!</h3>
                            <p><span class="text-alert">IMPORTANT:</span> Please use your FTP software to upload the files to our server. When all the images are uploaded, click submit button.<br>
                            <strong><em>FTP Details:</em></strong><br>
                            <strong>Host:</strong> clippingpathfamily.com<br>
                            <strong>Username:</strong> <?php echo $this->session->userdata('username'); ?><br>
                            <strong>Password</strong>: same as web<br>
                            <strong>Directory:</strong> job-19579/input</p>
                        </div>
                    </div>
                    <div class="span4 file-upload-box">
                        <div class="to_u_images_ftp">
                            <p>To upload images via FTP, first create a new job;
                            Then login to our FTP server using an FTP program;
                            Go to the folder with the corresponding job number;
                            Here you will find a folder marked “original”; drag the individual images to this folder.</p>
                            <p class="upload-info fetch-ftp text-error btn" data-toggle="modal" data-target=".bs-example-modal-sm">Fetch from your FTP server?</p>

                            <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="fetch-ftp-model">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <?php echo form_open('order/fetch'); ?>
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Fetch File From FTP</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="input_row file_upload">
                                                <div id="fetch-ftp">
                                                    <div id="fetch_msg_box">
                                                        <div class="alert alert-info">Add a folder to your FTP server and put all your files on that folder(don't zip it). Now please enter your FTP login information below.</div>
                                                    </div>
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
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="#" class="check_status">Check connection</a>
                                            <?php echo form_submit('', 'Fetch Files', 'class="btn" id="fetch-ftp-submit"'); ?>
                                        </div>
                                        <?php echo form_close(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="span12 text-center">
                        <?php echo form_open('order/create'); ?>
                            <?php echo form_hidden('step', '2'); ?>
                            <input type="submit" value="Save &amp; Request Quote" class="btn btn-success">
                        <?php echo form_close(); ?>
                    </div>
                    <div class="clear"></div>
                    <div class="app-image-prev ">
                        <?php if (isset($image_preview_box_edit)): ?>
                        <div class="span12">
                            <div class="image_preview_box_content row preview-area">
                                <?php echo $image_preview_box_edit; ?>
                            </div>
                        </div>
                        <?php else: ?>
                            <div class="image_preview_box"></div>
                        <?php endif ?>
                    </div>
                </div>