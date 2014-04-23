
                <div class="row app-slide" data-div-slide="3">
                    <div class="span6 offset3">
                        <div class="alert alert-success">
                            Thank you very much for your request. We have received your request for quote for following job. We will send the quotation and notify you by email.
                        </div>
                    </div>
                    <div class="span6 offset3">
                        <?php $job_data = $this->session->userdata('job_data'); ?>
                        <p><strong>Job name : </strong><?php echo $job_data['name']; ?></p>
                        <p><strong>Instruction : </strong><?php echo $job_data['todo']; ?></p>
                        <p><strong>Number of image : </strong><?php echo $job_data['no_of_image']; ?>( Disregard the count of image if compressed file is uploaded)</p>
                    </div>
                    <div class="span12 text-center">
                        <a href="#" class="next-btn btn btn-warning">Modify</a>
                    </div>
                </div>