
                <div class="row app-slide active" data-div-slide="1">
                    <div class="span6 offset3">
                        <?php //echo form_open_multipart('order/create'); ?>
                        <form action="<?php echo base_url('order/create'); ?>" method="post">
                            <input type="hidden" name="images" value="" id="uploaded_images">
                            <input type="hidden" name="step" value="<?php echo $_GET['step'] ?>">
                            <input type="hidden" name="job_id" value="<?php echo $new_job_id ?>">
                            <div class="input_row row">
                                <div class="span2"><label class="" for="job_name">Your Job Name</label></div>
                                <div class="span4"><input type="text" id="job_name" name="name" placeholder="Write your job name" value="#<?php echo $new_job_id ?>"></div>
                            </div>
                            <div class="input_row row">
                                <div class="span2"><label class="" for="todo_note">Add Your Default Instruction</label></div>
                                <div class="span4"><span id="add_default_instruction" class="btn">Attach my default instruction</span></div>
                            </div>
                            <div class="input_row row">
                                <div class="span2"><label class="" for="todo_note">Your Instruction</label></div>
                                <div class="span4"><textarea name="todo" id="todo_note" cols="30" rows="10" placeholder="Write what you need us to do?" class=""></textarea>
                                <label class=""><input type="checkbox" name="make_default_instruction"> Save it as your default instruction for future</label></div>
                            </div>
                            <div class="input_row text-right">
                                <input type="submit" id="job_submit" value="Save &amp; Upload Images" class="submit-order btn btn-success">
                            </div>
                        </form>
                    </div>
                    <div class="clear"></div>
                </div>