<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CPF</title>
    <!-- Font embeding -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    
    <!-- CSS Include -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-responsive.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/lavalamp.css'); ?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/layerslider/css/layerslider.css'); ?>">
    
    <!-- IE 7 Supports -->
    <!--[if IE 7]>
      <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome-ie7.min.css'); ?>">
    <![endif]-->

    <!-- Main Stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/chat.css'); ?>">
    <script type="text/javascript">
        var base_url = '<?php echo base_url ();?>';
    </script>
</head>

<body>
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=366685830126558";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <header id="header">
        <div class="sub-area">
            <div class="main-wrapper fixed-area">
                <div class="top-area">
                    <div class="container">
                        <div class="row">
                            <div class="span6">
                                <ul class="top-menu">
                                    <!-- <li><a href="<?php echo base_url('about'); ?>">About us</a></li> -->
                                    <li><a href="<?php echo base_url('blog'); ?>">Blog</a></li>
                                    <li><a href="<?php echo base_url('faq'); ?>">FAQ</a></li>
                                    <!-- <li><a href="<?php echo base_url('help'); ?>">Help</a></li> -->
                                </ul>
                            </div>
                            <div class="span6">
                                <ul class="user-system">
                                <!-- <?php echo form_open("auth/login");?>
                                <?php 
                                if ($this->ion_auth->logged_in()) {
                                ?>
                                    <li>
                                        <a class="new-order btn btn-success" href="<?php echo base_url('order/create'); ?>"><i class="icon-upload"></i> Upload Images</a>
                                    </li>
                                    <li>
                                        <a class="my-account btn btn-danger" href="<?php echo base_url('user/dashboard'); ?>"><i class="icon-cogs"></i> My Account</a>
                                    </li>
                                    <li>
                                        <a class="exit btn" href="<?php echo base_url('auth/logout'); ?>"><i class="icon-signout"></i> Logout</a>
                                    </li>
                                <?php 
                                } else {
                                    $identity = array('name' => 'identity',
                                        'id' => 'identity',
                                        'type' => 'text',
                                        'placeholder' => 'Email',
                                        'value' => $this->form_validation->set_value('identity'),
                                    );
                                    $password = array('name' => 'password',
                                        'id' => 'password',
                                        'type' => 'password',
                                        'placeholder' => 'Password',
                                        'value' => $this->form_validation->set_value('password'),
                                    );
                                ?>
                                    <li class="mail-area">
                                        <?php echo form_input($identity);?>
                                        <span class="forget-button"><a href="#">?</a></span>
                                    </li>
                                    <li class="password-area">
                                        <?php echo form_input($password);?>
                                        <span class="forget-button"><a href="#">?</a></span>
                                    </li>
                                    <li class="login-area">
                                        <?php echo form_submit('submit', 'Log In');?>
                                    </li>
                                    <li class="signUp-area">
                                        <a href="<?php echo base_url('auth/register'); ?>">Sign Up</a>
                                    </li>
                                <?php } ?>
                                <?php echo form_close();?>  -->
                                    <li class="search-area">
                                        <a href="#"><i class="icon-search"></i></a>
                                        <div class="search-box">
                                            <input type="text" placeholder="Search" />
                                            <input type="submit" value="" />
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top-area-controller"><p>-</p></div>
            </div>
            <div class="main-wrapper head-area">
                <div class="container">
                    <div class="row">
                        <div class="span4">
                            <span class="logo"><a href="#">Clipping path family</a></span>
                        </div>
                        <div class="span8">
                            <div class="main-menu-area">
                                <!-- lavaLamp class is require for lavaLamp effect -->
                                <ul class="main-menu lavaLamp">
                                    <li><a href="<?php echo base_url(); ?>" class="active">Home</a></li>
                                    <li><a href="<?php echo base_url('about'); ?>">About</a></li>
                                    <li><a href="<?php echo base_url('portfolio'); ?>">Portfolio</a></li>
                                    <li><a href="<?php echo base_url('services'); ?>">Services +</a>
                                        <ul class="sub-menu">
                                            <li><a href="<?php echo base_url('services/single/clipping-path'); ?>">Clipping Path</a></li>
                                            <li><a href="<?php echo base_url('services/single/photoshop-masking'); ?>">Masking</a></li>
                                            <li><a href="<?php echo base_url('services/single/color-masking'); ?>">Color Masking and correction</a></li>
                                            <li><a href="<?php echo base_url('services/single/photo-retouch'); ?>">Retouching</a></li>
                                            <li><a href="<?php echo base_url('services/single/old-photo-restoration'); ?>">Old Photo restoration</a></li>
                                            <li><a href="<?php echo base_url('services/single/neck-join'); ?>">Neck Join</a></li>
                                            <li><a href="<?php echo base_url('services/single/mannequin-removal'); ?>">Invisible man</a></li>
                                            <li><a href="<?php echo base_url('services/single/shadow-creation'); ?>">Shadow Creation</a></li>
                                            <li><a href="<?php echo base_url('services/single/reflection-creation'); ?>">Reflation creation</a></li>
                                            <li><a href="<?php echo base_url('services/single/cropping-resize'); ?>">Cropping &amp; Resize</a></li>
                                            <li><a href="<?php echo base_url('services/single/web-image-optimization'); ?>">Web image optimization</a></li>
                                            <li><a href="<?php echo base_url('services/single/logo-and-identity-design'); ?>">Logo and identity design</a></li>
                                            <li><a href="<?php echo base_url('services/single/ui-design'); ?>">UI Design</a></li>

                                        </ul>
                                    </li>
                                    <!-- <li><a href="#">UI Design</a></li>
                                    <li><a href="#">Identity Design</a></li> -->
                                    <li><a href="<?php echo base_url('services/price'); ?>">Price</a></li>
                                    <li><a href="<?php echo base_url('howitworks'); ?>">How It works</a></li>
                                    <li><a href="<?php echo base_url('contact'); ?>">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="back-to-top"></div>
        </div>
    </header>
	<div class="main-body">


		<div class="container">
			<div class="row">
				<div class="span6 offset3">
					<div class="window">
						<h1 class="title text-center">Live Chat</h1>

						<div class="span2 person right">
							<img src="<?php //echo base_url('assets/images/admin-pic.jpg'); ?>" alt="">
							<p class="info">
								<span class="name">Jonny Deep</span><br>
								<span class="designation">Customer Support Manager</span><br>
							</p>
						</div>
						<div class="clear"></div>
						<div class="accessories">
						</div>
						<div class="save_btn text-right">
							<a href="<?php base_url('chat/add_link'); ?>"><i class="icon-paper-clip"></i></a> <a href="<?php base_url('chat/email_chat'); ?>"><i class="icon-envelope"></i></a> <a class="save_exit" href="<?php base_url('chat/email_chat'); ?>">Exit &amp; Email</a></div>

						<div class="chat_box">
							<div id="chat_msgs_window">
                                
                            </div>
                            <form action="<?php echo base_url('chat/save_chat'); ?>" method="post">
								<div class="input_row">
									<input type="hidden" id="client_name" name="name" value="<?php echo $client_name; ?>">
								</div>
								<div class="input_row">
									<textarea name="msg" id="msg_area" cols="30" rows="3" placeholder="Write your message here..."></textarea>
								</div>
								<div class="input_row text-right">
									<input type="submit" value="SEND" id="chat_send">
								</div>
							</form>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>


    </div>
    <footer class="">
        <div class="container">
            <div class="row payment">
                <div class="span12">
                    <div class="copyright-area text-center">
                        <p>&copy; 2013. All rights reserved <a href="<?php echo base_url(); ?>">Clipping Path Family</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
    <script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.lavalamp.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.hoverIntent.minified.js'); ?>"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

    <!-- LayerSlider styles -->
    <!-- jQuery with jQuery Easing JS -->
    <script src="<?php echo base_url('assets/layerslider/jQuery/jquery-easing-1.3.js'); ?>"></script>

    <!-- Chat scripts -->
    <script src="<?php echo base_url('assets/js/chat.js'); ?>"></script>

    <!-- custom scripts -->
    <script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>
</body>
</html>