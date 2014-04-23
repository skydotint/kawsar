<?php echo $this->load->view('header'); ?>

<div class="login-page container">
    <div class="row">
        <div class="span4 offset4 login-box well">
    
            <h1>Signup</h1>
            <p class="alert alert-info"><?php echo lang('create_user_subheading');?></p>
            
            <?php if ($message): ?>
                <div id="infoMessage" class="alert alert-error"><?php echo $message;?></div>
            <?php endif ?>
            

            <?php echo form_open("auth/signup");?>

                <p>
                    <label for="username">Username:</label>                    
                    <?php echo form_input($username);?>
                </p>

                <p>
                    <label for="email">Email Address:</label> 
                    <?php echo form_input($email);?>
                </p>

                <p>
                    <?php echo lang('login_password_label', 'password');?>
                    <?php echo form_input($password);?>
                </p>

                <p>
                    <?php echo lang('create_user_password_confirm_label', 'password_confirm');?>
                    <?php echo form_input($password_confirm);?>
                </p>

                <p class="text-right">
                    <a href="<?php echo base_url('auth/login'); ?>" class="pull-left">Alrady have an account?</a>
                    <?php echo form_submit('submit', 'Signup Now', 'class="btn btn-success"'); ?>
                </p>
                <div class="clearfix"></div>

            <?php echo form_close();?>

        </div>
    </div>
</div>

<?php echo $this->load->view('footer'); ?>