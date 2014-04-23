<?php $this->load->view('client/header'); ?>
    <div class="testimonial-area">
        <div class="container jobs">
            <div class="row">
                <div class="span12">
                    <h1 class="page-title">Current Jobs <a class="new-order btn btn-info" href="<?php echo base_url('order'); ?>"><i class="icon-book"></i> Dashboard</a></h1>
                </div>
                <p class="big_job_id span12">Job #<?php echo $new_job_id; ?></p>
                <div class="span12">
                    <?php echo $this->session->flashdata('message'); ?>
                </div>
            </div>
            <div class="row">
                <div class="span10 offset1">
                    <div class="app-line-area">
                        <ul class="app-line-list">
                            <li class="<?php echo isset($_GET['step'])&&$_GET['step']==1?'active':''; ?>" data-li-slide="1">
                                <span class="icon icon-01"></span>
                                <span class="text">1. Type Instructions</span>
                            </li>
                            <li class="<?php echo isset($_GET['step'])&&$_GET['step']==2?'active':''; ?>" data-li-slide="2">
                                <span class="icon icon-02"></span>
                                <span class="text">2. Upload Photos</span>
                            </li>
                            <li class="<?php echo isset($_GET['step'])&&$_GET['step']==3?'active':''; ?>" data-li-slide="3">
                                <span class="icon icon-03"></span>
                                <span class="text">3. Order Service</span>
                            </li>
                            <li class="<?php echo isset($_GET['step'])&&$_GET['step']==4?'active':''; ?>" data-li-slide="4">
                                <span class="icon icon-04"></span>
                                <span class="text">4. Pay Online</span>
                            </li>
                            <li class="<?php echo isset($_GET['step'])&&$_GET['step']==5?'active':''; ?>" data-li-slide="5">
                                <span class="icon icon-05"></span>
                                <span class="text">5. Download Edited Photos</span>
                            </li>
                        </ul>
                        <div class="border-hori"></div>
                    </div>
                </div>
            </div>
            <div class="app-lines-content">
                <?php $order_data = array(); ?>
                <?php if (empty($_GET['step'])): ?>
                    <?php redirect(base_url('order/create/?step=1')); exit; ?>
                <?php endif ?>
                <?php $view = isset($_GET['step'])?'order/steps/step'.$_GET['step']:'order/steps/no_step'; ?>
                <?php $this->load->view($view, $order_data); ?>
            </div>

            <!-- I dont know where should it to put -->
            <!-- <div class="trial-button-area">
                <a href="#" id="submit-order" class="trial-button">Submit Job</a>
            </div> -->
        </div>
    </div>
<?php $this->load->view('client/footer'); ?>