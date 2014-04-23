
                <?php
                $total = 59.40;
                $discount = $this->session->userdata('discount');
                $job_data = $this->session->userdata('job_data');
                ?>
                <div class="row app-slide" data-div-slide="4">
                    <div class="span6 offset3">
                        <p><strong>Job name :</strong> <?php echo $job_data['name']; ?></p>
                        <form action="">
                            <ul class="invoice">
                                <li class="item">
                                    <span class="app-img-numb"><span class="app-img-numb">56</span> Images</span>
                                    <span class="pull-right">$59</span>
                                </li>
                                <li>
                                    <span class="app-img-numb">TAX (5%)</span>
                                    <span class="pull-right">$5</span>
                                </li>
                                <li>
                                    <span class="app-img-numb">First Job Discount</span>
                                    <span class="pull-right">-$5</span>
                                </li>
                                <li>
                                    <span class="app-img-numb">BTW</span>
                                    <span class="pull-right">$1.40</span>
                                </li>
                                <li class="final">
                                    <span class="app-img-numb">Ammount Payable (incl blc)</span>
                                    <span class="pull-right total_payable"><?php echo $total ?></span>
                                    <input type="hidden" name="total" value="<?php echo $total ?>" class="total_payable">
                                </li>
                                <?php if (isset($_GET['applied']) && $_GET['applied'] == 'coupon') { ?>
                                <li class="discount">
                                    <span class="app-img-numb">Discount(By using coupon code)</span>
                                    <span class="pull-right total_payable"><?php echo $discount ?>%</span>
                                    <input type="hidden" name="total" value="59.40" class="total_payable">
                                </li>
                                <li class="after_discount final">
                                    <span class="app-img-numb">After Discount</span>
                                    <span class="pull-right total_payable"><?php echo $total - (($total/100)*$discount) ?></span>
                                    <input type="hidden" name="total" value="59.40" class="total_payable">
                                </li>
                                <?php } ?>
                            </ul>
                            <!-- <label class="have-coupon-label"><input type="checkbox" name="have_coupon"> I have coupon</label> -->
                            <div class="have-coupon-input">
                                <input class="" type="text" name="coupon_code" placeholder="Enter your coupon code">
                                <i class="btn icon-ok" id="submit_coupon_code"></i>
                            </div>

                            <label><input type="checkbox" name="tnc_accept"> I accepted <a href="">terms &amp; conditions</a></label>
                            <div class="addtional-items">
                                <h3>What happen to your images</h3>
                                <p class="sub-des">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, rerum, natus eius minima et optio tempore consequuntur alias dolorum corporis. Necessitatibus, voluptate eveniet eligendi iure perferendis facilis soluta ducimus provident.</p>

                                <label><input type="checkbox" name="return_to_ftp"> Return files to my FTP server</label>
                            </div>
                            <div class="text-right">
                                <input class="btn btn-success" type="submit" name="accept_n_pay" value="Approve quotation &amp; pay online">
                            </div>
                        </form>

                        <?php echo form_open('order/apply_coupon'); ?>
                            <input class="coupon_code_input" type="hidden" name="coupon_code">
                            <input type="hidden" name="step" value="4">
                            <input type="submit" id="submit_coupon" value="" class="hide">
                        <?php echo form_close(); ?>
                    </div>

                    <div class="clear"></div>

                    <div class="paied-status span6 offset3">
                        <ul class="job-info">
                            <li><strong>Job Name : </strong><?php echo $job_data['name']; ?></li>
                            <li><strong>Processiing : </strong><span class="processing-status">Image is processing</span></li>
                            <li><strong>Number : </strong><?php echo $job_data['no_of_image']; ?> <?php echo ($job_data['no_of_image']>1)?'Images':'Image' ?></li>
                        </ul>
                        <div class="paid-status-img-bar-area">
                            <div class="paid-status-img-bar">
                                <span><strong>Images</strong> <?php echo $job_data['no_of_image']; ?> <?php echo ($job_data['no_of_image']>1)?'Images':'Image' ?></span>
                                <a href="#" class="pull-right paid-status-col">+</a>
                            </div>
                            <div class="clear"></div>
                            <div class="paid-status-img paid-status-img-ajax row">
                                <?php if (isset($image_preview_box)): ?>
                                    <?php echo $image_preview_box; ?>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
                </div>