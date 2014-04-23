<?php echo $this->load->view('header'); ?>

<div class="login-page container">
    <div class="row">
        <div class="span4 offset4 login-box well">
    
            <h1><?php echo lang('login_heading');?></h1>
            <p class="alert alert-info"><?php echo lang('login_subheading');?></p>
            
            <?php if ($message): ?>
                <?php echo $message;?>
            <?php endif ?>
            

            <?php echo form_open("auth/login");?>

                <p>
                    <?php echo lang('login_identity_label', 'identity');?>
                    <?php echo form_input($identity);?>
                </p>

                <p>
                    <?php echo lang('login_password_label', 'password');?>
                    <?php echo form_input($password);?>
                </p>

                <p>
                    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
                    <?php echo lang('login_remember_label', 'remember');?>
                </p>

                <p class="text-right">
                    <span class="pull-left"><a href="<?php echo base_url('auth/forgot_password'); ?>"><?php echo lang('login_forgot_password');?></a> | <a href="<?php echo base_url('auth/signup'); ?>">Want a new account?</a></span>
                    <?php echo form_submit('submit', lang('login_submit_btn'), 'class="btn btn-success"');?>
                </p>
                <div class="clearfix"></div>

            <?php echo form_close();?>
            
        </div>
    </div>
</div>

<?php echo $this->load->view('footer'); ?>
