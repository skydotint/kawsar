
                <?php
                $job_data = $this->session->userdata('job_data');
                ?>
                <div class="row app-slide" data-div-slide="5">
                    <div class="span12">
                        <div class="alert alert-success">
                            <h4>Your job <?php echo $job_data['name']; ?> is ready. You can download the images from here.</h4>
                            <p>You can download the the file unlit February 15, 2011 at the latest. After this date, the files will be deleted from our server</p>
                        </div>
                        <p>There area several ways to download your images:</p>
                    </div>
                    <div class="download-ways row">
                        <div class="span3">
                            <div class="download-area">
                                <h3>Download via this website</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-block btn-success">Download ZIP file</a>
                            </div>
                        </div>
                        <div class="span3">
                            <div class="download-area">
                                <h3>Download via FTP</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-block btn-success">Download via FTP</a>
                            </div>
                        </div>
                        <div class="span3">
                            <div class="download-area">
                                <h3>Email job to</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-block btn-success">Email job</a>
                            </div>
                        </div>
                        <div class="span3">
                            <div class="download-area">
                                <h3>FTP Drop</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-block btn-success">Drop images</a>
                            </div>
                        </div>
                    </div>
                    <div class="paied-status span12">
                        <ul class="job-info">
                            <li><strong>Job Name : </strong><?php echo $job_data['name']; ?></li>
                            <li><strong>Processiing : </strong><span class="processing-status">Complete</span></li>
                            <li><strong>Number : </strong><?php echo $job_data['no_of_image']; ?> <?php echo ($job_data['no_of_image']>1)?'Images':'Image' ?></li>
                        </ul>
                        <div class="paid-status-img-bar-area">
                            <div class="paid-status-img-bar">
                                <span><strong>Images</strong> <?php echo $job_data['no_of_image']; ?> <?php echo ($job_data['no_of_image']>1)?'Images':'Image' ?></span>
                                <a href="#" class="pull-right paid-status-col">+</a>
                            </div>
                            <div class="clear"></div>
                            <div class="paid-status-img row">
                                <div class="span3 img-item">
                                    <div class="img">
                                        <img src="http://localhost/local/cpf/uploads/projects/itsmeka/16/before/1394917617_images.jpg" alt="">
                                    </div>
                                    <div class="app-img-cn">
                                        <a href="#" class="js-ok"><i class="icon-ok-circle"></i></a>
                                        <a href="#" class="js-cancel"><i class="icon-remove-circle"></i></a>
                                        <a href="#" class="js-download"><i class="icon-download"></i></a>
                                    </div>
                                </div>

                                <div class="span3 img-item">
                                    <div class="img">
                                        <img src="http://localhost/local/cpf/uploads/projects/itsmeka/16/before/1394917617_web-home-phot.jpeg" alt="">
                                    </div>
                                    <div class="app-img-cn">
                                        <a href="#" class="js-ok"><i class="icon-ok-circle"></i></a>
                                        <a href="#" class="js-cancel"><i class="icon-remove-circle"></i></a>
                                        <a href="#" class="js-download"><i class="icon-download"></i></a>
                                    </div>
                                </div>

                                <div class="span3 img-item">
                                    <div class="img">
                                        <img src="http://localhost/local/cpf/uploads/projects/itsmeka/16/before/1394917565_images.jpg" alt="">
                                    </div>
                                    <div class="app-img-cn">
                                        <a href="#" class="js-ok"><i class="icon-ok-circle"></i></a>
                                        <a href="#" class="js-cancel"><i class="icon-remove-circle"></i></a>
                                        <a href="#" class="js-download"><i class="icon-download"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="last-area span12">
                        <div class="pull-right">
                            <a href="#" class="btn btn-danger">Reject entire job</a>
                            <a href="#" class="btn btn-warning">Create a correction job</a>
                        </div>
                        <div class="text-left">
                            <span>Happy with our service ?</span>
                            <a href="#" class="">Share</a>
                        </div>
                    </div>
                </div>